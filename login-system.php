<?php
$email = "localhost";
$pseudo = "root";
$password = "";

$db_name = "projet_siteweb_isainfo";

$conn = mysqli_connect($email, $password, $pseudo, $projet_siteweb_isainfo);

if (!$conn) {
    echo "Conection failed!";
    
}