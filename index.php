
        <?php
            
            include 'barre_de_navigation.php';
        ?>    

       


            <!-- container part start -->
              
            
               
                
                <div style="background-image: url(../SiteWebInfos/img/Rolex_banner.jpg); background-color:rgba(0,0,0,0.5); height: 300px" class=" container-fluid">  
                    <div class="row justify-content-center" style="background-color:rgba(0,0,0,0.75); height: 300px">
                        <a class="col-2 pt-5" style="color: black; text-align: center; height: 400px;  color: rgb(255,255,255);" href="single-product.php?marque=Rolex&nom=">
                            <img src="../SiteWebInfos/img/montre1.png" height="200" weidth="500">Rolex
                        </a>
                        <a class="col-2 pt-5" style="color: black; text-align: center; 400px;  color: rgb(255,255,255);" href="single-product.php?marque=Cartier&nom=">
                            <img src="../SiteWebInfos/img/montre2.png" height="200" weidth="500">Cartier
                        </a>
                        <a class="col-2 pt-5" style="color: black; text-align: center; height: 400px; color: rgb(255,255,255);" href="single-product.php?marque=Richard Mille&nom=">
                            <img src="../SiteWebInfos/img/montre3.png" height="200" weidth="500">Richard Mille
                        </a>
                        <a class="col-2 pt-5" style="color: black; text-align: center; height: 400px;  color: rgb(255,255,255);" href="single-product.php?marque=Audemars Piguet&nom=">
                            <img src="../SiteWebInfos/img/montre4.png" height="200" weidth="500">Audemars Piguet
                        </a>
                        <a class="col-2 pt-5" style="color: black; text-align: center; height: 400px;  color: rgb(255,255,255);" href="single-product.php?marque=Patek Philippe&nom=">
                            <img src="../SiteWebInfos/img/montre5.png" height="200" weidth="500">Patek Philippe
</a>
                    </div>
                </div>
            
            <!-- container part end -->
            <br>
            <br>

            <!-- subscribe_area part start-->
            <!-- product_list part start-->
            <section class="product_list best_seller">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div>&nbsp

                    <h2>Best Sellers <a class="active" style="
                        color: #444;
                        position: relative;
                        z-index: 1;" 
                    href="single-product.php?marque=&nom=">shop</a></h2>
                    </div>
                </div>
                </div>
                <div class=" bg-light row align-items-center justify-content-between" style="height: 265px">
                <div class="col-lg-12 ">
                    <!--produit à ajouter contenant paramètre top montre-->
                    
                    <div class="best_product_slider owl-carousel ">
                    <?php 
                    
                    $products = query("SELECT * FROM products WHERE type = 'top'");
    
                    foreach ($products as $product): 
                    ?>
                        <div class="col-12" style="height: 300px">
                            <a href="produit.php?id=<?php echo($product->id);?>">
                            <div class="container-fluid align-items-start" style="height: 300px">
                            <div class=" justify-content-start align-items-start">
                                    <div class="" data-thumb="img/montre/montre_<?php echo($product->id);?>.png">
                                        <img height="200" src="img/montre/montre_<?php echo($product->id);?>.png" style="
                                                                                        display: block;
                                                                                        margin-left: 20x;
                                                                                        margin-right: auto;
                                                                                        
                                                                                        "/>
                                    </div>
                                <div class="justify-content-center align-items-start col-12">
                                <div class="s_product_text">
                                    <h3><span href="produit.php?id=<?php echo($product->id);?>"><?php echo($product->nom); ?></span></h3>
                                    
                                    <h2> <?php echo(number_format($product->price,2,',',' ')); ?> €</h2>
                                    
                                    
                                </div>
                                </div>
                            </div>
                            </div>
                            </a>
                        </div>
                    
                    <?php endforeach;?>
                </div>
                </div>
            </div>
            </section>

            <?php include('footer.php');?>