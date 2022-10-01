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
<style type="text/css">
    #call:hover{
        background-color: #fcfc5b!important;
        color: #333!important;
    }
</style>
<html class="no-js" lang="">
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'main']); ?> title="Return to Home">
                            <i class="fa fa-home"></i>
                            Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us-area section-padding2">
    <div class="container">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="about-page-cntent">
                <h3>Our address</h3>
                <p>1680 Dandenong Rd, Oakleigh East VIC 3166 (Melbourne)</p>
                <p><br></p>
                <h3>Contact details</h3>
                <p>Email: info@chelseafurniture.com.au</p>
                <p>Telephone: 03 7068 0002</p>
            </div>
            <div class="social-icon">
                <ul>
                    <li><a href="https://www.facebook.com/chelsea.furnitures/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/chelseafurniture_australia"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="about-page-cntent">
                <p><br></p>
                <p>Do you have any questions about our <br>
                    services and products? We will be happy <br> to help you.</p>


<!--                <a href="tel:0370680002" title="Call Us Now !" id="call" class="btn">Call Us Now !</a>-->


            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="wpb_map_wraper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.8605334907706!2d145.11741161584735!3d-37.91032244734883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66ac30cb98f31%3A0x9d94eccb268997bc!2s1680%20Dandenong%20Rd%2C%20Oakleigh%20East%20VIC%203166!5e0!3m2!1sen!2sau!4v1648712699658!5m2!1sen!2sau"
                        align="right" width="800" height="600" style="border:0;"
                        allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <p><br></p>
<div/>
</html>

