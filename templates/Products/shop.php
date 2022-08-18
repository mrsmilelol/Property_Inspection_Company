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
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $productImages
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
                        <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'main'])?>" title="Return to Home">
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
                                Price: AU$ 36.09 - AU$ 61.00
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
                        <a><?= $this->Html->image('banner/28.jpg'); ?> </a>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <a><?= $this->Html->image('bedroom.jpg'); ?> </a>
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
                        <!-- Product display -->
                        <div class="row">
                            <?= $this->fetch('content') ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 first-in-line first-item-of-tablet-line first-item-of-mobile-line">
                                <?php for ($x = 0; $x <= count($products)-1; $x+=3):?>
                                <div class="single-product">
                                    <!--product Content-->
                                    <div class="product-img-content">
                                        <!--Product Image-->
                                        <div class="product-img">
                                                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="Printed Dress">
                                                    <a><?= $this->Html->image($products[$x]['product_images'][0]->description,['alt' => 'CakePHP','class' => 'img-fluid']);?> </a>
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
                                        <h5><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="product "><?= $products[$x]->name ?></a></h5>
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
                                            <span class="new-price"><?= $this->number->currency($products[$x]->price) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-item-of-tablet-line">
                                <?php for ($x = 1; $x <= count($products)-1; $x+=3):?>
                                    <div class="single-product">
                                        <!--product Content-->
                                        <div class="product-img-content">
                                            <!--Product Image-->
                                            <div class="product-img">
                                                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="Printed Dress">
                                                    <a><?= $this->Html->image($products[$x]['product_images'][0]->description,['alt' => 'CakePHP','class' => 'img-fluid']);?> </a>
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
                                            <h5><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="product "><?= $products[$x]->name ?></a></h5>
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
                                                <span class="new-price"><?= $this->number->currency($products[$x]->price) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
                                <?php for ($x = 2; $x <= count($products)-1; $x+=3):?>
                                    <div class="single-product">
                                        <!--product Content-->
                                        <div class="product-img-content">
                                            <!--Product Image-->
                                            <div class="product-img">
                                                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="Printed Dress">
                                                    <a><?= $this->Html->image($products[$x]['product_images'][0]->description,['alt' => 'CakePHP','class' => 'img-fluid']);?> </a>
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
                                            <h5><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail',$products[$x]->id])?>" title="product "><?= $products[$x]->name ?></a></h5>
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
                                                <span class="new-price"><?= $this->number->currency($products[$x]->price) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor?>
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
                                <?= $this->Html->image('featured/quickview.jpg'); ?>
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
</html>


