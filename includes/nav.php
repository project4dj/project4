 <!--import van de navbar -->
<nav id="nav" class="navbar border navbar-expand-lg navbar-light bg-primary rounded">
<!-- home knop -->
<a class="navbar-brand" href="./index.php"><img src="./images/hardlopen.png" height="100" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--navigator -->
  <?php
  if(isset($_SESSION['id'])){
    switch($_SESSION['userrole']){
      case 'user':
        echo '
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="./index.php">Home</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=recensies">Recensies</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=contact">Contact</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=logboek">Logboek</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=oefeningen">Oefeningen</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=logout">Afmelden</a>
          </div>
        </div>';
        break;
      case 'admin':
        echo '
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link text-white" href="./index.php">Home</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=overzicht">Overzicht</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=recensies">Recensies</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=contact">Contact</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=logboek">Logboek</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=oefeningen">Oefeningen</a>
            <a class="nav-item nav-link text-white" href="./index.php?content=logout">Afmelden</a>
          </div>
        </div>';
        break;
      default:
        echo '';
        break;
      }}else{
        echo '<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link text-white" href="./index.php">Home</a>
          <a class="nav-item nav-link text-white" href="./index.php?content=recensies">Recensies</a>
          <a class="nav-item nav-link text-white" href="./index.php?content=contact">Contact</a>
          <a class="nav-item nav-link text-white" href="./index.php?content=signup">Aanmelden</a>
        </div>
      </div>';
      }?>
</nav>          