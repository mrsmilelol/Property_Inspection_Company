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
 * @var string[]|\Cake\Collection\CollectionInterface $orderItems
 * @var string[]|\Cake\Collection\CollectionInterface $user
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$this->layout = 'front';

//require_once 'vendor/autoload.php';
//\Stripe\Stripe::setApiKey('sk_test_51LkgUlGRmWCorjcXA038yfpvxDxs4RGCgZjVodGkU4lVz37N5Uo94ig9MZg2YCCGDZSwaT0vSUmFpUYjNFnI9qOi00eWvmMRNg');
//$orderCheckout = [];
//foreach ($orderItems['Orderitems'] as $orderItem){
//    array_push($orderCheckout, ['price_data' => [
//        'currency' => 'aud',
//        'product_data' => [
//            'name' => $orderItem['name'],
//        ],
//        'unit_amount' => intval($orderItem['price']),
//    ],
//        'quantity' => 1]);
//}
//debug($orderItems);
//
//$session = \Stripe\Checkout\Session::create([
//    'payment_method_types' => ['card'],
//    /*'line_items' => [[
//        'price_data' => [
//            'currency' => 'aud',
//            'product_data' => [
//                'name' => 'T-shirt',
//            ],
//            'unit_amount' => 2000,
//        ],
//        'quantity' => 1,
//    ]],*/
//    'line_items' => [$orderCheckout],
//    'mode' => 'payment',
//    'success_url' => 'http://localhost:8080/success',
//    'cancel_url' => 'http://example.com/cancel',
//]);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Goetze - Furniture Shop eCommerce HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

        <!-- CSS
        ============================================ -->

        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/venobox.css">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'main'])?> "><i class="fa fa-home"></i> Home</a></li>
                    <li><span>></span></li>
                    <li class="active"><i class="fa fa-shopping-cart"></i> Shopping Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->

        <!--Cart Main Area Start-->
        <div class="cart-main-area section-padding2">
            <div class="container">
                <?php if ($orderItems!=null and $orderItems['Orderitems'] !=null): ?>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="heading-title">Shopping Cart Summary</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-wishlist-table table-content table-responsive">
                            <table class="table-bordered mb-30">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($user !== null and $user->user_type_id == 2):?>
                                <?php
                                foreach ($orderItems['WholesaleOrderitems'] as $orderItem) :
                                /*foreach ($orderItems['WholesaleOrderitems'] as $key=>$orderItem) :*/ ?>
                                <tr>
                                    <td><a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'detail',$orderItem['product_id']])?>"><?= $orderItem['name']?></a></td>
                                    <td><?= $this->Number->currency($orderItem['price'])?></td>
                                    <td>
                                        <div class="cart-quantity product-quantity">
                                            <button class="dec qtybtn" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'minus', $orderItem['product_id'], $orderItem['quantity']]) ?>'">-</button>
                                            <input id="myInput" type="integer" value="<?= $orderItem['quantity']?>" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'edit', $orderItem['product_id'], $orderItem['quantity']]) ?>'">
                                            <button class="inc qtybtn" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'plus',  $orderItem['product_id'], $orderItem['quantity']]) ?>'">+</button>
                                        </div>
                                    </td>
                                    <!--<td>
                                        <?/*= $this->Form->create(NULL,['url' => ['controller' => 'products', 'action' => 'cartupdate']])*/?>
                                        <?php /*echo $this->Form->control('quantity-'.$key,['value'=>$orderItem['quantity'],'label'=>false,'type'=>'integer']); */?></td>-->
                                    <td><?=$this->Number->currency($orderItem['price']*$orderItem['quantity'])?></td>
                                    <td><?php echo $this->Html->link('<i class="fa fa-trash"></i>', [
                                            'controller' => 'products', 'action' => 'removeProduct', $orderItem['product_id']], [
                                            'class' => 'btn btn-secondary btn-sm', 'escape' => false]); ?>
                                    </td>
                                </tr>
                                </tbody>
                                <?php endforeach;
                                else:?>
                                <?php
                                    foreach ($orderItems['Orderitems'] as $orderItem) :
                                        //foreach ($orderItems['Orderitems'] as $key=>$orderItem) :?>
                                <tr>
                                        <td><a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'detail',$orderItem['product_id']])?>"><?= $orderItem['name']?></a></td>
                                        <td><?= $this->Number->currency($orderItem['price'])?></td>
                                        <td>
                                            <div class="cart-quantity product-quantity">
                                                <button class="dec qtybtn" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'minus', $orderItem['product_id'], $orderItem['quantity']]) ?>'">-</button>
                                                <input id="myInput" type="integer" value="<?= $orderItem['quantity']?>" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'edit', $orderItem['product_id'], $orderItem['quantity']]) ?>'">
                                                <button class="inc qtybtn" onClick="javascript:window.location.href='<?= $this->Url->build(['action'=>'changeQty', 'plus',  $orderItem['product_id'], $orderItem['quantity']]) ?>'">+</button>
                                            </div>
                                        </td>
                                    <!--<td><?/*= $this->Form->create(NULL,['url' => ['controller' => 'products', 'action' => 'cartupdate']])*/?>
                                        <?php /*echo $this->Form->control('quantity-'.$key,['value'=>$orderItem['quantity'],'label'=>false,'type'=>'integer']); */?></td>-->

                                    <td><?=$this->Number->currency($orderItem['price']*$orderItem['quantity'])?></td>
                                        <td><?php echo $this->Html->link('<i class="fa fa-trash"></i>', [
                                            'controller' => 'products', 'action' => 'removeProduct', $orderItem['product_id']], [
                                                'class' => 'btn btn-secondary btn-sm', 'escape' => false]); ?>
                                        </td>
                                    </tr>
                                </tbody>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </table>
                        </div>
                        <?php else : ?>
                            <p class="lhbigger">Your shopping cart is currently empty. </p>
                        <?php endif;?>
                    </div>
                </div>

                <div class="row mb-n30">
                    <div class="col-md-8 col-sm-7 col-xs-12 mb-30">
                        <div class="d-flex flex-wrap mb-n2 buttons-cart"
                             style="padding-right:15px;padding-left:15px;">
                            <!--                            <input type="submit" value="Update Cart" class="me-3 mb-2">-->
                            <a class="btn mb-2" href="<?= $this->Url->build(['controller' => 'products',
                                'action' => 'shop']); ?>">Continue Shopping</a>
                            <?php
