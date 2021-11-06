<!-- Tugas 3 - Diva Aulia Putri Nur Karomah -->

<?php

    $db_server   = "localhost";
    $db_user     = "root";
    $db_password = "";
    $db_name     = "db_tugas4-divaaulia";

    $db = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if(!$db){
        die("Database can't connnect : " . mysqli_connect_error());
    }

?>

