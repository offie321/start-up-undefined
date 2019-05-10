<!-- dashboard page -->

<?php
session_start();
if ($_SESSION['ingelogd'] != true) {
  header("Location: login.php");
}

//werkt als je hier je input neerzet maar haalt het niet uit een vorige session
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


<div class="boxbtns">
<button class="tablink hover-underline-animation" onclick="openPage('Home', this, '#222222')" id="defaultOpen">Home</button>
<button class="tablink hover-underline-animation" onclick="openPage('News', this, '#222222')">Add Item</button>
<button class="tablink hover-underline-animation" onclick="openPage('Contact', this, '#222222')">Contact</button>
<button class="tablink hover-underline-animation" onclick="openPage('About', this, '#222222')">About</button>
</div>
<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <?php echo "<h1> Welkom". " ".$_SESSION['user']." " ."op deze pagina </h1>" ?>
  <br>
  <a class="uitlog-knop" href="logout.php">uitloggen</a>
</div>

<div id="News" class="tabcontent">
  <h3>Add new Items</h3>
  <p>WURD UN GEWURKT</p>
</div>

<div id="Contact" class="tabcontent">
  <h3>.....</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>....</h3>
  <p>Who we are and what we do.</p>
</div>




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
