<?php
require("dbconnect.php");
$titel = $_POST['titel'];
$plaatjes = $_POST['plaatjes'];
$genre = $_POST['genre'];
$ranking = $_POST['ranking'];
$omschrijvingbig = $_POST['omschrijvingbig'];

$sql = "INSERT INTO games (titel, plaatjes, genre, ranking, omschrijvingbig)
values ('$titel','$plaatjes','$genre','$ranking','$omschrijvingbig')";
if ($conn->query($sql)) {
  echo "Toevoegen van item gelukt";
}else {
  echo"niet gelukt";
}

 ?>
