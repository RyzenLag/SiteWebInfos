<?php

if($_POST) {
    print_r($_POST);
    $nom = $_POST['nom'];
    //$marque = $_GET['marque'];
    header("Location : http://localhost/SiteWebInfos/single-product.php?marque='$marque'&nom='$nom'"); 
    
    exit();
    }
?>