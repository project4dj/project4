<?php
    include("./functionality/functions.php");
    include("./functionality/db.php");
    $userID = $_POST['editID'];
    $id = $_POST['ID'];
    $password = sanitize($_POST['password']);
    $email = sanitize($_POST['email']);
    $username = sanitize($_POST['username']);
    $pw = password_hash($password, PASSWORD_BCRYPT);

    if($_SESSION['id'] == $userID){
        $sql = "UPDATE `account` SET `username` = '" . $username . "', `email` = '" . $email . "', `password` = '" . $pw . "' WHERE `id` = '" . $id . "';";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php?content=overzicht");
    }
?>