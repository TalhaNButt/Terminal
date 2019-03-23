<?php include ('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="LoginPageStyle.css">
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
        <div class="card-header"><h2 id="LoginHeading" style="text-align: center">Login</h2></div>
        <div class="card-body">
            <form method="post" action="loginPage.php">
                <?php include('errors.php');?>
                <div class="form-group">
                    <label for="email">User Name: </label>
                    <input type="text" class="form-control" id="email" placeholder="Enter UserName" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button id="SubmitButton" type="submit" class="btn btn-primary" name="login">Login</button>

                <p id="cardBottom">Don't have an account? <a href="signUp.php">Sign up</a></p>
            </form>


        </div>

    </div>
</div>

</body>
</html>
