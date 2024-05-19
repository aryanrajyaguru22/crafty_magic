<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg_form.css">
    <title>Sign Up</title>
</head>
<body>
    
   
    <form action="" method="POST">
      <div class="wrapper">
         <div class="title">
           Sign up
         </div>
         <div class="form">
            <div class="inputfield">
               <label> Creat Username </label>
               <input type="text" class="input" placeholder="Enter Userame" name="User_id" required>
            </div>  
            <div class="inputfield">
                <label>Phone Number</label>
                <input type="number" class="input" maxlength="11" onKeyPress="if(this.value.length==10) return false" placeholder="+91xxxxxxxxxx" name="Mobile_No" required>
             </div> 
             <div class="inputfield">
               <label>Email</label>
               <input type="email" class="input" placeholder="abc@gmail.com" name="Email" required>
            </div>  
            
            <div class="inputfield">
             <label>Password </label>
             <input type="password" class="input" minlength="7" maxlength="14" placeholder="Enter Password" name="pass" required>
          </div>
         
         
           <div class="inputfield">
             <input type="submit" value="SignUp" class="btn" required name="submit">
             
           </div>
          <center>
            <label>Already User</label> 
            <a href="login.php">Login</a>
            <!-- <label>From Staff</label> 
            <a href="log_Staff.php">Login</ -->
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
        $conn = mysqli_connect("localhost", "root", "", "crafty");

        if(!$conn)
        {
            echo"<script>alert('error in database connection');</script>";
            // echo mysqli_errno($conn);
        }

        $username=$_POST['User_id'];
        $mob=$_POST['Mobile_No'];
        $email=$_POST['Email'];
        $password=$_POST['pass'];

        // echo $username." ".$mob." ".$email." ".$password;

        $query="INSERT INTO user( name, number, email, pass) VALUES ('$username','$mob','$email','$password');";

        $result = mysqli_query($conn,$query);
        
        if($result){
            echo "<script> alert('User created! login to continue'); </script>";
            header('location:login.php');
            // print_r($query);
        }
        else{
            // echo "<script> alert('User not created'); </script>";
            // header('location: Sign_form.php');
            echo mysqli_error($conn);
        }

        }

?>