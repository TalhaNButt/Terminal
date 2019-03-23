<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="editProfileStyle.css">
    <link rel="stylesheet" href="userProfileStyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">




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

    <a class="nav-link" href="titlePage.php" style="float: right;width: 7%; color: whitesmoke" name="logout">Logout</a>


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
    <form method="post" action="editProfile.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <div>
                        <input type="hidden" name="image">
                        <img src="<?php echo $_SESSION['image']; ?>" alt="picture" />
                    </div>
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        <input type="file" name="image"/>
                    </div>
                    <div>
                        <input type="submit" value="upload image" name="upload">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?>
                    </h5>
                    <h6>
                        Student
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>

                </div>
            </div>

        </div>
        <div class="row">

        </div>
        <div class="container">
            <hr>

            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="editProfile.php" method="post">



                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">First Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo $_SESSION['firstname']; ?>" style="width:50% ;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">Last Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $_SESSION['lastname']; ?>" style="width:50% ;">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">Phone Number</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Phone Number" name="mobilenumber" value="<?php echo $_SESSION['mobilenumber']; ?>" style="width:50% ;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">Profession</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $_SESSION['profession']; ?>" class="form-control" placeholder="Profession" name="profession" style="width:50% ;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">Blood Type</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['bloodgroup']; ?>" placeholder="Blood Type" name="bloodgroup" style="width:50% ;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label style="float: right;width: 50%;">Address</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Address" name="text1" style="width:50% ;">
                            </div>
                        </div>
                        <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width: 20%;margin-left: 25em;margin-top: 2em">
                    </form>
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
    </form>
</div>
</body>
</html>