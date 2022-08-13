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
                        <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'main']); ?> title="Return to Home">
                                <i class="fa fa-home"></i>
                                Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Contact Area Area Start -->
<!--<div class="contact-us-area section-padding2">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <h1 class="heading-title">Customer service - Contact us</h1>-->
<!--                <form action="mail.php" method="POST" class="contact-form-box">-->
<!--                    <fieldset>-->
<!--                        <h3 class="page-subheading">send a message</h3>-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12 col-md-3">-->
<!--                                <div class="form-group">-->
<!--                                    <label>Subject Heading</label>-->
<!--                                    <div class="shop-select" id="uniform-id_contact">-->
<!--                                        <select name="id_contact" id="id_contact">-->
<!--                                            <option selected="selected">-- Choose --</option>-->
<!--                                            <option>Customer service</option>-->
<!--                                            <option>Webmaster</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Email address</label>-->
<!--                                    <div class="shop-select">-->
<!--                                        <input type="email" value="" name="email" id="email">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Order reference</label>-->
<!--                                    <div class="shop-select">-->
<!--                                        <input type="text" value="" id="id_order" name="id_order">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Attach File</label>-->
<!--                                    <input type="hidden" name="MAX_FILE_SIZE" value="8388608">-->
<!--                                    <div id="uniform-fileUpload" class="uploader">-->
<!--                                        <input type="file" class="form-control" id="fileUpload" name="fileUpload">-->
<!--                                        <span class="filename">No file selected</span>-->
<!--                                        <span class="action">Choose File</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-md-9">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="message">Message</label>-->
<!--                                    <div class="shop-select">-->
<!--                                        <textarea name="message" id="message"></textarea>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="submit">-->
<!--                            <button class="show-pagi" name="submitMessage" id="submitMessage" type="submit">-->
<!--                                <span>Send <i class="fa fa-chevron-right right"></i> </span>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </fieldset>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Contact Area Area End -->
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
</html>
