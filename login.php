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
    <meta charset="utf-8">
    <title>GamesHub | Login</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.jpg" type="image/gif" sizes="16x16">

    <script type="text/javascript" src="js/script.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  </head>
  <body class="loginscreen-bg">

    <header>
      <!-- nav -->
      <div id="mobile-headerbar">
  <a onclick="showMenu()"><i class="fas fa-bars"></i></a>
</div>

<div class="nav-container">
  <nav id="desktop-nav">
        <a class="logo"></a>
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
