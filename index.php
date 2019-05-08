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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

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
          <a class="hover-underline-animation"  href="#">Home</a>
          <a class="hover-underline-animation"  href="#">Page 2</a>
          <a class="hover-underline-animation"  href="#">Page 3</a>
          <a class="hover-underline-animation" href="#">Login</a>
        </nav>
      </div>

    </header>
    <div class="spacer">

    </div>

<!-- slideshow -->


<br>


<!-- Content -->
<div class="a-cards-container">
  <?php
  //Stap 2, 3 en 4
  $sql =
  "SELECT games.titel, games.plaatjes, games.omschrijving, games.ranking
  FROM games
  LIMIT 8;

  ";
  if ($result = $conn->query($sql)) { //2
    // Pak elke keer een rij uit het resultaat en maak er een array van.
    while ($row = $result->fetch_row()) {
      echo "<article class='a-cards'>"."<img src='img/".$row[1]."'/>". "</br>".$row[0]. "<hr>"."</br>".$row[2]. "</article>"; //3
    }
    $result->close(); //4
  }
  ?>

</div>


  </body>
</html>

<?php
//5
$conn->close();

 ?>
