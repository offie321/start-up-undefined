<?php
$error = "";
if (isset($_POST['submit'])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {

    require("dbconnect.php");

    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));

    $sql = "SELECT * FROM gebruikers WHERE username = '".$username."' AND password = '". $password."'";

    if ($result = $conn->query($sql)) {
      $aantal = $result->num_rows;
      if ($aantal == 1) {
        $user = $result->fetch_row();
        session_start();
        $_SESSION['user'] = $user[1];
        $_SESSION['ingelogd'] = true;
        header("Location: ingelogd.php");
      }
      else{
        $error = "Username of Password incorrect";
      }
    }
  } else {
    $error = "Username & password zijn verplicht";
  }
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

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
          <a class="hover-underline-animation"  href="login.php">Page 2</a>
          <a class="hover-underline-animation"  href="#">Page 3</a>
          <a class="hover-underline-animation" href="#">Login</a>
        </nav>
      </div>

    </header>
    <div class="spacer">

    </div>

    <h1 class="login-titel" >Login</h1>
    <form class="login-form" method="post">
      <?php echo $error; ?>
      <label>Username</label><br><input type="text" name="username" /><br>
      <label>Username</label><br><input type="password" name="password" /><br>
      <input type="submit" name="submit" value="Inloggen">
    </form>
  </body>
</html>
