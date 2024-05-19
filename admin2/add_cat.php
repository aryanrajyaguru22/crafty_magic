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
    
</body>
</html>
<?php
$flag=0;
    $data = file_get_contents("./catagory.txt");
    $data_arr=explode(",",$data);
    if($data_arr[0]==null)
    {
        $flag=1;
    }
    // echo $data;
    // print_r($data_arr);

    function copyf($name)
    {
        $source = 'C:/wamp64/www/crafty_magic/tamplate/tamplate.php'; 
        $dedtination="C:/wamp64/www/crafty_magic/".$name.".php";
        if(copy($source,$dedtination))
        {
            echo "<script>alert('catagory has been added.')</script>";
        }
        else{
            echo "error";
        }
    }
    function deletef($name)
    {
        unlink("C:/wamp64/www/crafty_magic/".$name.".php");
    }

    function uplode($prod)
    {
        global $data,$flag;
        if($flag==0)
        {
            $new_data=rtrim($data);
            $newprod=$new_data.",".$prod;
            file_put_contents("./catagory.txt", $newprod);
            copyf($prod);
            // echo $newprod;
        }
        else
        {
            $newprod=$data.$prod;
            file_put_contents("./catagory.txt", $newprod);
            copyf($prod);

        }
    }

    function delete($key)
    {
        global $data_arr;
        $data_arr2=$data_arr;
        $subtodel = array_search($key,$data_arr2);
        // echo $subtodel;
        unset($data_arr2[$subtodel]);
        // print_r($data_arr2);
        $newsubjects=implode(",",$data_arr2);
        // echo $newsubjects;
        file_put_contents("./catagory.txt", $newsubjects);

    }

if(array_key_exists("add",$_POST))
{
    uplode($_POST["prod"]);
    // echo "<script>alert('catagory has been added.')</script>";

}

if(array_key_exists("delete_sub",$_POST))
{
    delete($_POST["key"]);
    $fname=$_POST["key"];
    deletef($fname);
    echo "<script>alert('catagory deleted done.')</script>";

}

end($data_arr);
$key=key($data_arr);
$i=0;?>

<table>
    <th>subject</th>
    <?php
while($i<=$key)
{
    // if($data_arr==null)
    // {
    //     break;
    // }
    ?>
    <tr>
        <td align="center">
            <?php echo $data_arr[$i] ?>
        </td>
        <td>
        <form action="" method="post">
            <input type="submit" value="delete" name="delete_sub" style="margin-left: 15px;">
            <input type="hidden" name="key" value="<?php echo $data_arr[$i] ?>">
        </form>
    </td>
    </tr>
    <?php
$i++;
}
?>
<form action="" method="post">
    <tr>
        <td>
            <input type="text" name="prod" id="">
        </td>
        <td>
            <input type="submit" value="add" name="add" style="margin-left: 15px;">
        </td>
    </tr>

</form>
</table>