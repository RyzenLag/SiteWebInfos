<?php
    require_once 'config.php';
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>aranoz</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/lightslider.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"> <img src="img/klokers_logo.png" alt="logo" width="35%"
                        class="fix-left"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

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
                                    <a class="dropdown-item" href="single-product.php?marque=all#nom=">Nos montres</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Rolex">Rolex</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Cartier">Cartier</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Richard Mille">Richard Mille</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Audemars Piguet">Audemars Piguet</a>
                                    <a class="dropdown-item" href="single-product.php?marque=Patek Philippe">Patek Philippe</a>
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
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['email'])) { ?>
                                    <a class="nav-link" href="mon_compte.php"> <?php echo $_SESSION['pseudo'];?></a>
                                <?php 
                                }
                                else { ?>
                                    <a class="nav-link" href="login.php">Connexion/Inscription</a>
                                <?php
                                }
                                ?>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a><i class="fas fa-cart-plus"></i></a>
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
                                else { ?>
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
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>

</header>
    <!-- Header part end-->