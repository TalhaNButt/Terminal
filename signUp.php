<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUpStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-light">
    <a><img src="imgTitle.png" alt="brandImage" class="navbar-brand" style="width: 20px"></a>
    <a><img src="Irtiqa-sm.png" alt="brandImageLetters" class="navbar-brand" style="width:30%"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>

<div class="container">

    <div class="card mx-auto">
        <div class="card-header"><h2 id="SignUpHeading" style="text-align: center">Sign Up</h2></div>
        <div class="card-body">
                    <form method="post" action="signUp.php">
                        <?php include('errors.php');?>
                        <div class="row">

                            <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" style="float:left;width:48%;margin-right: 1em">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname"  value="<?php echo $lastname; ?>" style="float:right;width:48%">
                        </div>

                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" id="mail" name="username"  value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <input type="password" class="form-control" placeholder="Password" name="password_1">
                        </div>

                        <div class="row">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_2">
                        </div>
                        <div class="row">
                            <input type="text" class="form-control" placeholder="Mobile Phone Number" name="mobilenumber">
                        </div>

                        <div class="row">
                            <select class="form-control" name="gender" style="float:left;width: 30%;margin-right: 1em;">
                                <option>Gender</option><option>Male</option><option>Female</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Your Profession" name="profession" style="float:left;width: 60%;margin-right: 1em;">
                        </div>
                        <div class="row" style="float:left;width: 200%;margin-right: 1em;">
                            <select class="form-control" name="bloodgroup" style="float:left;width: 50%;margin-right: 1em;">
                                <option>A+</option><option>A-</option><option>AB+</option><option>AB-</option>
                            </select>
                        </div>






                        <p id="SignUpText">By clicking "Sign Up", you agree to the <a href="#">Terms (Updated)</a> and <a href="#">Privacy Policy (Updated)</a></p>
                        <button id="SubmitButton" type="submit" class="btn btn-primary" name="signup">SignUp</a></button>



                <p id="cardBottom">Already have an account? <a href="loginPage.php">Login</a></p>
            </form>
        </div>

    </div>
</div>


</body>
</html>