<!--Footer Area Start-->
<?php $categories = $this->Common->getCategoryInfo(); ?>
<div class="footer-area">
    <!--Footer Top Area Start-->
    <div class="footer-top section-padding2">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center">
                <div class="col-xs-12">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">Categories</h3>
                        <ul class="toggle-footer">
                            <?php $categories = $categories->toArray();
                            for ($x = 0; $x <= count($categories) - 1; $x++) :
                            if ($categories[$x]->parent_id == null) : ?>
                            <li>
                                <a href=<?= $this->Url->build(['controller' => 'Categories',
                                    'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                            </li>
                            <?php endif; endfor; ?>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-xs-12 col-md-4">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">Information</h3>
                        <ul class="toggle-footer">
                        </ul>
                    </div>
                </div>-->
                <?php $userType = $this->request->getSession()->read('Auth.user_type_id') ?>

                <div class="col-xs-12 hidden-sm">
                    <div class="footer-top-menu">
                        <h3 class="footer-widget-title">EXTRAS</h3>
                        <ul class="toggle-footer">
                            <li><a href="#">Orders & Returns</a></li>
                            <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','about']); ?>>About Us</a></li>
                            <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','contact']); ?>>Contact Us</a></li>
                            <li><a href="<?= $this->Url->build(['controller'=>'Products', 'action'=>'shop']); ?>">Shop</a></li>
                            <!-- My account - this links to different things depending on the user -->
                            <?php if ($userType == 1) : ?>
                                <li>
                                    <a href=<?= $this->Url->build(['prefix' => 'Admin', 'controller' => 'Products','action' => 'index']) ?>>Back to Dashboard</a>
                                </li>
                            <?php elseif ($userType == 2) : ?>
                                <li>
                                    <a href=<?= $this->Url->build(['prefix' => 'Wholesale', 'controller' => 'Users','action' => 'dashboard']) ?>>My Account</a>
                                </li>
                            <?php elseif ($userType == 3) : ?>
                                <li>
                                    <a href=<?= $this->Url->build(['prefix' => 'Customer', 'controller' => 'Users','action' => 'dashboard']) ?>>My Account</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href=<?= $this->Url->build(['prefix' => false, 'controller' => 'Users','action' => 'login']) ?>>My Account</a>
                                </li>
                            <?php endif; ?>
                            <!-- Wholesale application page -->
                            <?php if ($userType == 3 || $userType == null) : ?>
                            <li>
                                <a href="<?= $this->Url->build(['controller'=>'WholesaleRequests', 'action'=>'request']); ?>">Wholesale Application</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Top Area End-->
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
                    <p>Copyright <a href="#" target="_blank">Chelsea Furniture</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Bottom Area End-->
</div>
<!--Footer Area End-->
