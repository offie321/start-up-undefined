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
    <title></title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>

    <header>
      <!-- nav -->
      <div id="mobile-headerbar">
  <a onclick="showMenu()"><i class="fas fa-bars"></i></a>
</div>

<div class="nav-container">
  <nav id="desktop-nav">
    <a class="hover-underline-animation"  href="index.php">Home</a>
    <a class="hover-underline-animation"  href="#">Page 2</a>
    <a class="hover-underline-animation"  href="#">Page 3</a>
    <a class="hover-underline-animation" href="login.php">Login</a>
  </nav>
</div>

<nav id="nav-mobile">
  <div id="mobile-headerbar">
    <i onclick="hideMenu()" class="fas fa-times"></i>
  </div>
  <a href="index.php">Home</a>
  <a href="#">Page 2</a>
  <a href="#">page 3</a>
  <a href="login.php">Login</a>
</nav>

    </header>

    <div class"game_specifiek_container">
      <?php echo "<img class='img-gamespecifiek' src='img/".$row[2]."'/>"; ?>
      <?php   echo "<p class='titel_gamespecifiek'>".  $row[1] ."</p>";   ?>
      <?php   echo "<p class='genre_gamespecifiek'>".  $row[3] ."</p>";   ?>
      <hr class="hr_gamespecifiek">
      <div class="spacer"></div>
      <?php   echo "<article class='omschrijving_big_gamespecifiek'>".  $row[5] ."</article>";   ?>
      <div class="spacer"></div><div class="spacer"></div><div class="spacer"></div>
    </div>

  </body>
</html>
