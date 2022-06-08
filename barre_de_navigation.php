<?php
    session_start(); 
?>

<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="img/klokers_logo.png" alt="logo" width="35%"
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
                            <li class="nav-item">
                                <a class="nav-link" href="single-product.html">Shop</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    KLOKERS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                    <a class="dropdown-item" href="elements.html">Nous découvrir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.html">Panier</a>
                            </li>
                            <li class="nav-item">
                                <?php
                                if (isset($_SESSION['email'])) { ?>
                                    <a class="nav-link" href="mon_compte.php">Mon compte</a>
                                <?php 
                                    echo $_SESSION['pseudo'];
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
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="cart.html" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->
                            
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