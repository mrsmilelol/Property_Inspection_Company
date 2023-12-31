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
 * @var \App\Model\Entity\Category $category
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$this->layout = 'front';

?>
<!doctype html>
<style>
    label span {
        /*font-weight: 300;*/
        color: #000;
        font-size: 13px;
        font-weight: 400;
        line-height: 20px;
    }

    .widget-info li a {
        /*font-size: 12px;
        font-weight: 300;
        margin-left: 5px;*/
        color: #000;
        font-size: 13px;
        font-weight: 400;
        line-height: 20px;
    }
</style>
<html class="no-js" lang="">
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'main']) ?>"
                               title="Return to Home">
                                <i class="fa fa-home"></i>
                                Home
                            </a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><?= h($category->description) ?></li>
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
                    <aside class="left-widget-size widget">
                        <h3 class="widget-subtitle">Stock Status</h3>
                        <div class="widget-info">
                            <ul>
                                <li>
                                    <a href="<?= $this->Url->build(['class' => 'widget-info', 'controller' => 'Products', 'action' => 'shop', 1]) ?>">In
                                        Stock</a>
                                </li>
                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'shop', 2]) ?>">On
                                        Sale</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <form action="/team09-app_fit3048/products/shop">
                        <aside class="left-widget-size widget">
                            <h3 class="widget-subtitle">Brand</h3>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <input type="radio" id="brand1" name="brand" value="A.R.T">
                                        <label for="brand1"><span>A.R.T</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="brand2" name="brand" value="AMINI">
                                        <label for="brand2"><span>AMINI</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="brand3" name="brand" value="CHELSEA_FURNITURE">
                                        <label for="brand3"><span>CHELSEA_FURNITURE</span></label>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="left-widget-color widget">
                            <h3 class="widget-subtitle">Style</h3>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <input type="radio" id="style1" name="style" value="Arch_Salvage">
                                        <label for="style1"><span>Arch_Salvage</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style2" name="style" value="Architrave">
                                        <label for="style2"><span>Architrave</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style3" name="style" value="Charme">
                                        <label for="style3"><span>Charme</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style4" name="style" value="Giovanna">
                                        <label for="style4"><span>Giovanna</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style5" name="style" value="Old_world">
                                        <label for="style5"><span>Old_world</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style6" name="style" value="Passage">
                                        <label for="style6"><span>Passage</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style7" name="style" value="Malibu_Crest">
                                        <label for="style7"><span>Malibu_Crest</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style8" name="style" value="Mia_Bella">
                                        <label for="style8"><span>Mia_Bella</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style10" name="style" value="Bader">
                                        <label for="style10"><span>Bader</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style11" name="style" value="New_Empaire">
                                        <label for="style11"><span>New_Empaire</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style12" name="style" value="Pearly">
                                        <label for="style12"><span>Pearly</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style13" name="style" value="Princess">
                                        <label for="style13"><span>Princess</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style14" name="style" value="Ruby">
                                        <label for="style14"><span>Ruby</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style15" name="style" value="SG_Plush">
                                        <label for="style15"><span>SG_Plush</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style16" name="style" value="Shayan">
                                        <label for="style16"><span>Shayan</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style17" name="style" value="Sina">
                                        <label for="style17"><span>Sina</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="style18" name="style" value="Venues">
                                        <label for="style18"><span>Venues</span></label>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="left-widget-size widget">
                            <h3 class="widget-subtitle">Material</h3>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <input type="radio" id="material1" name="material" value="Wood">
                                        <label for="material1"><span>Wood</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="material2" name="material" value="Metal">
                                        <label for="material2"><span>Metal</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="material3" name="material" value="Gold">
                                        <label for="material3"><span>Gold</span></label>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="left-widget-size widget">
                            <h3 class="widget-subtitle">Colour</h3>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <input type="radio" id="colour1" name="colour" value="Red">
                                        <label for="colour1"><span>Red</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour2" name="colour" value="Blue">
                                        <label for="colour2"><span>Blue</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour3" name="colour" value="Brown">
                                        <label for="colour3"><span>Brown</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour4" name="colour" value="White">
                                        <label for="colour4"><span>White</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour5" name="colour" value="Black">
                                        <label for="colour5"><span>Black</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour6" name="colour" value="Grey">
                                        <label for="colour6"><span>Grey</span></label>
                                    </li>
                                    <li>
                                        <input type="radio" id="colour7" name="colour" value="Gold">
                                        <label for="colour7"><span>Gold</span></label>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <button type="submit" class="btn btn-primary"
                                style="background-color: #c38748; border-radius: 0px; border: 0; width: 100%; text-transform: uppercase">
                            Search
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <a><?= $this->Html->image('shop.jpg'); ?> </a>
                <h1 class="page-heading section-padding2">
                    <span class="cat-name pull-left"><?= h($category->description) ?> </span>
                    <span class="heading-counter pull-right">There is/are <?= h(count($category->products)) ?> product(s) within this category.</span>
                </h1>
                <div class="shop-item-filter">
                    <div class="shop-tab clearfix">
                        <!-- Nav tabs -->
                        <div class="shop-tab-selectors pull-right">

                            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                                <div class="single-shop-form single-shop-show pull-left">
                                    <label>Sort by</label>
                                    <div class="shop-select">
                                        <select name="sel">
                                            <option selected="selected" value="">--</option>
                                            <option value="1">Price: Lowest first</option>
                                            <option value="2">Price: Highest first</option>
                                            <option value="3">Product Name: A to Z</option>
                                            <option value="4">Product Name: Z to A</option>
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
                                        <span>Sort Products <i class="fa fa-chevron-right right"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="grid">
                        <!-- Product Display -->
                        <div class="row-grid">
                            <?= $this->fetch('content') ?>
                            <?php foreach ($category->products as $c_product) : ?>
                                <?php $match = false; ?>
                                <?php for ($x = 0; $x <= count($products) - 1 and $match === false; $x++) {
                                    if ($products[$x]['id'] === $c_product->id) {
                                        $match = true;
                                    }
                                } ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                    <div class="single-product">
                                        <!--Product Content-->
                                        <div class="product-img-content">
                                            <!--Product Image-->
                                            <div class="product-img">
                                                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail', $c_product->id]) ?>"
                                                   title="Printed Dress">
                                                    <a><?= $this->Html->image($products[$x - 1]['product_images'][0]->description, [
                                                            'alt' => 'CakePHP',
                                                            'class' => 'img-fluid',
                                                            'url' => ['controller' => 'Products', 'action' => 'detail', $c_product->id]]); ?> </a>
                                                </a>
                                            </div>
                                            <!--<span class="new-label">New</span>-->
                                            <?php if ($this->Number->currency($c_product->sale_price) !== null and $this->Number->toPercentage($c_product->sale_price) > 0) : ?>
                                                <span class="sale-label">Sale!</span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="product-content">
                                            <h5>
                                                <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'detail', $c_product->id]) ?>"
                                                   title="product "><?= $c_product->name ?></a></h5>
                                            <!--Product Price-->
                                            <?php if ($this->Number->currency($c_product->sale_price) !== null and $this->Number->toPercentage($c_product->sale_price) > 0) : ?>
                                                <div class="product-price">
                                                    <span
                                                        class="new-price"><?= $this->Number->currency($c_product->sale_price) ?></span>
                                                    <span
                                                        class="old-price"><?= $this->Number->currency($c_product->price) ?></span>
                                                </div>
                                            <?php else : ?>
                                                <div class="product-price">
                                                    <span
                                                        class="new-price"><?= $this->Number->currency($c_product->price) ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- All Product Side Bar Area End -->

<!--Quickview Product Start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
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
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span>
                                </p>
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i
                                                    class="fa fa-linkedin"></i></a></li>
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
