<?php
require_once ("server.php");

if(isset($_GET['id'])){
    $query = "delete from users where id=".$_GET['id'];

    if(mysqli_query($db,$query)){
        header("location:tables1.php");
    }
    else
        echo "not deleted";
        header("location:tables1.php");
}

?>