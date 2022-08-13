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
                        <li><a href="index.html" title="Return to Home">
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
                <h3>The standard lorem ipsum passage</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ullam, commodi consequatur?</p>
                <blockquote>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
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
<div class="home-our-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-title text-center">
                    <h3 class="title text-uppercase">Meet the team</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <?= $this->Html->image('about/1.jpg',['width'=>'250','height'=>'250',
                                'class'=>'img-responsive','alt'=>'team4']); ?>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Martin Demichelis</h4>
                    <h5>PHP Developer</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <?= $this->Html->image('about/2.jpg',['width'=>'250','height'=>'250',
                                'class'=>'img-responsive','alt'=>'team4']); ?>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Luka Biglia</h4>
                    <h5>Programmer</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <?= $this->Html->image('about/3.jpg',['width'=>'250','height'=>'250',
                                'class'=>'img-responsive','alt'=>'team4']); ?>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Havier Macherano</h4>
                    <h5>Developer</h5>
                </div>
            </div>
            <div class="col-md-3 hidden-sm">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <?= $this->Html->image('about/4.jpg',['width'=>'250','height'=>'250',
                                'class'=>'img-responsive','alt'=>'team4']); ?>
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Martin Demichelis</h4>
                    <h5>PHP Developer</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Team Start -->
<!--Brand Area Start-->
<div class="brand-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="brand-list">
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/1.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/2.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/3.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/4.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/5.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/6.jpg'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/7.jpg'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand Area End-->
<!--News Letter Area Start-->
<div class="news-letter-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7  col-sm-7 col-xs-12">
                <div class="banner-image">
                    <a href="#">
                        <?= $this->Html->image('news-letter.jpg'); ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="letter-box">
                    <div class="letter-title">
                        <h4>Newsletter</h4>
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <p>Subscribe to our email newsletter & receive updates right in your inbox.</p>
                    <form  class="search-box" action="#" method="POST">
                        <div>
                            <input type="text" name="s" id="search-letter" value="Enter your e-mail">
                            <button type="submit" id="search-letter-btn" class="btn btn-search">
                                <i class="fa fa-paper-plane-o"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--News Letter Area End-->
</html>
