<?php

require("dbconnect.php");

$sql = "SELECT * FROM games where id=".$_GET["id"];

        $result = $conn->query($sql);

        $row = $result->fetch_row();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Laat de naam van de game zien op de tabbladen-->
    <title>GamesHub | <?php echo $row[1] ?></title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" href="img/logo.jpg" type="image/gif" sizes="16x16">

    <!-- Link to Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script type="text/javascript" src="js/script.js"></script>

    
    <style media="screen">
      * {box-sizing: border-box}
    </style>
  </head>
  <body>

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
<!-- Information about this game -->
    <div class"game_specifiek_container">
      <!-- Image -->
      <?php echo "<img class='img-gamespecifiek' src='img/".$row[2]."'/>"; ?>
      <!-- Title -->
      <?php   echo "<p class='titel_gamespecifiek'>".  $row[1] ."</p>";   ?>
      <!-- Genre -->
      <?php   echo "<p class='genre_gamespecifiek'>".  $row[3] ."</p>";   ?>
      <hr class="hr_gamespecifiek">
      <div class="spacer"></div>
      <!-- Information -->
      <?php   echo "<article class='omschrijving_big_gamespecifiek'>".  $row[5] ."</article>";   ?>
      <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
      <!-- Release Date -->
      <?php   echo "<p class='releasedate_gamespecifiek'>Release date:</p><p class='releasedate_gamespecifiek'>".  $row[6] ."</p>";   ?>
    </div>

  </body>
</html>
