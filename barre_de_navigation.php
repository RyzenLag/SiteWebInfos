<?php
    include 'header.php';
    require_once 'config.php';
?>

  
<header class="main_menu home_menu" style="background-color: rgba(80, 92, 90, 0.25); border-radius: 5px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"> <img src="img/klokers_logo2.png" alt="logo" width="60%"
                        class="fix-left"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>
                    
                    <?php
                    $script = $_SERVER['SCRIPT_NAME'];
                    if (!strpos($script,"login.php") AND !strpos($script,"register.php")){
                    ?>
                    
                    <div class="collapse navbar-collapse main-menu-item " id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="single-product.php?marque=all" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SHOP
                                </a>
                                <div class="dropdown-menu" href="" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="single-product.php?marque=&nom=">Nos montres</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Rolex&nom=">Rolex</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Cartier&nom=">Cartier</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Richard Mille&nom=">Richard Mille</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Audemars Piguet&nom=">Audemars Piguet</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Patek Philippe&nom=">Patek Philippe</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    KLOKERS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="contact.php">Contact</a>
                                    <a class="dropdown-item" href="elements.php">Nous découvrir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="panier.php">Panier</a>
                            </li>
                            
                        </ul>
                    </div>
                    
                    
                    <div class="hearer_icon d-flex">
                        
                        <?php
                        $script = $_SERVER['SCRIPT_NAME'];
                        if (strpos($script,"single-product.php")){
                            ?><a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <?php
                        }
                        ?>
                        
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a><i class="fa fa-user"></i><?php if (isset($_SESSION['email'])){echo("&nbsp&nbsp&nbsp");echo($_SESSION['pseudo']);}else{echo("&nbsp&nbsp&nbsp");echo("Me connecter");}?></a>
                            </a>
                            
                            <?php
                            if (isset($_SESSION['email'])) { ?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button type="submit" value="submit" class="btn_3">
                                        <a href="mon_compte.php">Mon Compte</a>
                                    </button>
                                    <br>
                                    <button href="logout-php.php" type="submit" value="submit" class="btn_3">
                                        <a href="logout-php.php">log out</a>
                                    </button>
                                </div> 
                            <?php 
                            }
                            else { 
                            ?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <button type="submit" value="submit" class="btn_3">
                                        <a href="login.php">Connexion</a>
                                    </button>
                                    <br>
                                    <button href="logout-php.php" type="submit" value="submit" class="btn_3">
                                        <a href="register.php">Inscription</a>
                                    </button>
                                </div> 
                            <?php
                            }
                            ?>
                        </div>



                        <div class="dropdown cart">
                            <a class="dropdown-toggle" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href="panier.php"><i class="fa fa-cart-plus"></i></a>
                            </a>
                            
                            
                            
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </nav>
            </div>
        </div>
    </div>

    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between search-inner" action="single-product.php" method="get">
                <input type="hidden" name="marque" value="<?php if (isset($_GET['marque'])){echo($_GET['marque']);}?>">
                <input type="text" name="nom" name='marque'  value="<?php if (!empty($_GET['nom'])){echo($_GET['nom']);} ?>" class="form-control" id="search_input" placeholder="Search Here"> 
                <span class="ti-close" id="close_search" title="Close Search"></span>  
            </form>
        </div>
    </div>

    

</header>
    <!-- Header part end-->
    
    
    <!-- breadcrumb start-->