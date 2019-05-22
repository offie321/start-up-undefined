<!-- dashboard page -->

<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
  header("Location: login.php");
}

//werkt als je hier je input neerzet maar haalt het niet uit een vorige session (was al opgelost met code uit oudecode.txt bestand?? toch??)
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
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
     <title>GamesHub | Logged In</title>
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
     <div class="spacer"></div>
     <div class="spacer"></div>

<h1 class="dashboard-title" >Dashboard</h1>

<div class="boxbtns">
<button class="tablink hover-underline-animation" onclick="openPage('Home', this, '#333333')" id="defaultOpen">Home</button>
<button class="tablink hover-underline-animation" onclick="openPage('News', this, '#333333')">Add Item</button>
<button class="tablink hover-underline-animation" onclick="openPage('Contact', this, '#333333')">Contact</button>
</div>
<!-- tab 1 -->
<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <?php echo "<h1> Welkom". " ".$_SESSION['user']." " ."op deze pagina </h1>" ?>
  <br>
  <a class="uitlog-knop" href="logout.php">uitloggen</a>
</div>

<!-- tab 2 -->
<div id="News" class="tabcontent">
  <form class="addcontent-form" action="add_item.php" method="post">
  <h3>Add new Items</h3>
  <label for="">Naam <small>' gives error</small></label>
  <br>
  <input type="text" name="titel" value="Titel">
  <br>
  <label for="">Img link <small>bv. plaatje.jpg</small></label>
  <br>
  <input type="text" name="plaatjes" value="img.jpg">
  <br>
  <label for="">Genre <small>bv. RPG, FPS, MOBA</small></label>
  <br>
  <input type="text" name="genre" value="RPG">
  <br>
  <label for="">Informatie <small>Grote beschrijving van het item</small></label>
  <br>
  <textarea name="omschrijvingbig" rows="8" cols="80"></textarea>
  <br>
  <label for="">Rating <small>Max. 10</small></label>
  <br>
  <select class="ranking-input" name="ranking">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <br>
  <label for="">Releasedate</label>
  <br>
  <input type="date" name="releasedate" value="0000-00-00">
  <br><br>
<input type="submit" name="send-itemaddform" value="Send">
</form>
</div>


<!-- tab 3 Not used yet -->
<div id="Contact" class="tabcontent">
  <h3> Not used </h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>


<div class="spacer"></div>


<script>
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>
   </body>
 </html>
