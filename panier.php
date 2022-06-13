
  <?php
    include 'barre_de_navigation.php';
    if (isset($_GET['del'])){ 
      del($_GET['del']);
    }
  ?>

  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            
            <tbody>
            <?php
                //$_SESSION['panier']=array();
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids))
                {
                  $products = array();
                }else
                {
                  $products = query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
                }
                
                foreach($products as $product):
                ?>
                
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img style="border:none;" width="100" src="img/montre/montre_<?php echo($product->id); ?>.png" />
                      </div>
                      <div class="media-body">
                        <p><a style="color: rgb(0,0,0);" href="produit.php?id=<?php echo($product->id);?>"><?php echo($product->nom); ?></a></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?php echo(number_format($product->price,2,',',' ')); ?>€</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                      <span><?php echo($_SESSION['panier'][$product->id]) ?></span>
                      
                      <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                    </div>
                  </td>
                  <td>
                    <h5><?php echo(number_format($product->price*$_SESSION['panier'][$product->id],2,',',' ')); ?>€</h5>
                  </td>
                  <td>
                    <a style="color: rgb(0,0,0);" href="panier.php?del=<?php echo ($product->id); ?>">X</a>
                  </td>
                </tr>
              <?php endforeach;?>
              



              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    Total :
                    <span class="total"><?php echo(number_format(total(),2,',',' ')); ?>€</span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="single-product.php?marque=&nom=">Continue Shopping</a>
            <!--<a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>-->
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->

  <?php include('footer.php');?>