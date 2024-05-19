<?php
    include "conection.php";
    $data=file_get_contents("./catagory.txt");
    $data_arr=explode(",",$data);
    $ind=end($data_arr);

    function uplode()//uplodes profilepicture
    {

        $file=$_FILES["product_img"];
        $file_name=$_FILES["product_img"]["name"];
        $file_tmp_name=$_FILES["product_img"]["tmp_name"];
        $file_size=$_FILES["product_img"]["size"];
        $file_error=$_FILES["product_img"]["error"];
        $file_type=$_FILES["product_img"]["type"];
        $file_get_ex=explode('.',$file_name);
        $file_ex=strtolower(end($file_get_ex));
        $allowed_ex=array('png','jpg','jpeg');

        if(in_array($file_ex,$allowed_ex))//this will chack if the file formate is alloud or not
        {
            if($file_error==0)
            {
                if($file_size < 2097152)//5242880 byts = 2mb
                {
                    $file_new_name=uniqid('',true).".".$file_ex;
                    $file_destination="C:/wamp64/www/crafty_magic/product_img/". $file_new_name;

                    move_uploaded_file($file_tmp_name,$file_destination);
                    return $file_new_name;
                }
                else
                {
                    echo "<script>alert('This is too large file.')</script>";
                }
            }
            else
            {
                echo "<script>alert('There is a error in file uplode please try again.')</script>";
            }
        }
        else
        {
            echo "<script>alert('This file type is not allowed please enter a valid file type.')</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
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
    <!-- </ul>    -->
    <form action="" method="post" enctype="multipart/form-data"><br><br>
        <input type="text" name="pname" id="" placeholder="product name"><br><br>

        <input type="number" name="price" id="" placeholder="Price of product"><br><br>

        <input type="file" name="product_img" id=""><br><br>
        <textarea name="dis" id="" cols="30" rows="10" placeholder="discription"></textarea><br><br>

        <select name="cat" id="">Select Subject
            <option value="">--Select--</option>
            <?php
            for ($i = 0; $i < count($data_arr); $i++) {
                    echo "<option value='$data_arr[$i]'>$data_arr[$i]</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Add" name="add"><br><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["add"]))
    {
        $pname=$_POST["pname"];
        $price=$_POST["price"];
        $filename=uplode();
        $cat=$_POST["cat"];
        $dis=$_POST["dis"];

        $add="INSERT INTO product (name,catagory,img,price,dis) VALUES ('$pname','$cat','$filename','$price','$dis');";
        $fire_add=mysqli_query($con,$add);
        if(!$fire_add)  
        {
            echo mysqli_error($con);
        }

    }
?>