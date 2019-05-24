<?php
  include("db.php");
  include("./functions.php");

  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);

  $sql = "SELECT * FROM  `account` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result) == 1 ) {
    // Ga verder met de inlogprocedure
    $record = mysqli_fetch_assoc($result);

    $blowfish_password = $record["password"];

    if ( password_verify($password, $blowfish_password)) {

      $_SESSION["id"] = $record["ID"];
      $_SESSION["email"] = $email;
      $_SESSION["userrole"] = $record["userrole"];

      switch ($record["userrole"]) {
        case 'user':
          echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd en word nu doorgestuurd naar de hoofdpagina.</div>';      
          header("Refresh: 3; url=../index.php?content=userhome");
        break;
        case 'admin':
          echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar uw administrator homepagina</div>';      
          header("Refresh: 3; url=./index.php?content=home");
        break;
        case 'owner':
        echo '<div class="alert alert-success" role="alert">U bent succesvol ingelogd. U wordt doorgestuurd naar uw administrator homepagina</div>';      
          header("Refresh: 3; url=./index.php?content=home");
        default:
          echo '<div class="alert alert-warning" role="alert">U bent succesvol ingelogd. Maar uw gebruikersrol bestaat niet. Uwordt doorgestuurd naar de standaard homepagina</div>';      
          header("Refresh: 3; url=./index.php?content=home");
        break;
      }

      


    } else {
      // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
      echo '<div class="alert alert-danger" role="alert">Uw wachtwoord is niet correct, probeer het nogmaals</div>';
      header("Refresh: 2; url=./index.php?content=login_form");
    }

  } else {
    // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
    echo '<div class="alert alert-danger" role="alert">E-mail is niet bekend, probeer het nogmaals</div>';
    header("Refresh: 2; url=./index.php?content=login_form");
  }
?>