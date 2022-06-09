<?php
require_once 'single-product-php.php';
class panier{
    public function __construct()
    {
        if (!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }
    

    public function add($product_id) {
        if (isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]++;
        }
        else {
            $_SESSION['panier'][$product_id] = 1;  //$quantity
        }
    }
    
    
    
    
}
function del($product_id)
{
    unset($_SESSION['panier'][$product_id]);
}

function total(){
    $total=0;
    $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array();
        }
        else{
            $products = query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
        }
    
        foreach($products as $product) {
        $total += $product->price * $_SESSION['panier'][$product->id];

    }
    return $total;
}


/*
function add_quantity($product_id) {
    if (isset($_SESSION['panier'][$product_id]) && $quantity <= 'SELECT nb_product FROM products'){
        $_SESSION['panier'][$product_id]++;
    }
    else {
        $_SESSION['panier'][$product_id] = $quantity;
    }
}*/


?>