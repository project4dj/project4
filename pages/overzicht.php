<?php
    // if(isset($_POST['edit'])){
    //     header("Location: ./index.php?func=edit");
    // }
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
                    <form action='./index.php?func=edit' method='POST'>
                    <input type='hidden' name='ID' value='" . $record["ID"] . "'>
                    <button type='submit' name='edit'>Bewerk</button>
                    </form>
                    </td>
                    <td>
                    <form action='./index.php?func=delete' method='POST'>
                    <input type='hidden' name='id' value='" . $record["ID"] . "'>
                    <button type='submit' name='delete'>Verwijder</button>
                    </form>
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