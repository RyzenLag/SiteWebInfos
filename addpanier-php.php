<?php
require_once 'single-product-php.php';
if (isset($_GET['id']))
{
  $product = query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
  if (empty($product)){
    die("Ce produit n'existe pas !");
  }
  $panier->add($product[0]->id);
  die('le produit a bien était ajouté');
}
else {
  die("pas de produit ajouté au panier");
}  
include('barre_de_navigation.php');
?>




  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

  <?php include('footer.php');?>


