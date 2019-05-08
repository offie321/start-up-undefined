<?php
//Stap 1
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "startup-undefined";
 //Create connection
 $conn = new mysqli($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}
?>

<?php
session_start();
if ($_SESSION['ingelogd'] = true) {
  if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
  }
  if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "";
  }
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Poppins" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <header>

      <!-- slideshow -->
      <!--
        =====
        ===
        ==
        =
      -->

      <!-- nav -->
      <div class="nav-container">
        <nav>
          <a class="hover-underline-animation"  href="index.php">Home</a>
          <a class="hover-underline-animation"  href="#">Page 2</a>
          <a class="hover-underline-animation"  href="#">Page 3</a>
          <a class="hover-underline-animation" href="login.php">Login</a>
          <?php echo "<a style='float:right;' class='hover-underline-animation' href='ingelogd.php'>".$_SESSION['user']."</a>" ?>
        </nav>
      </div>
    </header>
    <div class="spacer"></div>

<br>


<!-- Content -->
<div class="a-cards-container">
  <?php
  //Stap 2, 3 en 4
  $sql =
  "SELECT games.titel, games.plaatjes, games.omschrijving, games.ranking, games.id
  FROM games
  LIMIT 8;

  ";
  if ($result = $conn->query($sql)) { //2
    // Pak elke keer een rij uit het resultaat en maak er een array van.
    while ($row = $result->fetch_row()) {
      echo "<article class='a-cards'>"."<img src='img/".$row[1]."'/>". "</br>".$row[0]. "<hr>"."</br>".$row[2]. "<br><br><p>Ranking</p>". "<div class='ranking'>".$row[3]."</div>"."</article>"; //3
    }
    $result->close(); //4
  }
  ?>

</div>

<div class="spacer"></div>

<!-- Footer -->
<footer>
  <br>
  <div class="footer-container">

    <ul class="footer-list">
      <li><b><h3 class="h3-ftr-logo"> Gaming </h3></b></li>
      <li>
        <p>
          <br>
          blabla Lorem Ipsum blablabla
        </p>
      </li>
    </ul>

      <ul class="footer-list">
        <li><b><h3> Pages </h3></b></li>
        <a href="skills.html"><li> My skills </li></a>
        <a href="projects.html"><li> My Projects </li></a>
        <a href="wiebenik.html"><li> Who am I </li></a>
        <a href="skills.html"><li> My skills </li></a>
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


  </body>
</html>

<?php
//5
$conn->close();

 ?>
