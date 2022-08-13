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
$this->layout = 'front';
?>
<!doctype html>
<html class="no-js" lang="">
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href=<?= $this->Url->build(['controller'=>'Pages',
                                'action'=>'display','main']); ?> title="Return to Home">
                                <i class="fa fa-home"></i>
                                Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<div class="about-us-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-title text-center">
                    <h3 class="title text-uppercase">About Us</h3>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="about-page-cntent">
                <h3>Chelsea Furniture</h3>
                <p>Chelsea Fine Furnishings is all about service and quality, combined with a knowledgeable selection of fine furniture.</p>
                <blockquote>
                    <p>At Chelsea Fine Furnishings, we understand that your furniture is an extension of you and contributes to the impression you wish to make at home.
                        We want the process of selecting and purchasing the right furniture to be as enjoyable and rewarding as possible.</p>
                </blockquote>
                <p>Chelsea Fine Furnishings first opened its doors in 1998 in Rockville, Maryland in the United States. At that time Chelsea sold exclusive European classical furniture.
                    In 2007, Chelsea opened new locations in Springfield, Tyson in Virginia and in 2015, in Sterling, Virginia.
                    In 2022, Chelsea Fine Furnishings opened its doors in Melbourne, Australia.</p>
                <p>Since 2020, our understanding and appreciation of quality furniture has been applied to the manufacturing process.
                    We have arranged with Choice Classic Furniture to use our designs in the production of unique, solid wood, hand carved furniture that will last a lifetime.
                    These outstanding quality pieces range from classical to modern in style and design.</p>
            </div>
            <div class="social-icon">
                <ul>
                    <li><a href="https://www.facebook.com/chelsea.furnitures/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/chelseafurniture_australia"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="img-element">
                <?= $this->Html->image('about/about-chelseafurniture-800x800.jpg'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Our Team Start -->
<!--<div class="home-our-team">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="f-title text-center">-->
<!--                    <h3 class="title text-uppercase">Meet the team</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-3 col-sm-4">-->
<!--                <div class="item-team text-center">-->
<!--                    <div class="team-info">-->
<!--                        <div class="team-img">-->
<!--                            --><!--<?//= $this->Html->image('about/1.jpg',['width'=>'250','height'=>'250',
//                                'class'=>'img-responsive','alt'=>'team4']); ?>-->
<!--                            <div class="mask">-->
<!--                                <div class="mask-inner">-->
<!--                                    <a href=""><i class="fa fa-facebook"></i></a>-->
<!--                                    <a href=""><i class="fa fa-twitter"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h4>Martin Demichelis</h4>-->
<!--                    <h5>PHP Developer</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 col-sm-4">-->
<!--                <div class="item-team text-center">-->
<!--                    <div class="team-info">-->
<!--                        <div class="team-img">-->
<!--                            --><!--<?//= $this->Html->image('about/2.jpg',['width'=>'250','height'=>'250',
//                                'class'=>'img-responsive','alt'=>'team4']); ?>-->
<!--                            <div class="mask">-->
<!--                                <div class="mask-inner">-->
<!--                                    <a href=""><i class="fa fa-facebook"></i></a>-->
<!--                                    <a href=""><i class="fa fa-twitter"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h4>Luka Biglia</h4>-->
<!--                    <h5>Programmer</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 col-sm-4">-->
<!--                <div class="item-team text-center">-->
<!--                    <div class="team-info">-->
<!--                        <div class="team-img">-->
<!--                            --><!--<?//= $this->Html->image('about/3.jpg',['width'=>'250','height'=>'250',
//                                'class'=>'img-responsive','alt'=>'team4']); ?>-->
<!--                            <div class="mask">-->
<!--                                <div class="mask-inner">-->
<!--                                    <a href=""><i class="fa fa-facebook"></i></a>-->
<!--                                    <a href=""><i class="fa fa-twitter"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h4>Havier Macherano</h4>-->
<!--                    <h5>Developer</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 hidden-sm">-->
<!--                <div class="item-team text-center">-->
<!--                    <div class="team-info">-->
<!--                        <div class="team-img">-->
<!--                            --><!--<?//= $this->Html->image('about/4.jpg',['width'=>'250','height'=>'250',
//                                'class'=>'img-responsive','alt'=>'team4']); ?>-->
<!--                            <div class="mask">-->
<!--                                <div class="mask-inner">-->
<!--                                    <a href=""><i class="fa fa-facebook"></i></a>-->
<!--                                    <a href=""><i class="fa fa-twitter"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h4>Martin Demichelis</h4>-->
<!--                    <h5>PHP Developer</h5>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Our Team Start -->
<!--Brand Area Start-->
<!--<div class="brand-area section-padding2">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="brand-list">-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/1.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/2.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/3.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/4.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/5.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/6.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    <div class="single-brand">-->
<!--                        <a href="http://bootexperts.com/">--><!--<?//= $this->Html->image('brand/7.jpg'); ?>--><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--Brand Area End-->
<!--News Letter Area Start-->
<!--<div class="news-letter-area section-padding">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-7 col-md-7  col-sm-7 col-xs-12">-->
<!--                <div class="banner-image">-->
<!--                    <a href="#">-->
<!--                        --><!--<?//= $this->Html->image('news-letter.jpg'); ?>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">-->
<!--                <div class="letter-box">-->
<!--                    <div class="letter-title">-->
<!--                        <h4>Newsletter</h4>-->
<!--                        <i class="fa fa-envelope-o"></i>-->
<!--                    </div>-->
<!--                    <p>Subscribe to our email newsletter & receive updates right in your inbox.</p>-->
<!--                    <form  class="search-box" action="#" method="POST">-->
<!--                        <div>-->
<!--                            <input type="text" name="s" id="search-letter" value="Enter your e-mail">-->
<!--                            <button type="submit" id="search-letter-btn" class="btn btn-search">-->
<!--                                <i class="fa fa-paper-plane-o"></i>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--News Letter Area End-->
</html>
