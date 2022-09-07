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
                            <li><a href="<?= $this->Url->build(['prefix'=>'Admin','controller'=>'WholesaleRequests', 'action'=>'add']); ?>">Wholesale Application</a></li>
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
