<?php
require("dbconnect.php");
$titel = $_SESSION('titel');
$plaatjes = $_SESSION('plaatjes');
$omschrijving = $_SESSION('omschrijving');
$ranking = $_SESSION('ranking');

$sql = "INSERT INTO games (titel, plaatjes, omschrijving, ranking)
values ('$titel','$plaatjes','$omschrijving','$ranking')";
if ($conn->query($sql)) {
  echo "Toevoegen van item gelukt";
}else {
  echo"niet gelukt";
}

 ?>
