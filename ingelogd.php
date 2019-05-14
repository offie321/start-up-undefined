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
     <meta charset="utf-8">
     <title>ingelogd php</title>

     <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- fonts -->
     <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
   </head>
   <body>

     <header>

       <!-- nav -->
       <div class="nav-container">
         <nav>
           <a class="hover-underline-animation"  href="index.php">Home</a>
           <a class="hover-underline-animation"  href="#">Page 2</a>
           <a class="hover-underline-animation"  href="#">Page 3</a>
           <a class="hover-underline-animation" href="login.php">Login</a>
         </nav>
       </div>

     </header>
     <div class="spacer"></div>
     <div class="spacer"></div>

<h1 class="dashboard-title" >Dashboard</h1>

<div class="boxbtns">
<button class="tablink hover-underline-animation" onclick="openPage('Home', this, '#333333')" id="defaultOpen">Home</button>
<button class="tablink hover-underline-animation" onclick="openPage('News', this, '#333333')">Add Item</button>
<button class="tablink hover-underline-animation" onclick="openPage('Contact', this, '#333333')">Contact</button>
<button class="tablink hover-underline-animation" onclick="openPage('About', this, '#333333')">About</button>
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
  <label for="">Naam</label>
  <br>
  <input type="text" name="titel" value="Titel">
  <br>
  <label for="">Img link <small>bv. plaatje.jpg</small></label>
  <br>
  <input type="text" name="plaatjes" value="img.jpg">
  <br>
  <label for="">Informatie <small>Korte beschrijving van het item</small></label>
  <br>
  <textarea name="omschrijving" rows="8" cols="80"></textarea>
  <br>
  <label for="">Rating <small>Max. 10</small></label>
  <br>
  <select class="ranking" name="ranking">
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
  <br><br>
<input type="submit" name="send-itemaddform" value="Send">
</form>
</div>


<!-- tab 3 -->
<div id="Contact" class="tabcontent">
  <h3>.....</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<!-- tab 4 -->
<div id="About" class="tabcontent">
  <h3>....</h3>
  <p>Who we are and what we do.</p>
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
