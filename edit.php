
<!DOCTYPE html>
<?php
include('server.php');

$id;
$username;
$firstname;
$lastname;

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phoneno'];
    $query = "update users set  username='$username', firstname='$name', lastname='$lastname',  where id='$id'";
    $result = mysqli_query($db,$query);
    if(mysqli_query($db,$query)){
        header("location:adminPanel.php");
        echo $result;
    }
}

if(isset($_GET['id'])){
    $query = "select * from users where id=".$_GET['id'];
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $id=$row['id'];
        $username=$row['username'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
    }
}
?>
<html>
<body>
<form action="edit.php" method="post">
    <label for="">id:</label>
    <input type="text" name="id" value="<?php echo $id;?>">
    <br>
    <br>
    <label for="">Name:</label>
    <input type="text" name="name" value="<?php echo $name;?>">
    <br>
    <br>
    <label for="">Email:</label>
    <input type="text" name="email" value="<?php echo $email;?>">
    <br>
    <br>
    <label for="">Contact:</label>
    <input type="text" name="phoneno" value="<?php echo $contact;?>">
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
    <br>
    <br>
</form>
</body>
</html>