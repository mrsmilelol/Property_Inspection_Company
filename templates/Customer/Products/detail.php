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
                        <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','main']); ?>>
                                <i class="fa fa-home"></i>
                                Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><?= h($product->name) ?> </li>
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
<!--                        <div id="my-tab-content" class="tab-content">-->
<!--                            <div class="tab-pane active" id="view1">-->
<!--                                <a class="venobox" href="--><!--<?php //'img/' . $productImages[0]->description . '/' ?>--><!--" data-gall="gallery" title="">-->
<!--                                    --><!--<?//= $this->Html->image($productImages[0]->description,
//                                        ['alt' => 'CakePHP','class' => 'img-fluid']);
//                                    ?>-->
<!--                                    <span>View larger-->
<!--                                        <i class="fa fa-search-plus"></i>-->
<!--                                    </span>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="view1">
                                <a class="venobox" href="<?php 'img/' . $productImages[0]->description . '/' ?>" data-gall="gallery" title=""><?= $this->Html->image($productImages[0]->description, ['alt' => 'CakePHP','class' => 'img-fluid']); ?>
                                    </a>
                            </div>
                        </div>
                        <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                            <?php for ($x = 1; $x <= count($productImages) - 1; $x++) : ?>
                            <div class="pro-view active"><a href="#view1" data-toggle="tab"><?= $this->Html->image($productImages[$x]->description, ['alt' => 'CakePHP','class' => 'img-fluid','height' => 80,'width' => 106]); ?></a></div>
                            <?php endfor ?>
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
                    <h2><?= h($product->name) ?></h2>
                    <div class="media-body">
                        <?php if ($product->sale_price !== null and $product->sale_price > 0): ?>
                            <p class="media-body-title">AUD <?= $this->Number->currency(h($product->sale_price)) ?><span> tax incl.</span></p>
                        <?php else: ?>
                            <p class="media-body-title">AUD <?= $this->Number->currency(h($product->price)) ?><span> tax incl.</span></p>
                        <?php endif; ?>
                        <p> Brand: <?= h($product->brand) ?></p>
                        <p> Style: <?= h($product->style) ?></p>

                    </div>
                    <div class="pd-description">
                        <p><?= h($product->description) ?></p>
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
                        <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">MORE INFO</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">DATA SHEET</a></li>
<!--                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">REVIEWS</a></li>-->
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content review">
                    <div role="tabpanel" class="tab-pane active" id="more-info">
                        <p>- Manufacturer: <?= h($product->manufacturing) ?></p>
                        <p>- Finish: <?= h($product->finish) ?></p>
                        <p>- Colour: <?= h($product->colour) ?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data">
                        <table class="table-data-sheet">
                            <tbody>
                            <tr class="odd">
                                <td>Size (cm)</td>
                                <td><?= h($product->size) ?></td>
                            </tr>
                            <tr class="even">
                                <td>Weight (kg)</td>
                                <td><?= h($product->weight) ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
<!--                    <div role="tabpanel" class="tab-pane" id="reviews">-->
<!--                        <div id="product-comments-block-tab">-->
<!--                            <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Simple Area End -->

</html>
