<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_form.css">
    <title>Login</title>
</head>
<body>
    
   
    <form  method="POST">
      <div class="wrapper">
         <div class="title">
           Login
         </div>
         <div class="form">
             <div class="inputfield">
               <label>Email</label>
               <input type="email" class="input" placeholder="abc@gmail.com" name="Email" required>
            </div>  
            
            <div class="inputfield">
             <label>Password </label>
             <input type="password" class="input" minlength="7" maxlength="14" placeholder="Enter Password" name="Password" required>
          </div>
           
            
   
           <div class="inputfield">
             <input type="submit" value="Login" class="btn" required name="submit">
           </div>
          <center>
            <label>New User</label> 
            <a href="Sign_form.php">Sign Up</a>
            <br> <br>
            <a href="index.php">Home Page</a>
          </center>
         </div>
     </div>
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit']))
    {
        // $host="localhost";
        // $user="root";
        // $pass="";
        // $db="crafty";
        // $con=mysqli_connect($host,$user,$pass,$db);
        // if (!$con)
        // {
        //     echo"<script>alert('error in database connection');</script>";
        // }
        include "conection.php";
        $pass=$_POST['Password'];
        $email=$_POST['Email'];

        $query="SELECT * from user where email='$email'";
        // print_r($query);
        $result=mysqli_query($con, $query) or die(mysqli_error($con));
        $count=mysqli_num_rows($result);

        $row=mysqli_fetch_assoc($result);
        if ($count!=0)
        {
          $dbpass=$row["pass"];
            if($pass==$dbpass)
            {
              $_SESSION["logindatabase"]=$email;
              echo '<script>alert("You have logged-in successfully..!🥳🥳")</script>';
              echo '<script>window.location = "index.php";</script>';
            }
            else {
              echo '<script>alert("wrong username or password")</script>';
            }
        }
        elseif($count==0)
        {
          echo '<script>alert("There is no such account..Please create one")</script>';
		      echo '<script>window.location = "Sign_form.php";</script>';
        }
        
        }

?>