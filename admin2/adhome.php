<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="adhome.php">Home</a>
        </li>
        <li>
            <a href="add_cat.php">Add catagory</a>
        </li>
        <li>
            <a href="add_prod.php">Add product</a>
        </li>
    </ul>
    <form action="" method="post">

    </form>
</body>
</html>

<?php 
    include "conection.php";

    $select="SELECT * FROM orders;";
    $fire=mysqli_query($con,$select);
    if(!$fire)
    {
        echo mysqli_error($con);
    }
    $count=0;
    while($row=mysqli_fetch_assoc($fire))
    {
        $count++;
    }
    echo "total numbers of orders: ".$count;
?>