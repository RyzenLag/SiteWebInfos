<?php

    $sname = "localhost";
    $uname = "root";
    $Password = "";

    $db_name = "projet_siteweb_isainfo";

    $conn = mysqli_connect($sname, $uname, $Password, $db_name);

    if (!$conn) {
        echo "Conection failed!";
    }

?>
