<?php
    $host="localhost";
    $db="crafty";
    $user="root";
    $pass="";

    $con=mysqli_connect($host,$user,$pass,$db);
    if(!$con)
    {
        echo "error in conaction";
    }
?>