<?php

include 'config.php';
error_reporting(0);

session_start();
if (isset($_SESSION['username'])){
    header("Location:index.php");
}

if (isset($_SESSION['username'])){
    header("Location:welcome.php");
}

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);

    if ($password==$cpassword){
        $sql="SELECT * FROM lgusers WHERE email='$email'";
        $result= mysqli_query($con,$sql);
        if (!$result->num_rows > 0) {
            $sql="INSERT INTO lgusers (username,email,password)
            VALUES('$username', '$email', '$password')";
            $result = mysqli_query($con,$sql);

            if($result){
                echo"<script>alert('register successfull!')</script>";
                $username="";
                $email="";
                $_POST['password']=""; 
                $_POST['cpassword']="";
            }else{
                echo"<script>alert('check again')</script>";
            }
        
        } else{
            echo"<script>alert('email already exists')</script>";
        }
          
        }else{
            echo"<script>alert('password incorrect')</script>";
        }
            
        }
        

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body>
    
    <div class="container">
        <form  action="" method="POST" class="login-email">
            <p class="login-text" style="font: size 2rem; font-weight:800; color:cadetblue">Register</p>
            <div class="input-group">
                <input type="text" placeholder="user name" name="username" value="<?php echo $username;?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="email" name="email"  value="<?php echo $email;?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder=" confirm password" name="cpassword" value="<?php echo $_POST['cpassword'];?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>

            <p class="login-register-text"> loging your account <a href="index.php">loging here</a></p>

        </form>
    </div>
    


    
</body>
</html>