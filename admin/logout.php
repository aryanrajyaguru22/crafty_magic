<?php

if(isset($_COOKIE["admin"]))
{
    unset($_COOKIE["admin"]);
    header("location:login.php");
}
else
{
    header("location:index.php");
}
?>