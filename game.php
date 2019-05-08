
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
    <div class="spacer"></div>

    <?php echo $row[1]; ?>
    <div class="spacer"></div>
    <div class="spacer"></div>

    <h1 class="login-titel" >Login</h1>
    <form class="login-form" method="post">
      <label>Username</label><br><input type="text" name="username" /><br>
      <label>Username</label><br><input type="password" name="password" /><br>
      <input type="submit" name="submit" value="Inloggen">
    </form>
  </body>
</html>
