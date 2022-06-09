<?php
 require_once 'single-product-php.php';


  if (isset($_GET['id']))
  {
    $product = query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    if (empty($product))
    {
        die("Ce produit n'existe pas !");
    }
    $panier->add($product[0]->id);
    die('le produit a bien était ajouté');
    
  }
  else 
  {
    die("pas de produit ajouté au panier");
  }



  

?>