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
<?= $this->element('header') ?>

<!-- Page Content Starts Here! -->
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('contact') ?>

<?= $this->element('footer') ?>
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
