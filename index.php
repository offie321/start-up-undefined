<?php
require("dbconnect.php");
?>
<!doctype html>
<html lang="en">
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
    <title>GamesHub</title>

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
    <br>

    <div class="spacer"></div>
    <!-- slideshow -->
    <div class="slideshow-container">
      <?php
      //Stap 2, 3 en 4
      $sql =
      "SELECT games.titel, games.plaatjes, games.genre, games.ranking, games.id, games.omschrijvingbig, games.releasedate
      FROM games
      LIMIT 4;

      ";
      if ($result = $conn->query($sql)) { //2
        // Pak elke keer een rij uit het resultaat en maak er een array van.
        while ($row = $result->fetch_row()) {
          echo "<a href='game.php?id=".$row[4]."'><div class='mySlides fade'><img class='slideshowImg' src='img/".$row[1]."'/><div class='slideshow-text'>".$row[0]."</div></div></a>"; //3
        }
        $result->close(); //4
      }
      ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <div class="spacer"></div>
<!-- Welkom tekst -->
    <article class="home-welkom">
      <p>
        <h2>Welkom bij GamesHub,</h2><br><br>
        Op deze pagina vind je het laatste nieuws en de beste informatie over je favoriete games.
        <br><br>
        <b>Explore. Survive. Win.</b>

      </p>
    </article>
    <div class="spacer"></div>
<hr class="small-hr">
<div class="spacer"></div><div class="spacer"></div>

<!-- Content -->

<!-- Nieuwste Releases -->
<h3 class="boxTitle">De Nieuwste Releases</h3><hr><div class="spacer"></div>
<div class="a-cards-container">
  <?php
  //Stap 2, 3 en 4
  $sql =
  "SELECT games.titel, games.plaatjes, games.genre, games.ranking, games.id, games.omschrijvingbig, games.releasedate
  FROM games
  ORDER BY games.releasedate DESC
  LIMIT 4;

  ";
  if ($result = $conn->query($sql)) { //2
    // Pak elke keer een rij uit het resultaat en maak er een array van.
    while ($row = $result->fetch_row()) {
      echo "<a href='game.php?id=".$row[4]."'><article class='a-cards'>"."<img src='img/".$row[1]."'/>". "</br>".$row[0]. "<hr>"."</br>".$row[2]. "<br><br><p>Ranking</p>". "<div class='ranking'>".$row[3]."</div>"."</article></a>"; //3
    }
    $result->close(); //4
  }
  ?>

</div>
<div class="spacer"></div>
<!-- keuze van de redactie -->
<h3 class="boxTitle">De keuze van de 'Kenners'</h3><small></small><hr><div class="spacer"></div>
<div class="a-cards-container">
  <?php
  //Stap 2, 3 en 4
  $sql =
  "SELECT games.titel, games.plaatjes, games.genre, games.ranking, games.id, games.omschrijvingbig, games.releasedate
  FROM games
  ORDER BY games.ranking DESC
  LIMIT 4;

  ";
  if ($result = $conn->query($sql)) { //2
    // Pak elke keer een rij uit het resultaat en maak er een array van.
    while ($row = $result->fetch_row()) {
      echo "<a href='game.php?id=".$row[4]."'><article class='a-cards'>"."<img src='img/".$row[1]."'/>". "</br>".$row[0]. "<hr>"."</br>".$row[2]. "<br><br><p>Ranking</p>". "<div class='ranking'>".$row[3]."</div>"."</article></a>"; //3
    }
    $result->close(); //4
  }
  ?>

</div>

<div class="spacer"></div>

<!-- Footer -->
<footer id="footer">
  <br>
  <div class="footer-container">

    <ul class="footer-list">
      <li><b><h3 class="h3-ftr-logo"> GamesHub </h3></b></li>
      <li>
        <p>
          <br>
          De beste games vind je bij GamesHub
        </p>
      </li>
    </ul>

      <ul class="footer-list">
        <li><b><h3> Pages </h3></b></li>
        <a href="allgames.php"><li> All Games </li></a>
        <a href="contact.php"><li> Contact </li></a>
        <a href="login.php"><li> Login </li></a>
        <a onclick="pikaPika()"><img style="width: 2px;" src="img/Pikachu.png"></a>
      </ul>

      <ul class="footer-list">
        <li><b><h3>Follow Me:</h3></b></li>
        <li><a class="mail-ftr" href="mailto:offie1@outlook.com?Subject=Hello%20again" target="_top"><i class="fas fa-envelope"></i></a></li>
        <li><a class="github-ftr" target="_blank" href="https://github.com/offie321"><i class="fab fa-github"></i></a></li>
        <li><a class="linkedin-ftr" target="_blank" href="https://www.linkedin.com/in/jelmer-van-ofwegen-b59769183/"><i class="fab fa-linkedin"></i></a></li>
      </ul>
  </div>

  <br>
  <div class="copy-container">
    <p class="ftr-copy">Copyright Jelmer van Ofwegen - 2019</p>
  </div>

</footer>

<!-- script for slideshow -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

  </body>
</html>

<?php
//5
$conn->close();

 ?>
