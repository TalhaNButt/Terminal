<?php
include_once "server.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Donation</title>
    <link rel="stylesheet" href="Donationequest.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

</head>
<body>


<?php
if(isset($_GET['submit'])){

}
?>

<!-- NavBar -->
<nav  id="Above" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a><img src="BDD.png" alt="brandImage" class="navbar-brand" style="width: 20px"></a>
    <a><img src="Irtiqa-sm.png" alt="brandImageLetters" class="navbar-brand" style="float:left;width:30%"></a>

    <a class="nav-link" href="loginPage.php" style="float: right;width: 7%; color: whitesmoke">Sign In</a>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>


<nav id="Below" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navbar2" class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link"  href="titlePage.php" style="color: whitesmoke">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html" style="color: whitesmoke">Need Blood?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Donationrequests.php" style="color: whitesmoke">Donation Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="facts.html" style="color: whitesmoke">Blood Facts & Tips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: whitesmoke">Why Us?</a>
            </li>
        </ul>

    </div>
</nav>
<div class="row" style="margin: 30px">
    <div class="col-md-4">
        <h1>Donation Requests</h1>
    </div>
    <div class="col-md-8">
        <button id="BtnMain1" class="btn btn-primary btn-lg my-2 my-sm-0" type="submit" name="makerequest"><a href="MakeRequests.php">Make a request</a></button>
    </div>

</div>

<ul class="blood-list">
    <?php
    $query="select * from requests";
    $res=mysqli_query($db,$query);
    ?>
    <?php
    while($row=mysqli_fetch_array($res)){
        ?>
        <li>

            Urgently require <?php echo $row['bloodgroup'] ?> for patient in Faisalabad contact 03216657255
            <br>
            <strong> <?php echo $row['s_name']?> </strong>
            <small class="generic-gray">27 Apr, 2018</small>

        </li>
        <form action="MakeRequests.php" method="get">
            <input type="button" class="btn-danger" name="response" value="Requst" name="submit"></div>
        </form>

        <?php
    }
    ?>


</ul>

<footer style="background-color: darkgray;" class="page-footer font-small unique-color-dark">

    <div style="background-color: rgba(52,58,63,0.88);">
        <div class="container">


            <div class="row py-4 d-flex align-items-center">


                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>



                <div class="col-md-6 col-lg-7 text-center text-md-right">


                    <a class="fb-ic">
                        <i class="fa fa-facebook white-text mr-4"> </i>
                    </a>

                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>

                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-4"> </i>
                    </a>

                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-4"> </i>
                    </a>
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text"> </i>
                    </a>

                </div>

            </div>

        </div>
    </div>

    <div class="container text-center text-md-left mt-5">

        <div class="row mt-3">

            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">Irtiqa Blood Donation</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>

            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">Services</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#">Donation</a>
                </p>
                <p>
                    <a href="#">Receiving</a>
                </p>
                <p>
                    <a href="#">Magnificio Motales</a>
                </p>
                <p>
                    <a href="#">Jinakdin Tha</a>
                </p>

            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#">Your Account</a>
                </p>
                <p>
                    <a href="#">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#">Track the Donors</a>
                </p>
                <p>
                    <a href="#">Help</a>
                </p>

            </div>


            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> Lahore, LHR 50004, PK</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> irtiqa@outlook.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 92 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 92 234 567 89</p>

            </div>
        </div>
    </div>

    <div style="background-color: rgba(52,58,63,0.88)" class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Irtiqa Blood Donation</a>
    </div>

</footer>

</body>
</html>