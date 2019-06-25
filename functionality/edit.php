<?php
    $userrole = ['admin', 'root'];
    include("./functionality/security.php");
    $id = $_POST['ID'];
    $userID = $_SESSION['id'];
    if($id !== $_SESSION['id']){
        echo "<form method='post' action='index.php?func=editscript'>
        <div class='form-group'>
          <label for='username'>Gebruikersnaam: </label>
          <input type='text' class='form-control' name='username' id='username' aria-describedby='helpId' placeholder=''>
        </div>
        <div class='form-group'>
          <label for='email'>E-mail: </label>
          <input type='text' class='form-control' name='email' id='email' aria-describedby='helpId' placeholder=''>
        </div>
        <div class='form-group'>
          <label for='password'>Wachtwoord: </label>
          <input type='text' class='form-control' name='password' id='password' aria-describedby='helpId' placeholder=''>
        </div>
        <input type='hidden' value='" . $id . "' name='ID'>
        <input type='hidden' value='" . $userID . "' name='editID'>
        <button type='submit' name='bewerk' class='btn btn-primary'>Bewerk gebruiker</button>
        </form>";
    }
?>