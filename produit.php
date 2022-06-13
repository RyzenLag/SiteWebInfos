
  <?php
    include 'barre_de_navigation.php';
  ?>



  <!--================Single Product Area 1 =================-->
  
  

  <?php 
    //$colonne = "id";
    if (isset($_GET['id'])){
    $id=$_GET['id'];
    $products = query("SELECT * FROM products WHERE id = '$id'");
    }
    if (!empty($products))
    {
    
     
  ?>
  
  <?php foreach ($products as $product): 
    //if ($product->id==$id){
    ?>
    
  
    <div class="product_image_area section_padding">
      <div class="container">
        <div class="row s_product_inner justify-content-between" >
          <div class="col-6" >
            <div class="">
              <div id="vertical" class="" >
                <img width="100" height="400" src="img/montre/montre_<?php echo($product->id);?>.png" />
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="s_product_text">
              <h3><span href="produit.php?id=<?php echo($product->id);?>"><?php echo($product->nom); ?></span></h3>
              <h5><?php echo($product->detail); ?></h5>
              <h2> <?php echo(number_format($product->price,2,',',' ')); ?> €</h2>
              <ul class="list">
                <li>
                  <a class="active" href="single-product.php?marque=<?php echo($product->marque); ?>&nom=">
                    <span>marque : </span> <?php echo($product->marque); ?></a>
                </li>
                <li>
                  <a href="#"> <span>Availibility</span> : In Stock</a>
                </li>
              </ul>
              <p>
              <?php echo($product->description); ?>
              </p>
              <div class="card_area d-flex justify-content-between align-items-center">
                <div class="product_count">
                  <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="0" min="0" max="10">
                  <span class="number-increment"> <i class="ti-plus"></i></span>
                </div>
                
                <a href="addpanier-php.php?id=<?php echo($product->id);?>" type="button" class="btn_3 addPanier">add to cart</a>
 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  //}
    endforeach;} 
    
    else {
      ?>
      <div class="Main-searchWrapper f-search__body">
        <div class="Search-title">
            <h3>
            <span class="js-Search-title" data-automation-id="title-search-results-label">
            Erreur : Aucun produit trouvé !
            </span>
            </h3>
        </div>        
      </div>
    <?php
    }
    ?>

  <!--================End Single Product Area =================-->


  <?php include('footer.php');?>