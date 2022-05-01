<?php

session_start();
include 'config.php';
error_reporting(0);

if(isset($_SESSION['username']))
{
   header("loaction: welcome.php");
}

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql= "select * from users where email='$email' AND password='$password'";
    $result=mysqli_query($con, $sql);
    if($result->num_rows>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username'];
        header("location: welcome.php");
    }
    else
    {
        echo "<script>alert('Inorrect email or password')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form action="/form/submit" method="GET"> 
            <input type="text" name="text" class="search" placeholder="Search Here">
            <input type="submit" name="submit" class="submit" value="Search">
          </form>
    </nav>
   <div class="login-box">
    <h2>Login</h2>
    <form action="" method="POST">
        <label>Email</label>
        <input type="email" name="email" placeholder="" value="<?php echo $email ; ?>" required>                                                    
        <label>Password</label>
        <input type="password" name="password" placeholder="" value="<?php echo $_POST['password'] ; ?>" required>
        <button name="submit" class="btn">Login</button>
        <p class="para-2">Not registered yet? <a href="register.php"> Register </a></p>
    </form>
   </div> 
   <div id="list">
        <ul>
            <div class="journalitem"> <a href="login.php"></a></div>
        </ul>
    
    </div>
</body>
</html>