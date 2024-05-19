<?php 
session_start();

    if(isset($_SESSION["logindatabase"]))
    {
        unset($_SESSION["logindatabase"]);
        // echo $_SESSION["logindatabase"];
        header("location:index.php");
    }
    else
    {
        header("location:index.php");
    }
?>