<?php
require("dbconnect.php");
$titel = $_POST['titel'];
$plaatjes = $_POST['plaatjes'];
$genre = $_POST['genre'];
$ranking = $_POST['ranking'];
$omschrijvingbig = $_POST['omschrijvingbig'];
$releasedate = $_POST['releasedate'];

$sql = "INSERT INTO games (titel, plaatjes, genre, ranking, omschrijvingbig, releasedate)
values ('$titel','$plaatjes','$genre','$ranking','$omschrijvingbig','$releasedate')";
if ($conn->query($sql)) {
  echo "Toevoegen van item gelukt";
}else {
  echo"niet gelukt";
}

 ?>
