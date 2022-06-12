
        <?php
            
            include 'barre_de_navigation.php';
        ?>    

       


            <!-- container part start -->
            
                <div class="mt-5 pt-5 container-fluid">
                    <div class="row justify-content-center">
                        <a class="col-2" style="background-color:yellow; height: 400px;" href="single-product.php?marque=Rolex&nom=">
                            <img src="../SiteWebInfos/img/montre1.png" height="250" weidth="500">
                        </a>
                        <a class="col-2" style="background-color:purple;height: 400px;" href="single-product.php?marque=Cartier&nom=">
                            <img src="../SiteWebInfos/img/montre2.png" height="250" weidth="500">
                        </a>
                        <a class="col-2" style="background-color:red;height: 400px;" href="single-product.php?marque=Richard Mille&nom=">
                            <img src="../SiteWebInfos/img/montre3.png" height="250" weidth="500">
                        </a>
                        <a class="col-2" style="background-color:blue;height: 400px;" href="single-product.php?marque=Audemars Piguet&nom=">
                            <img src="../SiteWebInfos/img/montre4.png" height="250" weidth="500">
                        </a>
                        <a class="col-2" style="background-color:green;height: 400px;" href="single-product.php?marque=Patek Philippe&nom=">
                            <img src="../SiteWebInfos/img/montre5.png" height="250" weidth="500">
                        </a>
                    </div>
                </div>
            
            <!-- container part end -->


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
                <div class=" bg-light row align-items-center justify-content-between">
                <div class="col-lg-12 ">
                    <!--produit à ajouter contenant paramètre top montre-->
                    
                    <div class="best_product_slider owl-carousel ">
                    <?php 
                    
                    $products = query("SELECT * FROM products WHERE type = 'top'");
    
                    foreach ($products as $product): 
                    ?>
                        <div class="product_image_area section_padding col-12">
                            <a href="produit.php?id=<?php echo($product->id);?>">
                            <div class="container-fluid" style="">
                            <div class="row s_product_inner justify-content-between">
                                <div class="">
                                <div class="">
                                    <div id="">
                                    <div class="" data-thumb="img/montre/montre_<?php echo($product->id);?>.png">
                                        <img height="265" src="img/montre/montre_<?php echo($product->id);?>.png" style="
                                                                                        display: block;
                                                                                        margin-left: 20x;
                                                                                        margin-right: auto;
                                                                                        
                                                                                        "/>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="justify-content-between align-items-center col-12">
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