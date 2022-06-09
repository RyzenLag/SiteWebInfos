<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "projet_siteweb_isainfo";

    try
    {
        $bdd = new PDO('mysql:host='.$sname.';dbname='.$db_name, $uname, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
    }
    catch(PDOException $e)
    {
        die('Erreur'.$e->getMessage());
    }

    
    function query($sql, $data = array()){
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "projet_siteweb_isainfo";
        $bdd = new PDO('mysql:host='.$sname.';dbname='.$db_name, $uname, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
        
        $req = $bdd->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    /*
    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "projet_siteweb_isainfo";

    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if (!$conn) {
        echo "Conection failed!";
    }
    */
?>