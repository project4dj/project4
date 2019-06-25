<?php 
  if (isset($_GET["func"])) {
    include("./functionality/" . $_GET["func"] . ".php"); 
  } else {
    include("./pages/home.php");
  }
?>