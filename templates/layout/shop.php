<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping List || Goetze</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,700,300,600' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Stroke 7 Icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- bxslider CSS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <!-- Venobox CSS
    ============================================ -->
    <link rel="stylesheet" href="css/venobox.css" media="screen" />
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- Header Area Start -->
<div class="header-area">
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header-default pull-left">
                        <p>Default Welcome Msg!</p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="header-top-right pull-right">
                        <div class="currencies-block-top block-toggle pull-left">
                            <div class="current">
                                <span>GBP</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <ul class="first-currencies toggle-content">
                                <li><a href="#" title="Dollar (USD)">Dollar (USD)</a></li>
                                <li><a href="#" title="Dollar (USD)">Pound (GBP)</a></li>
                            </ul>
                        </div>
                        <div class="languages-block-top block-toggle pull-left">
                            <div class="current">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <ul class="first-languages  toggle-content">
                                <li><a href="#" title="English">English</a></li>
                                <li><a href="#" title="Arabic(Arabic)">Arabic(Arabic)</a></li>
                            </ul>
                        </div>
                        <div class="header-user-info pull-right">
                            <a href="my-account.html" title="My account">
                                <i class="fa fa-user"></i>
                                My account
                            </a>
                            <a href="wishlist.html" title="My wishlist">
                                <i class="fa fa-heart"></i>
                                My wishlist
                            </a>
                            <a href="#" title="My wishlist">
                                <i class="fa fa-unlock-alt"></i>
                                Sign in
                            </a>
                            <a href="#" title="My wishlist">
                                <i class="fa fa-share-square-o"></i>
                                Check out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!-- Header Logo -->
                    <div class="header-logo">
                        <a href="index.html" title="Goetze">
                            <img class="img-responsive" src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!--Header Bottom Right Start-->
                <div class="col-lg-2 col-md-2  col-sm-6 col-xs-12 header-right-inner">
                    <div class="header-bottom-right">
                        <div class="header-bottom-right-inner">
                            <ul>
                                <li>
                                    <a class="cart-toggler search-icon" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <div class="header-bottom-search">
                                        <form class="search-box" action="#" method="POST">
                                            <div>
                                                <input type="text" value="" placeholder="Search" autocomplete="off">
                                                <button class="btn btn-search" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a class="cart-toggler mini-cart-icon" href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>2</span>
                                    </a>
                                    <div class="cart-list">
                                        <div class="product">
                                            <div class="cart-single-product">
                                                <a class="product-image" href="#">
                                                    <img src="img/cart-img/1.jpg" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <a href="#" class="remove">
                                                        <i class="fa fa-times-circle"></i>
                                                    </a>
                                                    <div class="product-name">
                                                                <span class="quantity-formated">
                                                                    <span class="quantity">1</span>
                                                                    X
                                                                </span>
                                                        <a href="#" class="cart-block-product-name" title="Faded Short Sleeves T-shirt">Faded...</a>
                                                    </div>
                                                    <div class="product-atributes">
                                                        <a href="#" title="Product detail">S, Orange</a>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price">£ 16.84</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-single-product">
                                                <a class="product-image" href="#">
                                                    <img src="img/cart-img/2.jpg" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <a href="#" class="remove">
                                                        <i class="fa fa-times-circle"></i>
                                                    </a>
                                                    <div class="product-name">
                                                                <span class="quantity-formated">
                                                                    <span class="quantity">2</span>
                                                                    X
                                                                </span>
                                                        <a href="#" class="cart-block-product-name" title="Faded Short Sleeves T-shirt">Printed Dr...</a>
                                                    </div>
                                                    <div class="product-atributes">
                                                        <a href="#" title="Product detail">S, Orange</a>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price">£ 64.23</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-prices">
                                            <div class="cart-prices-line first-line"></div>
                                            <div class="cart-prices-line last-line">
                                                <span>Total</span>
                                                <span class="price pull-right">£ 48.04</span>
                                            </div>
                                        </div>
                                        <p class="cart-buttons">
                                            <a class="btn btn-default button-small" href="#" title="Check out">
                                                        <span>
                                                            Check out
                                                            <i class="fa fa-angle-right"></i>
                                                        </span>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li class="expand"><a href="index.html">Home</a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                        <li class="sub-menu-title"><a href="#">Home Pages</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                        <li><a href="index-5.html">Home Version 5</a></li>
                                        <li><a href="index-6.html">Home Version 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Bedroom</a>
                                    <!-- Mega Menu Four Column -->
                                    <div class="mega-menu">
												<span>
													<a class="mega-title" href="#">Categories 01</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                        <span>
													<a class="mega-title" href="#">Categories 02</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                        <span>
													<a class="mega-title" href="#">Categories 03</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                        <span class="mega-menu-img">
													<a href="#"><img src="img/img_menu.jpg" alt="" /></a>
												</span>
                                    </div>
                                </li>
                                <li><a href="shop.html">Livingroom</a>
                                    <!-- Mege Menu Two Column -->
                                    <div class="mega-menu two-column">
												<span>
													<a class="mega-title" href="#">Categories 01</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                        <span>
													<a class="mega-title" href="#">Categories 02</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                    </div>
                                </li>
                                <li class="expand"><a href="shop.html">Lighting</a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                        <li class="sub-menu-title"><a href="#">Categories 01</a></li>
                                        <li><a href="shop.html">Washing machine 1</a></li>
                                        <li><a href="shop.html">Washing machine 2</a></li>
                                        <li><a href="shop.html">Washing machine 3</a></li>
                                        <li><a href="shop.html">Washing machine 4</a></li>
                                    </ul>
                                </li>
                                <li class="expand"><a href="#">Pages</a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="account.html">Account</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="product-simple.html">Product Details</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Mian Menu End-->
                </div>
            </div>
        </div>
    </div>
    <!--Header Bottom End-->
