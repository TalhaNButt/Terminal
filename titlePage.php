<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Donation</title>
    <link rel="stylesheet" href="TitlePageStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

</head>
<body>

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


<div class="container-fluid">

    <!-- title image and Heading -->
<div class="row">
    <div class="col-md-7">
        <div class="title">
            <img src="Irtiqa-lg.png" alt="brandImageLetters" class="navbar-brand" style="width:100%">
            <h1 class="MainHeading">Most Reliable Blood Donation Service In Pakistan</h1>

            <p>Irtiqa Blood Donation Service is a Non-Profit Organization ensuring well-being of the society. We have established ourselves
                as one of the most respected and highly like-able organization in Pakistan and have been working tirelessly to help others</p>
            <p>Need for blood is the most crucial problem that we yet face today. Although many organizations have been trying to overcome
                this problem but it remains anyhow. We have built a far more efficient way that handles this problem and eliminates it to a certain degree</p>
            <p>We want everyone in the community to help us grow and spread our message of peace. Join today to become a donor of blood and save lives
                or receive blood if you need it. Come join our community today! </p>
            <br>
        </div>
    </div>
    <div class="col-md-5">
        <img src="BDD.png" alt="titleImage" class="ImageMain" style="width:300px">

    </div>
</div>


    <!--Paragraphs Below Cover Photo -->
<div class="row">
    <div id="cardGroup" class="card-group">
        <div class="card">
            <div class="card-header text-center">Become a Member</div>
            <div class="card-body text-center">
                <p class="card-text">There is no fee or paid membership to join this community. It is free and you can just click the sign up button to join us today. </p>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center">Donate Blood and Save Lives</div>
            <div class="card-body text-center">
                <p class="card-text">Help the people of Pakistan by donating your precious blood and save millions of lives.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center">Recieve Blood</div>
            <div class="card-body text-center">
                <p class="card-text">Recieve Blood from other donors if you are in dire need of blood. Just locate donors through our efficient tracking algorithm and contact them.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center">Spread Awareness</div>
            <div class="card-body text-center">
                <p class="card-text">Let your loved ones know about this community so more lives could be saved.</p>
            </div>
        </div>
    </div>

</div>
</div>


<?php include('footer.php');