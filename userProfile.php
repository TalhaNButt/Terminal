<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="userProfileStyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">


    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

</head>


<body>
<!-- NavBar -->
<nav  id="Above" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a><img src="imgTitle.png" alt="brandImage" class="navbar-brand" style="width: 20px"></a>
    <a><img src="Irtiqa-sm.png" alt="brandImageLetters" class="navbar-brand" style="float:left;width:30%"></a>

    <a class="nav-link" href="titlePage.php" style="float: right;width: 7%; color: whitesmoke">Logout</a>

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


<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <?php
                    $query = "select image from users where username = '$_SESSION[username]'";

                    ?>
                    <img src="<?php echo $_SESSION['image']; ?>" alt="Image" style="width: 40%;"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                       <?php echo $_SESSION['firstname'];?>
                        <?php echo $_SESSION['lastname'];?>
                    </h5>
                    <h6 style="color: red">
                        <?php echo $_SESSION['bloodgroup'];?>
                    </h6>
                    <p class="profile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="userProfile.php" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="log.html" role="tab" aria-controls="profile" aria-selected="false">Log</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="transactions.html" role="tab" aria-controls="profile" aria-selected="false">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="feedback.php" role="tab" aria-controls="profile" aria-selected="false">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <a href="editProfile.php"><button type="button" class="btn btn-primary" >Edit Profile</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>FIND DONORS AROUND YOU</p>
                    <a href="donors.php"><img src="donors.png" alt="donors image" style="width:50%;"></a>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Name</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['username'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['firstname'];?>
                                    <?php echo $_SESSION['lastname'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['gender'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['mobilenumber'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['profession'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Blood Type</label>
                            </div>
                            <div class="col-md-6">
                                <p style="color: red"><?php echo $_SESSION['bloodgroup'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>