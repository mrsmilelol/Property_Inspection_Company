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
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $new_list
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $ids
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
            <form action="/team09-app_fit3048/products/shop" method="get">
            <div class="col-xs-12 col-sm-3">
                <aside class="widget-title">
                    <p>Catalog</p>
                    <input type="submit" value="查询">
                    <input type="hidden" value="" name="checks" class="checks">
                </aside>
                <div class="left-widget-content  indicator-banner">
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

                    <?php
                    foreach ($new_list as $key=>$val){
                        ?>

                        <aside class="left-widget-size widget">

                            <h3 class="widget-subtitle"><?php echo $val['p_name'] ?></h3>
                            <div class="widget-info">
                                <ul>
                                    <?php

                                    foreach ($val['child'] as $k=>$v)
                                    {
                                        ?>
                                        <li>
                                            <input onchange="oBtAddChoice();" name="class_box" class="cheked_class" type="checkbox" value="<?php echo $k ?>">
                                            <a href="#"><?php echo $v ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </aside>
                    <?php
                    }


                    ?>




                </div>
                <div class="banner-image">
                    <a href="#">
                        <a><?= $this->Html->image('shop2.jpg'); ?></a>
                    </a>
                </div>
            </div>
            </form>
            <div class="col-xs-12 col-sm-9">
                <a><?= $this->Html->image('shop.jpg'); ?> </a>
                <h1 class="page-heading section-padding2">
                    <span class="cat-name pull-left">Bedroom </span>
                    <span class="heading-counter pull-right">There are 2 products.</span>
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
                            <?php foreach($products as $pk=>$pv){
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 first-in-line first-item-of-tablet-line first-item-of-mobile-line">

                                        <div class="single-product">
                                            <!--product Content-->
                                            <div class="product-img-content">
                                                <!--Product Image-->
                                                <div class="product-img">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'Products', 'action' => 'detail',$pv['id']])?>" title="Printed Dress">
                                                        <a href="<?php echo $this->Url->build(['controller' => 'Products', 'action' => 'detail',$pv['id']])?>"><?php echo $this->Html->image($pv['img'],['alt' => 'CakePHP','class' => 'img-fluid']);?> </a>
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
                                                <h5><a href="<?php echo $this->Url->build(['controller' => 'Products', 'action' => 'detail',$pv['id']])?>" title="product "><?= $pv['name'] ?></a></h5>
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
                                                    <span class="new-price"><?php echo $this->Number->currency($pv['price']) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                </div>


                                <?php
                            }
                            ?>

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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="application/javascript">
    var ids = "<?php echo $ids ?>";
    if (ids.length >0){
        var arr =ids.split(',');
        for(var i in arr){
            $("input:checkbox[value="+arr[i]+"]").prop("checked",true);
        }

    }
    function oBtAddChoice() {
        var app_value =[];
        var spCodesTemp='';
        $('input:checkbox[name=class_box]:checked').each(function(i){
            //放到一个数组中

            app_value.push($(this).val());
            //将值放入一个字符串中

            if(0==i){
                spCodesTemp = $(this).val();
            }else{
                spCodesTemp += (","+$(this).val());
            }

        });
        $(".checks").val(spCodesTemp);
        // $("form").submit(function(){
        //     alert("提交");
        // });

        //$.ajax({
        //    type: 'GET', //请求的方式
        //    url: "<?php //$this->Url->build(['controller' => 'Products', 'action' => 'shop'])?>//", // 请求的URL地址
        //    data: { ids:  spCodesTemp},// 这次请求要携带的数据
        //    success: function(res) { //请求成功之后的回调函数
        //
        //    },error(e){
        //
        //    }
        //})
        // $.get();
    }


</script>
<!--End of Quickview Product-->
</html>


