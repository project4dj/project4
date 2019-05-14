<?php
    include("db.php");
    include("functions.php");

    $email = sanitize($_POST['email']);
    $bericht = sanitize($_POST['bericht']);

    if(empty($_POST['email'])){
        echo '<div class="alert alert-warning" role="alert">U heeft geen email ingevoerd</div>';
        header("Refresh: 3; url=index.php");
    }else{
        $sql = "INSERT INTO `contact` ( `contactID`,
                                        `email`,
                                        `bericht`)
                                VALUES( NULL,
                                        '$email',
                                        '$bericht')";
    }

    $result = mysqli_query($conn, $sql);
?>