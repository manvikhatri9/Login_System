<?php
include 'config.php';
error_reporting(0);

session_start();

if(isset($_SESSION['username']))
{
   header("loaction: login.php");
}

if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= md5($_POST['password']);
    $confirmpassword= md5($_POST['confirmpassword']);

if($password==$confirmpassword)
{
    $sql= "select * from users where email='$email'";
    $result= mysqli_query($con, $sql);
    if(!$result->num_rows >0)
    {
        $sql="insert into users (username,email,password) values ('$username','$email','$password')";
        $result= mysqli_query($con, $sql);
        if($result)
        {
            echo "<script>alert('User registered')</script>";
            $username="";
            $email="";
            $_POST['password']="";
            $_POST['confirmpassword']="";
    
        }
        else
        {
            echo "<script>alert('Something went wrong')</script>";
        }
        
    }
    else
    {
        echo "<script>alert('Email alreday exist ')</script>"; 
    }
}
else
{
    echo "<script>alert('Password not matched')</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<nav id="navbar">
        <ul>
            <li class="item"><a href="index.php">Journal</a></li>
            <li class="item"><a href="#about">About</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
        <form action="/form/submit" method="POST"> 
            <input type="text" name="text" class="search" placeholder="Search Here">
            <input type="submit" name="submit" class="submit" value="Search">
          </form>
    </nav>
    <div class="register-box">
        <h2>Register</h2>
        <form action="" method="POST" class="form1">
            <label>Username</label>
            <input type="text" name="username" placeholder="" value="<?php echo $username ; ?>" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="" value="<?php echo $email ; ?>" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="" value="<?php echo $_POST['password'] ; ?>" required>
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" placeholder="" value="<?php echo $_POST['confirmpassword'] ; ?>" required>
            <button name="submit" class="btn">Register</button>
        </form>
        <p class="para-2">Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
