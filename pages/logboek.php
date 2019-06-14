<?php
  $userrole = ['user'];
  include("./functionality/security.php"); 
  include("./functionality/db.php");
  $id = $_SESSION['id'];

  $sql2 = "SELECT `username` FROM `account` WHERE `id` = ".$id.";";

  $result2 = mysqli_query($conn, $sql2);

  $nameS = mysqli_fetch_assoc($result2);

  $name = $nameS['username'];
  echo "<h4>Welkom ".$name.", Hier heb je je overzicht van je gemaakte oefeningen!</h4>";

  $sql = "SELECT `naam`, `hoeveelheid`, `kalorie`, `datum` FROM `oefening` WHERE `fk_userid` = ".$id.";";

  $result = mysqli_query($conn, $sql);

  $records = "";
  while ($record = mysqli_fetch_assoc($result)) {
  $records .= "
                  <tr>
                    <td> " . $record["naam"] . "</td>
                    <td> " . $record["hoeveelheid"] . "</td>
                    <td> " . $record["kalorie"] . "</td> 
                    <td> " . $record["datum"] . "</td>
                  </tr>";
  }

?>

<table class='table'>
  <thead>
    <tr> 
      <td>Naam oefening:</td>
      <td>Aantal</td>
      <td>Kalorieën verbrand</td>
      <td>Datum</td>
    </tr>
  </thead>
  <tbody>
    <?php   echo $records;?>
  </tbody>
</table>