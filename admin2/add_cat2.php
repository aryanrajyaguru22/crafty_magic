<?php
    $data = file_get_contents("./catagory.txt");
    // $data_arr=explode(",",$data);

    function uplode($filename)//uplodes profilepicture
    {

        $file=$_FILES[$filename];
        $file_name=$_FILES[$filename]["name"];
        $file_tmp_name=$_FILES[$filename]["tmp_name"];
        $file_size=$_FILES[$filename]["size"];
        $file_error=$_FILES[$filename]["error"];
        $file_type=$_FILES[$filename]["type"];
        $file_get_ex=explode('.',$file_name);
        $file_ex=strtolower(end($file_get_ex));
        $allowed_ex=array('html','php','js');

        if(in_array($file_ex,$allowed_ex))//this will chack if the file formate is alloud or not
        {
            if($file_error==0)
            {
                if($file_size < 2097152)//5242880 byts = 2mb
                {
                    // $file_new_name=uniqid('',true).".".$file_ex;
                    $file_destination="C:/wamp64/www/crafty_magic/". $file_name;

                    move_uploaded_file($file_tmp_name,$file_destination);
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
    function copyf($name)
    {
        $source = 'C:/wamp64/www/crafty_magic/tamplate/tamplate.php'; 
        $dedtination="C:/wamp64/www/crafty_magic/".$name.".php";
        if(copy($source,$dedtination))
        {
            echo "<script>alert('page added.')</script>";
        }
        else{
            echo "error";
        }
    }
?>
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
    <form action="" method="post" enctype="multipart/form-data">
        <textarea name="cat" id="" cols="50" rows="10"><?php echo ltrim($data);?></textarea>
        <input type="submit" value="Add" name="add"><br><br>

        <!-- <input type="file" name="page" id=""> -->
        <input type="text" name="pagename" id="">
        <input type="submit" value="uplode" name="uplode">
    </form>
</body>
</html>
<?php 
    if(isset($_POST["add"]))
    {
        $ndata=$_POST[""];
        file_put_contents("./catagory.txt",$ndata);
    }
    if(isset($_POST["uplode"]))
    {
        $name=$_POST["pagename"];
        copyf($name);
        // $src = "C:/wamp64/www/crafty_magic/tamplate/tamplate.php"; 
        // $dest="C:/wamp64/www/crafty_magic/crafty_magic/";
        // shell_exec("cp -r $src $dest");
        // $filename="page";
        // uplode($filename);
    }

?>