</div>
<!-- Header Area End -->
<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="index-3.html">Home Version 3</a></li>
                                    <li><a href="index-4.html">Home Version 4</a></li>
                                    <li><a href="index-5.html">Home Version 5</a></li>
                                    <li><a href="index-6.html">Home Version 6</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Bedroom</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Livingroom</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="account.html">Account</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="product-simple.html">Product Details</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Lighting</a>
                                <ul>
                                    <li><a href="shop.html">Washing machine 1</a></li>
                                    <li><a href="shop.html">Washing machine 2</a></li>
                                    <li><a href="shop.html">Washing machine 3</a></li>
                                    <li><a href="shop.html">Washing machine 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href="index.html" title="Return to Home">
                                <i class="fa fa-home"></i>
                                Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><a href="index.html" title="Lighting">Lighting</a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><a href="index.html" title="Categories 01">Categories 01</a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li>Washing machine 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- All Product Side Bar Area Start -->
<div class="all-product-sidebar-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <aside class="widget-title">
                    <p>Catalog</p>
                </aside>
                <div class="left-widget-content  indicator-banner">
                    <aside class="enabled-filters widget">
                        <h3 class="widget-subtitle">Enabled filters:</h3>
                        <ul>
                            <li>Size: S
                                <a href="#" title="Cancel"><i class="fa fa-remove pull-right"></i></a>
                            </li>
                            <li>Color: Beige
                                <a href="#" title="Cancel"><i class="fa fa-remove pull-right"></i></a>
                            </li>
                            <li>
                                Price: £ 36.09 - £ 61.00
                            </li>
                        </ul>
                    </aside>
                    <aside class="left-widget-price widget">
                        <h3 class="widget-subtitle">Price</h3>
                        <div class="info-widget">
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <label>Range:</label>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </aside>
                    <aside class="left-widget-size widget">
                        <h3 class="widget-subtitle">Size</h3>
                        <div class="widget-info">
                            <ul>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">S (4)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">M (5)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">L (3)</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="left-widget-color widget">
                        <h3 class="widget-subtitle">Color</h3>
                        <div class="widget-info">
                            <ul>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Beige (4)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">White (5)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Yellow (3)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Pink (3)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Black (3)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Blue (3)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Green (3)</a>
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <a href="#">Orange (3)</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="banner-image">
                    <a href="#">
                        <img alt="" src="img/banner/28.jpg">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <img src="img/bedroom.jpg" alt="" />
                <h1 class="page-heading section-padding2">
                    <span class="cat-name pull-left">Bedroom </span>
                    <span class="heading-counter pull-right">There are 7 products.</span>
                </h1>
                <div class="shop-item-filter">
                    <div class="shop-tab clearfix">
                        <!-- Nav tabs -->
                        <ul class="tab-menu" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li role="presentation">
                                <a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a>
                            </li>
                        </ul>
                        <div class="shop-tab-selectors pull-right">
                            <form action="#">
                                <div class="single-shop-form single-shop-show pull-left">
                                    <label>Sort by</label>
                                    <div class="shop-select">
                                        <select>
                                            <option selected="selected">--</option>
                                            <option>Price: Lowest first</option>
                                            <option>Price: Highest first</option>
                                            <option>Product Name: A to Z</option>
                                            <option>Product Name: Z to A</option>
                                            <option>In stock</option>
                                            <option>Reference: Lowest first</option>
                                            <option>Reference: Highest first</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-shop-form pull-left">
                                    <label>Show</label>
                                    <div class="shop-select">
                                        <select>
                                            <option selected="selected">12</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-shop-form pul-right">
                                    <button type="submit">
                                        <span>Compare (<strong class="total-compare-val">0</strong>)<i class="fa fa-chevron-right right"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="grid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 first-in-line first-item-of-tablet-line first-item-of-mobile-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Printed Dress">
                                                <img src="img/featured/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 61.19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-item-of-tablet-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <span class="sale-label">Sale!</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 34.78</span>
                                            <span class="old-price">£ 36.61</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 36.60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 first-in-line last-line last-item-of-tablet-line first-item-of-mobile-line last-mobile-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Printed Chiffon Dress">
                                                <img src="img/featured/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 21.65</span>
                                            <span class="old-price">£ 24.60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-line first-item-of-tablet-line last-mobile-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Printed Dress">
                                                <img src="img/featured/5.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 31.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-in-line last-line last-item-of-tablet-line last-item-of-mobile-line last-mobile-line">
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                            <a href="product-simple.html" title="Blouse">
                                                <img src="img/featured/6.jpg" alt="">
                                            </a>
                                        </div>
                                        <span class="new-label">New</span>
                                        <!--Product Action-->
                                        <div class="product-action">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                            </a>
                                            <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                            </a>
                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <!--Product Name-->
                                        <h5><a href="product-simple.html" title="Blouse">Blouse</a></h5>
                                        <!--Product Rating-->
                                        <div class="rating-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="new-price">£ 32.40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="list">
                        <div class="row">
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.78</span>
                                                <span class="old-price">£ 36.61</span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Blouse">
                                                <img src="img/featured/3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Blouse">Blouse</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.40 </span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>Short-sleeved blouse with feminine draped sleeve detail. </p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Printed Dress">
                                                <img src="img/featured/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.20 </span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/6.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 34.61 </span>
                                                <span class="old-price">£ 36.78 </span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/7.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 36.60</span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining. </p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shop-product">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <!--Product Image-->
                                            <a href="product-simple.html" title="Printed Summer Dress">
                                                <img src="img/featured/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content ">
                                            <h5><a href="product-simple.html" title="Printed Dress">Blouse</a></h5>
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="new-price">£ 32.40 </span>
                                            </div>
                                            <!--Product Rating-->
                                            <div class="rating-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!--Product Action-->
                                            <p>Short-sleeved blouse with feminine draped sleeve detail. </p>
                                            <div class="availability">
                                                <span>In stock</span>
                                            </div>
                                            <div class="deal-product-action">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a href="#" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                </a>
                                                <a href="#" title="Add to Compare"><i class="fa fa-files-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination-content">
                            <p class="pull-left">Showing 1 - 10 of 10 items</p>
                            <div class="pagination-button pull-right">
                                <ul class="pagination">
                                    <li class="pagination-previous" id="pagination-previous-bottom">
                                        <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                                    </li>
                                    <li><a href="#"><span>1</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="pagination-next" id="pagination-next-bottom">
                                        <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                                <button class="show-pagi">Show all</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Product Side Bar Area End -->
