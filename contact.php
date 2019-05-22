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
    <title>GamesHub | Contact</title>

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
    <div class="spacer"></div>
    <h2 class="boxTitle">Contact</h2>

    <div class="spacer"></div><div class="spacer"></div>
<hr class="small-hr">
<div class="spacer"></div><div class="spacer"></div>

<!-- Content -->
<img class="undertalegif" src="img/undertale_walking.gif" alt="">
<h3 class="boxTitle">F.A.Q.</h3>
<div class="spacer"></div>
<div class="container-accordion">
  <button class="accordion">When was this page built?</button>
  <div class="panel">
    <p>This page was built till may 22th 2019</p>
  </div>

  <button class="accordion">Who built this page?</button>
  <div class="panel">
    <p>This page was built by Jelmer van Ofwegen</p>
  </div>

  <button class="accordion">Is personal data being used by third party's</button>
  <div class="panel">
    <p>We do not save any of personal information of users.</p>
  </div>
</div>
<div class="spacer"></div><div class="spacer"></div>
<hr class="small-hr">
<div class="spacer"></div><div class="spacer"></div>
<img class="sans_undertale" src="img/sans_undertale.gif" alt="">
<h3 class="boxTitle">Disclaimer</h3>
<div class="spacer"></div>
<article class="home-welkom">
  <p>We do not sell any of users information, we respect our users privacy.</p>
</article>


<div class="spacer"></div><div class="spacer"></div>
<hr class="small-hr">
<div class="spacer"></div><div class="spacer"></div>
<h3 class="boxTitle">Gegevens</h3>
<article class="home-welkom">
  <p>Adres:</p><p>Sesamstraat 101</p><br>
  <p>Telefoon:</p><p>06-12345678</p><br>
  <p>Mail</p><p>offie1@outlook.com</p><br>
</article>

<div class="spacer"></div>
<hr class="small-hr">
<div class="spacer"></div>
<h3 class="boxTitle">Locatie</h3>
<div class="spacer"></div>
<div id="googleMap" style="width:100%;height:400px;"></div>

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

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>

<!-- Script for accordion -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

  </body>
</html>

<?php
//5
$conn->close();

 ?>
