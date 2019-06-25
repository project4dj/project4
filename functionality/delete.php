<?php
    include("./functionality/functions.php");
    include("./functionality/db.php");
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `account` WHERE `ID` = " . $id . ";";
    $result = mysqli_query($conn, $sql);
    header("Location: index.php?content=overzicht");
?>