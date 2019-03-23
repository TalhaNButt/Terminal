<?php
session_start();
$firstname="";
$lastname="";
$username="";
$errors=array();
$msg = "";

$db=mysqli_connect('localhost', 'root', '', 'registeration');
if(isset($_POST['signup'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $bloodgroup = mysqli_real_escape_string($db, $_POST['bloodgroup']);
    $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $profession = mysqli_real_escape_string($db, $_POST['profession']);
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
    if (!preg_match($pattern, $password_1)) {
        array_push($errors, " Password requires Minimum eight characters, at least one uppercase letter, one lowercase letter and one number");
    }


    if (empty($firstname) || empty($lastname) || empty($username) || empty($password_1) || empty($bloodgroup) || empty($mobilenumber) || empty($gender) || empty($profession)) {
        array_push($errors, "Please fill all the required fields");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two Passwords do not match");
    }
    $queryy = "Select * from users where username='$username'";
    $result = mysqli_query($db, $queryy);
    if (mysqli_num_rows($result) > 0) {
        array_push($errors, "Username Already exists");
    }
    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users(firstname, lastname, username, password, bloodgroup, mobilenumber, gender, profession) VALUES ('$firstname', '$lastname', '$username', '$password', '$bloodgroup', '$mobilenumber', '$gender', '$profession')";
        mysqli_query($db, $sql);
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['bloodgroup'] = $bloodgroup;
        $_SESSION['mobilenumber'] = $mobilenumber;
        $_SESSION['username'] = $username;
        $_SESSION['profession'] = $profession;
        $_SESSION['gender'] = $gender;
        header('location: userProfile.php');

    }

}

if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if($_POST['username']=="admin" && $_POST['password']=="admin"){
        header('location: tables1.php');
    }
    if(count($errors)==0){
        $password=md5($password);
        $query="SELECT * FROM users where username='$username' and password='$password' ";
        $result=mysqli_query($db, $query);
        if(mysqli_num_rows($result) ==1){
            $row=$result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['bloodgroup']=$row['bloodgroup'];
            $_SESSION['mobilenumber']=$row['mobilenumber'];
            $_SESSION['username']=$row['username'];
            $_SESSION['profession']=$row['profession'];
            $_SESSION['gender']=$row['gender'];
            header('location: userProfile.php');
        }

        else{
            array_push($errors, "The Username or Password is incorrect");
        }
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['image']);
    unset($_SESSION['bloodgroup']);
    unset($_SESSION['gender']);
    unset($_SESSION['mobilenumber']);
    unset($_SESSION['profession']);
    header('location:titlePage.php');
}
if(isset($_POST['submit'])){
    $username =  $_SESSION['username'];
    $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
    $bloodgroup=mysqli_real_escape_string($db, $_POST['bloodgroup']);
    $mobilenumber=mysqli_real_escape_string($db, $_POST['mobilenumber']);
    $profession=mysqli_real_escape_string($db, $_POST['profession']);
    $queries= "update users set firstname='$firstname', lastname='$lastname',bloodgroup='$bloodgroup', mobilenumber='$mobilenumber', profession='$profession' where username='$username'";

    if(mysqli_query($db,$queries)){
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['bloodgroup'] = $bloodgroup;
        $_SESSION['mobilenumber'] = $mobilenumber;
        $_SESSION['profession'] = $profession;
        header("location:userProfile.php");
    }
    else {
        echo "error";
    }
}


// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $username = $_SESSION['username'];
    // Get image name
    $image = $_FILES['image']['name'];

    // image file directory
    $target = "images/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $sql = "update users set image='$image' where username='$username'";
    mysqli_query($db, $sql);
    $query1="SELECT image FROM users where username='$username'";
    $result=mysqli_query($db, $query1);
    if(mysqli_num_rows($result) ==1)
        $_SESSION['image']=$target;
    header('location:userProfile.php');
}
