<?php

include 'config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])){
    header("Location:welcome.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql ="SELECT * FROM lgusers WHERE email='$email' AND password='$password'";
    $result= mysqli_query($con,$sql);
    if ($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location:welcome.php");

    }else{
        echo"<script>alert('incorrect email or password')</script>";
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
    <title>login</title>
</head>
<body>
    
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font: size 2rem; font-weight:800;">login</p>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" value="<?php echo $password;?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">login</button>
            </div>

            <p class="login-register-text">create an account <a href="register.php">Register here</a></p>

        </form>
    </div>
    


    
</body>
</html>