/*                            echo $this->Form->submit('Update the cart', [
                                'type' => 'submit',
                                'id' => '',
                                'class' => 'btn mb-2',
                                'escape' => 'false'
                            ]); */?><!--
                            --><?php /*$this->Form->end();*/?>
                        </div>
<!--                        <div class="coupon mt-4">-->
<!--                            <h6>Coupon</h6>-->
<!--                            <p>Enter your coupon code if you have one.</p>-->
<!--                            <div class="row mb-n20">-->
<!--                                <div class="col-xl-4 col-lg-5 col-md-6 col-12 mb-20">-->
<!--                                    <input type="text" placeholder="Coupon code">-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-12 mb-20">-->
<!--                                    <input type="submit" value="Apply Coupon">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    <?php if ($orderItems!=null and $orderItems['Orderitems'] !=null): ?>
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-30 cart_totals">
                        <div class="cart-total-wrap">
                            <div class="table-responsive">
                                <table class="table table-borderless text-end mb-0">
                                    <tbody>
                                        <tr>
                                            <?php $subtotal = 0;
                                                if ($user !== null and $user->user_type_id == 2) {
                                                    foreach ($orderItems['WholesaleOrderitems'] as $orderItem) :
                                                        $subtotal = $subtotal + ($orderItem['price'] * $orderItem['quantity']);
                                                    endforeach;
                                                    }
                                                else{
                                                    foreach ($orderItems['Orderitems'] as $orderItem) :
                                                        $subtotal = $subtotal + ($orderItem['price']*$orderItem['quantity']);
                                                    endforeach;}
                                            ?>
<!--                                            <th>Subtotal</th>-->
<!--                                            <td><strong>--><!--</strong></td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <th>Shipping</th>-->
<!--                                            <td>-->
<!--                                                <ul>-->
<!--                                                    <li><label class="checkbox"><input type="radio" />Flat Rate: <strong>£7.00</strong></label></li>-->
<!--                                                    <li><label class="checkbox"><input type="radio" />Free Shipping</label></li>-->
<!--                                                </ul>-->
<!--                                            </td>-->
<!--                                        </tr>-->
                                        <tr class="order-total">
                                            <th>Cart Total</th>
                                            <td>
                                                <strong>
                                                    <span class="amount"><?= $this->Number->currency($subtotal) ?></span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--<tfoot>
                                        <tr>
                                            <td colspan="2" class="pb-0"><a class="btn" href="#">Proceed to Checkout</a></td>
                                        </tr>
                                    </tfoot>-->
                                </table>
                                <?php $subtotal = 0;
                                if ($orderItems != null) :
                                    {
                                        $urlLink = ['controller' => 'user_addresses', 'action' => 'checkout','prefix' => false];
                                    }
                                else :
                                    {
                                        $urlLink = ['controller' => 'Products', 'action' => 'cart','prefix' => false];
                                        }
                                endif;?>
                                    <a class="readmore" href="<?= $this->Url->build($urlLink)?> ">Proceed to Checkout</a>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Cart Main Area End-->


        <!-- back To Top Product-->
        <button id="scrollUp">
            <i class="fa fa-arrow-up"></i>
        </button>
        <!-- back To Top Product-->




        <!-- JS
        ============================================ -->

        <!-- Modernizer & jQuery JS -->
        <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Plugins JS -->
        <script src="assets/js/jquery-price-slider.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/venobox.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

        <!-- Stripe JS -->
        <script src="https://js.stripe.com/v3/"></script>

        <?= $this->Html->script('jquery-1.12.4.min.js') ?>
<script>
    (function ($) {
        "use strict";
        /*----------------------------
            Price Range
        ------------------------------ */
        /*$("#price-range").slider({
            range: true,
            min: 40,
            max: 600,
            values: [ 60, 570 ],
            slide: function( event, ui ) {
                $(".price-amount").text("Â£"+ui.values[0]+" - Â£"+ui.values[1]);
            }
        });
        $(".price-amount").text("Â£"+$("#price-range").slider("values", 0)+" - Â£"+$("#price-range").slider("values", 1));
*/
        /*----------------------------
            Input Plus Minus Button
        ------------------------------ */
        $(".qtybtn").on("click", function() {
            var $btn = $(this),
                $oldValue = $btn.parent().find("input").val();
            if ($btn.text() == "+") {
                var $newVal = parseFloat($oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if ($oldValue > 1) {
                    var $newVal = parseFloat($oldValue) - 1;
                } else {
                    $newVal = 1;
                }
            }
            $btn.parent().find("input").val($newVal);
        });


    })(jQuery);
</script>
        <?= $this->fetch('script') ?>
        <!--
    </body>
</html>
