<?php
include_once "server.php";
?>
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


    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

</head>

<?php
if(isset($_GET['sub'])){



    $id=0;
    $city=$_GET['city'];
    $name=$_GET['s_name'];
    $blood=$_GET['blood'];
    $desc=$_GET['description'];
    $query="insert into requests values('$id','$name','$blood','$desc')";
    $result=mysqli_query($db,$query);
}

?>
<body>
<!-- NavBar -->
<nav  id="Above" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a><img src="imgTitle.png" alt="brandImage" class="navbar-brand" style="width: 20px"></a>
    <a><img src="Irtiqa-sm.png" alt="brandImageLetters" class="navbar-brand" style="float:left;width:30%"></a>



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

<div class="row">

</div>
<div class="container">
    <hr>

    <div class="tab-content profile-tab" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">





            <form action="MakeRequests.php" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <label style="float: right;width: 50%;">Name</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name" name="s_name" style="width:50% ;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label style="float: right;width: 50%;">Blood Type</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Blood Type" name="blood" style="width:50% ;">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="City" name="city" style="width:50% ;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label style="float: right;width: 50%;">Description</label>
                    </div>
                    <div class="col-md-6">
                        <textarea rows="4" cols="50" class="form-control" name="description" style="width:50% ;">Description</textarea>
                    </div>
                </div>
                <input type="submit" value="Make Request" name="sub" class="btn btn-primary" style="width: 20%;margin-left: 25em;margin-top: 2em">
            </form>
        </div>

        </form>
    </div>
</body>
</html>