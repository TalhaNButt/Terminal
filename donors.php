<?php
include_once "server.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="donorsStyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!-- NavBar -->
<nav  id="Above" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a><img src="imgTitle.png" alt="brandImage" class="navbar-brand" style="width: 20px"></a>
    <a><img src="Irtiqa-sm.png" alt="brandImageLetters" class="navbar-brand" style="float:left;width:30%"></a>

    <a id="Sign" href="titlePage.php" style="float: right;width: 7%; color: whitesmoke">Logout </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<!--Second Navbar-->
<nav id="Below" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navbar2" class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="Donationrequests.php" style="color: whitesmoke">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: whitesmoke">Why Us?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: whitesmoke">Our Benefactors</a>
            </li>
        </ul>
    </div>
</nav>


<h1 class="text-center">Donors Located Around You</h1>
<?php
$query = "select * from users";
$result = mysqli_query($db, $query);
?>


<div class="container">

    <div class="row">
        <?php
        while($row=mysqli_fetch_array($result))
        {


            ?>
            <!--team-1-->

            <div class="col-lg-4">
                <div class="our-team-main">

                    <div class="team-front">
                        <img src="ayar.jpg" class="img-fluid"/>
                        <h3><?php echo $row['firstname'] ?></h3>
                        <div><p style="float: right"><?php echo $row['profession'] ?></p>
                            <p style="float: left"><?php echo $row['bloodgroup'] ?></p>
                        </div>

                    </div>


                    <div class="team-back">
	<span>BLOOD GROUP IS
        <?php
        echo $row['bloodgroup'];
        ?>
    </span>
                    </div>


                </div>
            </div>
            <?php

        }
        ?>
        <!--team-1-->




    </div>
</div>
</body>
</html>