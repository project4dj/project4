<?php
  include("db.php");
  include("functions.php");

  $email = sanitize($_POST["email"]);
  $username = sanitize($_POST["username"]);

  if ( empty($_POST["email"])) {
    echo '<div class="alert alert-warning" role="alert">U heeft geen e-mailadres ingevoerd. Dit is een verplicht veld. Probeer het nogmaals</div>';
    //header("Refresh: 3; url=./signup.php");
  } else {



    $sql = "SELECT * FROM `account` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1 ) {
      echo '<div class="alert alert-info" role="alert">Het door u ingevoerde e-mailadres bestaat al. Kies een nieuw e-mailadres</div>';
      //header("Refresh: 3; ./signup.php");
    } else {

      $password = sanitize($_POST["password"]);
      $password2 = sanitize($_POST["password2"]);

      $pw = password_hash($password, PASSWORD_BCRYPT);
    if($password != $password2){
        echo '<div class="alert alert-info" role="alert">De ingevoerde wachtwoorden komen niet overheen.</div>';
      //header("Refresh: 3; ./signup.php");
    }else{
      $sql = "INSERT INTO `account` (`id`,
                                `username`,
                                `email`,
                                `password`,
                                `userrole`)
                        VALUES  (NULL,
                                '$username',
                                '$email',
                                '$pw',
                                'user')";

      $result = mysqli_query($conn, $sql);

      $id = mysqli_insert_id($conn);
    }
      if ($result) {
        $to = $email;
        $subject = "Uw activatielink voor www.loginregistration.am1c.org";
        $message = "<!DOCTYPE html>
                    <html>
                      <head>
                        <style>
                          body {
                            background-color: green;
                          }
                        </style>
                        <title>Activatielink</title>
                      </head>
                      <body>
                        <h1>Beste gebruiker,</h1>
                        <p>U kunt via de onderstaande link uw account activeren.</p>
                        <p>U kunt vervolgens uw wachtwoord instellen en inloggen op de site</p>
                        <p><a href='http://www.loginregistration.am1c.org/index.php?content=createpassword&id=" . $id . "&pw=" . $pw . "'>activatielink</a></p>
                        <p>Met vriendelijke groet,</p>
                        <p>Dennis Luijkenaar</p>
                      </body>                    
                    </html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= "From: admin@loginregistration.am1c.org"."\r\n";


        mail( $to, $subject, $message, $headers);

        echo '<div class="alert alert-success" role="alert">U bent geregistreerd. Wij hebben u een mail gestuurd naar dit adres. Klik daarin op de activatielink om uw registratie te voltooien.</div>';
        header("Location: ../index.php?content=signup");
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren. probeer het nogmaals</div>';
        //header("Refresh: 2; url=signup.php");
        echo $email."<BR>";
        echo $sql;
      }
    }
  }
?>