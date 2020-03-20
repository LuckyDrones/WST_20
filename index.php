<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="./CSS/Main.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/ed539cc9c0.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
    <header>
        <!--Top Navbar-->
        <nav>
          <ul class="bg-topnav">
            <li><a class="active" href="./index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="./News.html"><i class="fas fa-newspaper"></i> News</a></li>
            <li><a href="./Contact.html"><i class="fas fa-address-card"></i> Contact</a></li>
            <li class="active"><a href="#" onclick="return false;">Login</a></li>
            <li class="active"><a>Sign in</a></li>
          </ul>
        </nav>
    </header>
    <form method="POST" action="sql-login.php">
        <ul class="login-bar">
            <li><label for="username" class="bar-align-label">Username</label>
        <input id="username" type="text" name="username" minlength="4" maxlength="15" require pattern="[A-Za-z0-9]+" class="bar-align-input"></li>
        <br>
        <li><label for="password" class="bar-align-label">Password</label>
        <input name="password" id="password" type="password" minlength="8" maxlength="15" require pattern="[A-Za-z0-9]+" class="bar-align-input"></li>
        <input type="submit" value="Login" class="login-button button-type-1">
        </ul>
    </form>

    
</body>
</html>