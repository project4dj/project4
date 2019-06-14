<?php
    $userrole = ['admin'];
    include("./functionality/security.php");
    include("./functionality/db.php");
    $sql = "SELECT * FROM `account` WHERE `userrole` = 'user';";

    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)) {
    $records .= "
                    <tr>
                    <td> " . $record["username"] . "</td>
                    <td> " . $record["email"] . "</td>
                    <td>
                    <a href='./update.php?id=" . $record["ID"] . "'>
                    <img src='./image/bd_edit.png' alt='pencil'></a></td>
                    <td>
                    <a href='./delete.php?id=" . $record["ID"] . "'>
                    <img src='./image/b_minus.png' alt='min'></a></td>
                    </tr>";
    }

?>

    <table class='table'>
    <thead>
    <tr> 
        <td>Naam</td>
        <td>E-mail</td>
        <td>Bewerk</td>
        <td>Verwijder</td>
    </tr>
    </thead>
    <tbody>
    <?php   echo $records;?>
    </tbody>
    </table>