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
               <label>Username </label>
               <input type="text" class="input" placeholder="Enter Userame" name="User_Name" required>
            </div>  
             <!-- <div class="inputfield">
               <label>Email</label>
               <input type="email" class="input" placeholder="abc@gmail.com" name="Email" required>
            </div>   -->
            
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
        $username=$_POST['User_Name'];
        $password=$_POST['Password'];
        // $email=$_POST['Email'];

        if($username=="admin" && $password=="admin@123")
        {
          $exp = time() + 60 * 60 * 24 * 30;
          setcookie("admin","admin",$exp);
          header("location:index.php");
        }
    }

?>