<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost; dbname=projet_siteweb_isainfo; charset=utf8','root','');
    }
    catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }
    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "projet_siteweb_isainfo";


    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if (!$conn) {
        echo "Conection failed!";
    }
    
?>