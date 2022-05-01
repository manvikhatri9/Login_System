<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<nav id="navbar">
        <ul>
            <li class="item"><a href="#journal">Journal</a></li>
            <li class="item"><a href="#about">About</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
        <form action="/form/submit" method="GET"> 
            <input type="text" name="text" class="search" placeholder="Search Here">
            <input type="submit" name="submit" class="submit" value="Search">
          </form>
    </nav>
    <div id="list">
        <ul>
            <li class="journalitem"> <a href="login.php">dialog: A bi-annual peer-reviewed Journal</a></li>
        </ul>
    
    </div>
</body>
</html>