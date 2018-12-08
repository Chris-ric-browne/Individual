<?php

// $link = $_GET['link'];


$dsn = "mysql:host=localhost;dbname=browne9_Individual;charset=utf8mb4";
$dbusername = "browne9_imm";
$dbpassword = "receWO5tmv&q";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

  $stmt = $pdo->prepare("SELECT * FROM `video` WHERE `category`='Themed'");
  $breakfast = $pdo->prepare("SELECT * FROM `video` WHERE `category`='Breakfast'");
  $lunch = $pdo->prepare("SELECT * FROM `video` WHERE `category`='Lunch'");
  $dinner = $pdo->prepare("SELECT * FROM `video` WHERE `category`='Dinner'");



$stmt->execute();
$breakfast->execute();
$lunch->execute();
$dinner->execute();


// $copied = "https://www.youtube.com/watch?v=lcknAoUcx9A";



?>
<!doctype html>
  <html>
    <head>
      <title>Individual</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> -->
      <link rel="stylesheet" href="css/main.css" />
      <!-- <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/mobile-homepage.css" /> --> 
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    </head>

    <body id="body">
      <header>
        <nav>
          <ul>
              <!-- <li ><img class="nav-left" src="images/c9.png" height="50" weight="50"/></li> -->
              <li><a class="nav-right" href="signup.html">Sign Up</a></li>
              <li><a class="nav-right" href="login.html">Login</a></li>
              <li><a class="nav-right" href="#">Home</a></li>
              <li><a class="nav-right" href="breakfast.php">Breakfast</a></li>
              <li><a class="nav-right" href="lunch.php">Lunch</a></li>
              <li><a class="nav-right" href="dinner.php">Dinner</a></li>
              <li><a class="nav-right" href="theme.php">Themed</a></li>
              <li><a class="nav-right" href="dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
      </header>
      <div id="container-grid">
        <div id="theme">
          Theme of the Week:
          <br><br>
          <?php
          // $copied = "https://www.youtube.com/watch?v=lcknAoUcx9A";
          // $vid = str_replace('watch?v=', 'embed/', $copied);
          while($row = $stmt->fetch()) {
            $vid = str_replace('watch?v=', 'embed/', $row['link']);

          ?>
        <iframe width="460" height="215" src="<?= $vid ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>

        <?php
        }
        ?>
        </div>
        <div>
          Breakfast:
          <br><br>
          <?php
          // $copied = "https://www.youtube.com/watch?v=lcknAoUcx9A";
          // $vid = str_replace('watch?v=', 'embed/', $copied);
          while($row = $breakfast->fetch()) {
            $vid = str_replace('watch?v=', 'embed/', $row['link']);

          ?>
        <iframe width="460" height="215" src="<?= $vid ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br><br>

        <?php
        }
        ?>
        </div>
        <div>
          Lunch:
          <br><br>
          <?php
          // $copied = "https://www.youtube.com/watch?v=lcknAoUcx9A";
          // $vid = str_replace('watch?v=', 'embed/', $copied);
          while($row = $lunch->fetch()) {
            $vid = str_replace('watch?v=', 'embed/', $row['link']);

          ?>
        <iframe width="460" height="215" src="<?= $vid ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br><br>

        <?php
        }
        ?>
        </div>
        <div>
          Dinner:
          <br><br>
          <?php
          // $copied = "https://www.youtube.com/watch?v=lcknAoUcx9A";
          // $vid = str_replace('watch?v=', 'embed/', $copied);
          while($row = $dinner->fetch()) {
            $vid = str_replace('watch?v=', 'embed/', $row['link']);

          ?>
        <iframe width="460" height="215" src="<?= $vid ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br><br>

        <?php
        }
        ?>
        </div>


      </div>
    <footer id ="footer">

    </footer>
    <!-- <script src="js/main.js" type="text/javascript"></script> -->
    </body>
  </html>
<?php?>
