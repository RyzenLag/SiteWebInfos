
    <?php
      include 'barre_de_navigation.php';
    ?>


    
  
    <!--================Single Product Area 1 =================-->
    
    <div class="container">
    <div class="row align-items-start">
    <?php 

      if (!isset($_GET['nom']) OR !isset($_GET['marque'])){
        include 'error404.php';
      }
      else{
        $marque=$_GET['marque'];
        $nom=$_GET['nom'];
        $products_marque = query("SELECT * FROM products WHERE marque = '$marque'");
        $products_nom = query("SELECT * FROM products WHERE nom LIKE '%$nom%'");
      
      
      
      
      
      if ($nom==="" and $marque===""){
        $products_nom = array() ;
      }

      if (empty($products_marque)){
        $products = query("SELECT * FROM products WHERE nom LIKE '%$nom%' ");
      }
      else {
        $products = query("SELECT * FROM products WHERE marque = '$marque' AND nom LIKE '%$nom%' ");
      }

      

      if (empty($products)){
        //echo("error : aucun produit !");
        //include 'error404.php';
        include 'error_result.php';
        ?><br><br><br><br><br><br><br><br><br><br><br><br><?php
      }
  
    foreach ($products as $product): 
    
    ?>
      
    
      <div class="product_image_area section_padding col-3" >
        <a href="produit.php?id=<?php echo($product->id);?>">
        <div class=" col-12 container-fluid-center" style="height: 360px;">
          <div class="row align-items-start ">
            <img width="200" height="200" src="img/montre/montre_<?php echo($product->id);?>.png"/>
              <div class="justify-content-between align-items-start col-12 ">
                <div class="s_product_text">
                  <h3><span href="produit.php?id=<?php echo($product->id);?>"><?php echo($product->nom); ?></span></h3>
                </div>
              </div>
          </div>
          <div class="row align-items-end">
            <div>
              <div>
                <h2> <?php echo(number_format($product->price,2,',',' ')); ?> €</h2>
                <div class="card_area d-flex justify-content-between align-items-center">
                  <a href="addpanier-php.php?id=<?php echo($product->id);?>" class="btn_3 addPanier">add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>
    <?php
    endforeach;} 
    ?>
    </div>
    </div>
    <!--================End Single Product Area =================-->


    
    <?php include('footer.php');?>