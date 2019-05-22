<?php
$error = "";
if (isset($_POST['submit'])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {

    require("dbconnect.php");

    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));

    $sql = "SELECT * FROM gebruikers WHERE username = '".$username."' AND password = '". $password."'";

    if ($result = $conn->query($sql)) {
      $aantal = $result->num_rows;
      if ($aantal == 1) {
        $user = $result->fetch_row();
        session_start();
        $_SESSION['user'] = $user[1];
        $_SESSION['ingelogd'] = true;
        header("Location: ingelogd.php");
      }
      else{
        $error = "Username of Password incorrect";
      }
    }
  } else {
    $error = "Username & password zijn verplicht";
  }
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Webpage with information about games">
    <meta name="keywords" content="Games, GamesHub, Information, FPS, MMO, MMO-FPS, Adventure">
    <meta name="author" content="Jelmer van Ofwegen">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Link to Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="icon" href="img/logo.jpg" type="image/gif" sizes="16x16">

    <!-- scripts -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Title -->
    <title>GamesHub | Login</title>
  </head>
  <body class="loginscreen-bg">

    <header>
      <!-- nav -->
      <div id="mobile-headerbar">
  <a onclick="showMenu()"><i class="fas fa-bars"></i></a>
</div>

<div class="nav-container">
  <nav id="desktop-nav">
    <a class="logo" href="index.php"></a>
    <a class="hover-underline-animation"  href="index.php">Home</a>
    <a class="hover-underline-animation"  href="allgames.php">All Games</a>
    <a class="hover-underline-animation"  href="contact.php">Contact</a>
    <a class="hover-underline-animation" href="login.php">Login</a>
  </nav>
</div>

<nav id="nav-mobile">
  <div id="mobile-headerbar">
    <i onclick="hideMenu()" class="fas fa-times"></i>
  </div>
  <a href="index.php">Home</a>
  <a href="allgames.php">All Games</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
</nav>

    </header>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>

    <h1 class="login-titel" >Login</h1>
    <form class="login-form" method="post">
      <?php echo $error; ?>
      <label>Username</label><br><input type="text" name="username" /><br>
      <label>Username</label><br><input type="password" name="password" /><br>
      <input type="submit" name="submit" value="Inloggen">
    </form>
  </body>
</html>
