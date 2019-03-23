<?php
require_once("server.php");


$id=$_REQUEST['id'];
$username= $_REQUEST['username'];
$firstname= $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
//$email=$_REQUEST['email'];
//$contact=$_REQUEST['contact'];

$query= "update users set  username='$username', firstname='$firstname', lastname='$lastname',  where id='$id'";

if(mysqli_query($db,$query)){
    header("location:tables1.php?id=$id");
}
else{
    echo "Record failed to update";
}
