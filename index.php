<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Irtiqa Blood Donation</title>
    <link rel="stylesheet" href="LoginPageStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <h2>
        Homepage
    </h2>
</div>

<div class="content">
    <?php if(isset($_SESSION['success'])): ?>
    <div class="error success">
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    <?php if(isset($_SESSION["username"])): ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p><a href="index.php?logout='1'" style="color: red">Logout</a> </p>
<?php endif ?>
    <?php if(isset($_SESSION["firstname"])): ?>
    <p>Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
    <?php endif?>
</div>

</body>

</html>