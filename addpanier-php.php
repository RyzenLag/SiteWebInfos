<?php
  require'config.php';
  require'panier-php.php';
  
  $panier = new panier();
  var_dump($_GET);

  if (isset($_GET['id']))
  {
    $product = $bdd->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    var_dump($product);
  }
  else 
  {
    die("pas de produit ajouté au panier");
  }

?>