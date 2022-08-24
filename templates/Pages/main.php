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
<!--Slider Area Start-->
<div class="slider-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <a><?= $this->Html->image('slider/living-room-1000x530.jpg'); ?> </a>
            <a><?= $this->Html->image('slider/dining-room-1-1000x530.jpg'); ?> </a>
            <a><?= $this->Html->image('slider/bedroom-1000x530.jpg'); ?> </a>
            <a><?= $this->Html->image('slider/home-office-1000x530.jpg'); ?> </a>
            <a><?= $this->Html->image('slider/lighting-slider-1000x530.jpg'); ?> </a>
        </div>
    </div>
</div>
<!--Slider Area End-->
<!--Banner Area Start-->
<!--<div class="banner-area5">-->
<!--    <div class="row">-->
<!--        <div class="col-50">-->
<!--            <div class="banner-image">-->
<!--                <a>--><!--<?//= $this->Html->image('banner/16.jpg'); ?>--><!-- </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-50">-->
<!--            <div class="banner-image">-->
<!--                <a href="#">-->
<!--                    --><!--<?//= $this->Html->image('banner/17.jpg'); ?>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-100">-->
<!--            <div class="banner-image">-->
<!--                <a href="#">-->
<!--                    --><!--<?//= $this->Html->image('banner/18.jpg'); ?>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-50">-->
<!--            <div class="banner-image">-->
<!--                <a href="#">-->
<!--                    --><!--<?//= $this->Html->image('banner/19.jpg'); ?>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-50">-->
<!--            <div class="banner-image">-->
<!--                <a href="#">-->
<!--                    --><!--<?//= $this->Html->image('banner/20.jpg'); ?>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--Banner Area End-->
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
<?= $this->element('contact') ?>

</body>
</html>
