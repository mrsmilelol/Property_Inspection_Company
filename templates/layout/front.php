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
    <?= $this->Html->charset() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?= $this->Html->meta('icon') ?>
    <title><?= $this->fetch('title') ?></title>
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
    <?= $this->Html->css('bootstrap.min.css') ?>
    <!-- Font Awesome CSS
    ============================================ -->
    <?= $this->Html->css('font-awesome.min.css') ?>
    <!-- Stroke 7 Icon CSS
    ============================================ -->
    <?= $this->Html->css('pe-icon-7-stroke.css') ?>
    <!-- owl.carousel CSS
    ============================================ -->
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.css') ?>
    <?= $this->Html->css('owl.transitions.css') ?>
    <!-- nivo slider CSS
    ============================================ -->
<!--    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />-->
    <?= $this->Html->css('/lib/css/nivo-slider.css') ?>
<!--    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />-->
    <?= $this->Html->css('/lib/css/preview.css') ?>
    <!-- jquery-ui CSS
    ============================================ -->
    <?= $this->Html->css('jquery-ui.css') ?>
    <!-- meanmenu CSS
    ============================================ -->
    <?= $this->Html->css('meanmenu.min.css') ?>
    <!-- animate CSS
    ============================================ -->
    <?= $this->Html->css('animate.css') ?>
    <!-- bxslider CSS
    ============================================ -->
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <!-- Venobox CSS
    ============================================ -->
    <?= $this->Html->css('venobox.css') ?>
    <!-- normalize CSS
    ============================================ -->
    <?= $this->Html->css('normalize.css') ?>
    <!-- main CSS
    ============================================ -->
    <?= $this->Html->css('main.css') ?>
    <!-- style CSS
    ============================================ -->
    <?= $this->Html->css('style.css') ?>
    <!-- responsive CSS
    ============================================ -->
    <?= $this->Html->css('responsive.css') ?>
    <!-- modernizr JS
    ============================================ -->
    <?= $this->Html->script('modernizr-2.8.3.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
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
                    <div class="header-default pull-left social-icon">
<!--                        <p>Default Welcome Msg!</p>-->
                        <ul>
                        <li><a href="https://www.facebook.com/chelsea.furnitures/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/chelseafurniture_australia"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
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
                    <div class="header-logo logo-main-page pull-left">
                        <a href=<?= $this->Url->build(['controller'=>'Pages',
                        'action'=>'display','main']); ?> title="Chelsea Furniture">
                            <?= $this->Html->image('chelsea-furniture-logo-smaller.png',
                            ['class' =>'img-responsive']); ?>
                        </a>
                    </div>
                </div>
                <!--Header Bottom Right Start-->
                <div class="col-lg-2 col-md-2  col-sm-6 col-xs-12 header-right-inner">
                    <div class="header-bottom-right">
                        <div class="header-bottom-right-inner">
                            <ul>
                                <li>
                                    <a class="cart-toggler search-icon to-search-icon" href="#">
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
                                                <a class="product-image" href=<?= $this->Url->build(['controller'=>'Pages',
                                                    'action'=>'display','main']); ?>>
                                                    <?= $this->Html->image('cart-img/1.jpg'); ?>
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
                                                <a class="product-image" href=<?= $this->Url->build(['controller'=>'Pages',
                                                    'action'=>'display','main']); ?>>
                                                    <?= $this->Html->image('cart-img/2.jpg'); ?>
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
                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']); ?>">Home</a>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Bedroom</a>
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
                                                    <a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']); ?>>
                                                        <?= $this->Html->image('img_menu.jpg'); ?>
                                                    </a>
												</span>
                                    </div>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Livingroom</a>
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
                                <li class="expand"><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Lighting</a>
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
                                        <li><a href="product-simple.html">Product Details</a></li>
                                        <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'shop','']); ?>">Shop</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'about']); ?>>About Us</a>
                                </li>
                                <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'contact']); ?>>Contact Us</a></li>
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

<!-- Page Content Starts Here! -->
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

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
                            <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'contact']); ?>>Contact us</a></li>
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
                    <div class="footer-middle-content logo-main-page">
                        <a href="index.html"><?= $this->Html->image('chelsea-furniture-logo-smaller.png'); ?></a>
                        <p>Chelsea Fine Furnishings is all about service and quality, combined with a knowledgeable selection of fine furniture.
                            At Chelsea Fine Furnishings we understand that your furniture is an extension of you and contributes to the impression you wish to make at home.
                            We want the process of selecting and purchasing the right furniture to be as enjoyable and rewarding as possible.</p>
                        <div class="social-icon">
                            <ul>
                                <li><a href="https://www.facebook.com/chelsea.furnitures/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/chelseafurniture_australia"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
<!--                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-area">
                        <h3 class="footer-widget-title">CONTACT US</h3>
                        <div class="footer-info contact">
                            <ul class="toggle-footer">
<!--                                <li>-->
<!--                                    <i class="fa fa-map-marker"></i>-->
<!--                                    <p>8901 Marmora Road, Glasgow D04 <br /> 89 GR, New York</p>-->
<!--                                </li>-->
                                <li>
                                    <i class="fa fa-phone"></i>
<!--                                    <p>Telephone: 03 7068 0002 <br />Fax: (+1) 866-540-3229</p>-->
                                    Telephone: 03 7068 0002
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    Email: info@chelseafurniture.com.au
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    Website: https://chelseafurniture.com.au/
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-sm">
                    <div class="time-area">
                        <h3 class="footer-widget-title">TRADING HOURS</h3>
                        <ul class="toggle-footer">
                            <li>
                                <span class="pull-left">Monday - Friday</span>
                                <span class="pull-right">9am - 6pm</span>
                            </li>
                            <li>
                                <span class="pull-left">Saturday - Sunday</span>
                                <span class="pull-right">10am - 5pm</span>
                            </li>
                        </ul>
                        <div class="paypal">
                            <?= $this->Html->image('paypal.png'); ?>
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
<!-- jquery
============================================ -->
<?= $this->Html->script('jquery-1.11.3.min.js') ?>
<!-- bootstrap JS
============================================ -->
<?= $this->Html->script('bootstrap.min.js') ?>
<!-- wow JS
============================================ -->
<?= $this->Html->script('wow.min.js') ?>
<!-- price-slider JS
============================================ -->
<?= $this->Html->script('jquery-price-slider.js') ?>
<!-- jquery Venobox js
============================================ -->
<?= $this->Html->script('venobox.js') ?>
<!-- jquery bxslider js
============================================ -->
<?= $this->Html->script('jquery.bxslider.min.js') ?>
<!-- meanmenu JS
============================================ -->
<?= $this->Html->script('jquery.meanmenu.js') ?>
<!-- countdown JS
============================================ -->
<?= $this->Html->script('jquery.countdown.min.js') ?>
<!-- owl.carousel JS
============================================ -->
<?= $this->Html->script('owl.carousel.min.js') ?>
<!-- Nivo slider js
============================================ -->
<!--<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>-->
<!--<script src="lib/home.js" type="text/javascript"></script>-->
<?= $this->Html->script('/webroot/lib/js/jquery.nivo.slider.js') ?>
<?= $this->Html->script('/webroot/lib/home.js') ?>
<!-- scrollUp JS
============================================ -->
<?= $this->Html->script('jquery.scrollUp.min.js') ?>
<!-- plugins JS
============================================ -->
<?= $this->Html->script('plugins.js') ?>
<!-- main JS
============================================ -->
<?= $this->Html->script('main.js') ?>

<?= $this->fetch('script') ?>
</body>
</html>
