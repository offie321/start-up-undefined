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

     <?php echo "<h1> Welkom". " ".$_SESSION['user']." " ."op deze pagina </h1>" ?>

     <a class="uitlog-knop" href="logout.php">uitloggen</a>
   </body>
 </html>
