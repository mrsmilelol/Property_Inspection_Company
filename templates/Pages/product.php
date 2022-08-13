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

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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
                        <li>Sinlge Product Simple</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Product Simple Area Start -->
<div class="product-simple-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5">
                <div class="single-product-image">
                    <div id="content-eleyas">
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="view1">
                                <a class="venobox" href="img/blog/single/1.jpg" data-gall="gallery" title=""><?= $this->Html->image('blog/single/1.jpg'); ?><span>View larger<i class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view2">
                                <a class="venobox" href="img/blog/single/2.jpg" data-gall="gallery" title=""><?= $this->Html->image('blog/single/2.jpg'); ?><span>View larger<i class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view3">
                                <a class="venobox" href="img/blog/single/3.jpg" data-gall="gallery" title=""><?= $this->Html->image('blog/single/3.jpg'); ?><span>View larger<i class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view4">
                                <a class="venobox" href="img/blog/single/4.jpg" data-gall="gallery" title=""><?= $this->Html->image('blog/single/4.jpg'); ?><span>View larger<i class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                            <div class="pro-view active"><a href="#view1" data-toggle="tab"><?= $this->Html->image('blog/single/s1.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view2" data-toggle="tab"><?= $this->Html->image('blog/single/s2.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view3" data-toggle="tab"><?= $this->Html->image('blog/single/s3.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view4" data-toggle="tab"><?= $this->Html->image('blog/single/s4.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view1" data-toggle="tab"><?= $this->Html->image('blog/single/s1.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view2" data-toggle="tab"><?= $this->Html->image('blog/single/s2.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view3" data-toggle="tab"><?= $this->Html->image('blog/single/s3.jpg'); ?></a></div>
                            <div class="pro-view"><a href="#view4" data-toggle="tab"><?= $this->Html->image('blog/single/s4.jpg'); ?></a></div>
                        </div>
                        <!-- BX Slider Navigation -->
                        <div class="outside">
                            <p><span id="slider-prev"></span> <span id="slider-next"></span></p>
                        </div>
                        <!-- BX Slider Navigation -->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-7">
                <div class="pd-center-column">
                    <h2>Blouse</h2>
                    <div class="media-body">
                        <p class="media-body-title">£ 32.40 <span>tax incl.</span></p>
                        <p><label>Reference: </label> <span>demo_2</span></p>
                        <p><label>Condition: </label> <span>New product</span></p>
                    </div>
                    <div class="pd-description">
                        <p>Short-sleeved blouse with feminine draped sleeve detail.</p>
                    </div>
                    <div class="pd-quantity-available">
                        <p id="product-available">
                            <span>297</span>
                            <span>Items</span>
                        </p>
                        <p id="availability">
                            <span>In stock</span>
                        </p>
                    </div>
                    <p class="shop-select">
                        <label>Size</label>
                        <select>
                            <option value="volvo">S</option>
                            <option value="saab">M</option>
                            <option value="mercedes">L</option>
                        </select>
                    </p>
                    <p class="shop-select">
                        <label>Color</label>
                        <select>
                            <option value="volvo">Black</option>
                            <option value="saab">White</option>
                        </select>
                    </p>
                    <div class="product-attributes clearfix">
								<span id="quantity-wanted-p" class="pull-left">
									<span class="dec qtybutton">-</span>
									<input type="text" class="cart-plus-minus-box" value="1">
									<span class="inc qtybutton">+</span>
								</span>
                        <span>
									<a href="cart.html" class="cart-btn">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span></a>
								</span>
                        <div class="usefull-link-block">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fa fa-print"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="socialsharing-product">
                        <button type="button" class="btn btn-default btn-twitter">
                            <i class="fa fa-twitter"></i>Tweet
                        </button>
                        <button type="button" class="btn btn-default btn-facebook">
                            <i class="fa fa-facebook"></i> Share
                        </button>
                        <button type="button" class="btn btn-default btn-google-plus">
                            <i class="fa fa-google-plus"></i> Google+
                        </button>
                        <button type="button" class="btn btn-default btn-pinterest">
                            <i class="fa fa-pinterest"></i> Pinterest
                        </button>
                    </p>
                    <div id="product-comments-block-extra">
                        <ul class="comments-advices">
                            <li>
                                <a class="open-comment-form" href="#">Write a review</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-hidden col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <!-- Category Title -->
                <div class="sidebar-widget-title">
                    <h4><span>Top sellers</span></h4>
                </div>
                <!-- Category List -->
                <div class="row">
                    <div class="category-container-list">
                        <div class="single-p-item">
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Faded Short Sleeves T-shirt">
                                            <?= $this->Html->image('featured/1.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
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
                                            <span class="new-price">£ 16.84</span>
                                            <span class="old-price">£ 19.81</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Blouse">
                                            <?= $this->Html->image('featured/2.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Blouse">Blouse</a></h5>
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
                                            <span class="new-price">£ 32.40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Dress">
                                            <?= $this->Html->image('featured/3.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
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
                                            <span class="new-price">£ 32.20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-item">
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Dress">
                                            <?= $this->Html->image('featured/4.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
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
                                            <span class="new-price">£ 61.19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Summer Dress">
                                            <?= $this->Html->image('featured/5.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
                                            <span class="new-price">£ 34.78</span>
                                            <span class="old-price">£ 36.61</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Summer Dress">
                                            <?= $this->Html->image('featured/6.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
                                            <span class="new-price">£ 36.60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                        </div>
                        <div class="single-p-item">
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Chiffon Dress">
                                            <?= $this->Html->image('featured/7.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
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
                                            <span class="new-price">£ 21.65</span>
                                            <span class="old-price">£ 24.60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Faded Short Sleeves T-shirt">
                                            <?= $this->Html->image('featured/1.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
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
                                            <span class="new-price">£ 16.84</span>
                                            <span class="old-price">£ 19.81</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product -->
                            <div class="single-product">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-img">
                                        <a href="product-simple.html" title="Printed Summer Dress">
                                            <?= $this->Html->image('featured/5.jpg'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-content">
                                        <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
                                            <span class="new-price">£ 34.78</span>
                                            <span class="old-price">£ 36.61</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-details-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">MORE INFO</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">DATA SHEET</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">REVIEWS</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content review">
                    <div role="tabpanel" class="tab-pane active" id="more-info">
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data">
                        <table class="table-data-sheet">
                            <tbody>
                            <tr class="odd">
                                <td>Compositions</td>
                                <td>Cotton</td>
                            </tr>
                            <tr class="even">
                                <td>Styles</td>
                                <td>Casual</td>
                            </tr>
                            <tr class="odd">
                                <td>Properties</td>
                                <td>Short Sleeve</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <div id="product-comments-block-tab">
                            <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Simple Area End -->
<!--Featured Area Start-->
<div class="featured-area section-padding2">
    <div class="container">
        <div class="section-title">
            <h4>6 products in category: </h4>
        </div>
        <div class="row">
            <!--Product List Start-->
            <div class="featured-product-list indicator-style">
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Printed Dress">
                                    <?= $this->Html->image('featured/1.jpg'); ?>
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
                            <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
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
                                <span class="new-price">£ 61.19</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Printed Summer Dress">
                                    <?= $this->Html->image('featured/2.jpg'); ?>
                                </a>
                            </div>
                            <span class="new-label">New</span>
                            <span class="sale-label">Sale!</span>
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
                            <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
                                <span class="new-price">£ 34.78</span>
                                <span class="old-price">£ 36.61</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Printed Summer Dress">
                                    <?= $this->Html->image('featured/3.jpg'); ?>
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
                            <h5><a href="product-simple.html" title="Printed Summer Dress">Printed Summer Dress</a></h5>
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
                                <span class="new-price">£ 36.60</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Printed Chiffon Dress">
                                    <?= $this->Html->image('featured/4.jpg'); ?>
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
                            <h5><a href="product-simple.html" title="Printed Chiffon Dress">Printed Chiffon Dress</a></h5>
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
                                <span class="new-price">£ 21.65</span>
                                <span class="old-price">£ 24.60</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Printed Dress">
                                    <?= $this->Html->image('featured/5.jpg'); ?>
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
                            <h5><a href="product-simple.html" title="Printed Dress">Printed Dress</a></h5>
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
                                <span class="new-price">£ 31.20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Blouse">
                                    <?= $this->Html->image('featured/6.jpg'); ?>
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
                            <!--Product Name-->
                            <h5><a href="product-simple.html" title="Blouse">Blouse</a></h5>
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
                                <span class="new-price">£ 32.40</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <!--product Content-->
                        <div class="product-img-content">
                            <!--Product Image-->
                            <div class="product-img">
                                <a href="product-simple.html" title="Faded Short Sleeves T-shirt">
                                    <?= $this->Html->image('featured/7.jpg'); ?>
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
                            <!--Product Name-->
                            <h5><a href="product-simple.html" title="Faded Short Sleeves T-shirt">Faded Short Sleeves T-shirt</a></h5>
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
                                <span class="new-price">£ 16.84</span>
                                <span class="old-price">£ 19.81</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single Product End-->
            </div>
            <!--Product List Start-->
        </div>
    </div>
</div>
<!--Featured Area End-->
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
                        <a href="http://bootexperts.com/"><?= $this->Html->image('brand/4.jpg'); ?></a>
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
