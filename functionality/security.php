<?php
  if ( !isset($_SESSION["id"])) {
    echo '<div class="alert alert-danger" role="alert">U bent niet ingelogd en heeft daarom geen rechten op deze pagina.</div>';
    header("Location: url=./index.php?content=home");
    exit();
  } elseif ( !in_array($_SESSION["userrole"], $userrole)) {
    echo '<div class="alert alert-danger" role="alert">U bent ingelogd maar uw heeft niet de juiste gebruikersrol voor deze pagina.</div>';
    session_destroy();
    header("Location: url=./index.php?content=logout");
    exit();
  }
?>