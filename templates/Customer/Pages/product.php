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
                                <a class="venobox" href="img/blog/single/1.jpg" data-gall="gallery"
                                   title=""><?= $this->Html->image('blog/single/1.jpg'); ?><span>View larger<i
                                            class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view2">
                                <a class="venobox" href="img/blog/single/2.jpg" data-gall="gallery"
                                   title=""><?= $this->Html->image('blog/single/2.jpg'); ?><span>View larger<i
                                            class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view3">
                                <a class="venobox" href="img/blog/single/3.jpg" data-gall="gallery"
                                   title=""><?= $this->Html->image('blog/single/3.jpg'); ?><span>View larger<i
                                            class="fa fa-search-plus"></i></span></a>
                            </div>
                            <div class="tab-pane" id="view4">
                                <a class="venobox" href="img/blog/single/4.jpg" data-gall="gallery"
                                   title=""><?= $this->Html->image('blog/single/4.jpg'); ?><span>View larger<i
                                            class="fa fa-search-plus"></i></span></a>
                            </div>
                        </div>
                        <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                            <div class="pro-view active"><a href="#view1"
                                                            data-toggle="tab"><?= $this->Html->image('blog/single/s1.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view2"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s2.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view3"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s3.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view4"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s4.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view1"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s1.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view2"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s2.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view3"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s3.jpg'); ?></a>
                            </div>
                            <div class="pro-view"><a href="#view4"
                                                     data-toggle="tab"><?= $this->Html->image('blog/single/s4.jpg'); ?></a>
                            </div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-details-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab"
                                                                  data-toggle="tab">MORE INFO</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">DATA
                                SHEET</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">REVIEWS</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content review">
                    <div role="tabpanel" class="tab-pane active" id="more-info">
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine
                            designs delivering stylish separates and statement dresses which have since evolved into a
                            full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The
                            result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All
                            the beautiful pieces are made in Italy and manufactured with the greatest attention. Now
                            Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
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

</html>