<!--Brand Area Start-->
<div class="brand-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="brand-list">
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/3.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/6.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><img src="img/brand/7.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand Area End-->
<!--Footer Area Start-->
<div class="footer-area">
    <!--Footer Top Area Start-->
    <div class="footer-top section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">Categories</h3>
                        <ul class="toggle-footer">
                            <li><a href="shop.html">Bedroom</a></li>
                            <li><a href="shop.html">Livingroom</a></li>
                            <li><a href="shop.html">Lighting</a></li>
                            <li><a href="shop.html">Accessories</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">Information</h3>
                        <ul class="toggle-footer">
                            <li><a href="shop.html">Specials</a></li>
                            <li><a href="shop.html">New products</a></li>
                            <li><a href="shop.html">Best sellers</a></li>
                            <li><a href="shop.html">Our stores</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">My account</h3>
                        <ul class="toggle-footer">
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">My credit slips</a></li>
                            <li><a href="#">My addresses</a></li>
                            <li><a href="#">My personal info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 hidden-sm">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">EXTRAS</h3>
                        <ul class="toggle-footer">
                            <li><a href="#">Orders & Returns</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Advance Search</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Group Sales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Top Area Start-->
    <!--Footer Middle Area Start-->
    <div class="footer-middle section-padding2">
        <div class="container">
            <div class="row">
                <div class="footer-border-right col-lg-5 col-md-5 col-sm-6 col-xs-12 ">
                    <div class="footer-middle-content">
                        <a href="index.html"><img src="img/logo_footer.png" alt=""></a>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit.</p>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-area">
                        <h3 class="footer-widget-title">CONTACT US</h3>
                        <div class="footer-info contact">
                            <ul class="toggle-footer">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>8901 Marmora Road, Glasgow D04 <br /> 89 GR, New York</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>Telephone: (+1) 866-540-3229 <br />Fax: (+1) 866-540-3229</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    Email: admin@Bootexpert.com
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    Website: www.bootexpert.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-sm">
                    <div class="time-area">
                        <h3 class="footer-widget-title">OPENING TIME</h3>
                        <ul class="toggle-footer">
                            <li>
                                <span class="pull-left">Monday - Friday</span>
                                <span class="pull-right">9:00 - 22:00</span>
                            </li>
                            <li>
                                <span class="pull-left">Saturday</span>
                                <span class="pull-right">10:00 - 24:00</span>
                            </li>
                            <li>
                                <span class="pull-left">Sunday</span>
                                <span class="pull-right">12:00 - 24:00</span>
                            </li>
                        </ul>
                        <div class="paypal">
                            <img src="img/paypal.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Middle Area Start-->
    <!--Footer Bottom Area Start-->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright <a href="http://bootexperts.com/" target="_blank">BootExperts</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom Area End-->
</div>
<!--Footer Area End-->
<!--Quickview Product Start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/featured/quickview.jpg">
                            </div>
                        </div>
                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                            </div>
                            <a href="product-details.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Quickview Product-->
<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- jquery Venobox js
============================================ -->
<script src="js/venobox.js"></script>
<!-- jquery bxslider js
============================================ -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- countdown JS
============================================ -->
<script src="js/jquery.countdown.min.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- Nivo slider js
============================================ -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
</body>
</html>
