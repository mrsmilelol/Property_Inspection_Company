<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var string[]|\Cake\Collection\CollectionInterface $orderItems
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}<span class="help">{{help}}</span></div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    'button' => '<button class="order-button-payment"{{attrs}}>{{text}}</button>',
];
$this->Form->setTemplates($formTemplate);
$this->layout = 'front';

//require_once 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51LkgUlGRmWCorjcXA038yfpvxDxs4RGCgZjVodGkU4lVz37N5Uo94ig9MZg2YCCGDZSwaT0vSUmFpUYjNFnI9qOi00eWvmMRNg');
//aaa
$orderCheckout = [];
foreach ($orderItems['Orderitems'] as $orderItem){
    array_push($orderCheckout, ['price_data' => [
        'currency' => 'aud',
        'product_data' => [
            'name' => $orderItem['name'],
        ],
        'unit_amount' => intval($orderItem['price']*100),
    ],
        'quantity' => 1]);
}
$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [$orderCheckout],
    'mode' => 'payment',
    'success_url' => 'http://localhost/team09-app_fit3048/user-addresses/success',
    'cancel_url' => 'http://example.com/cancel',
]);
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || Goetze</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,700,300,600' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Stroke 7 Icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- bxslider CSS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <!-- Venobox CSS
    ============================================ -->
    <link rel="stylesheet" href="css/venobox.css" media="screen" />
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- Header Area End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-single">
                    <ul class="breadcrumbs">
                        <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'main'])?> "><i class="fa fa-home"></i>Home</a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'cart'])?> "><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
                            <span>></span>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Check Out Area start -->
<div class="check-out-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="coupon-area">
                <div class="col-md-12">
                    <h1 class="heading-title">Procced to Checkout </h1>
                </div>
                <div class="col-md-12">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="form-row">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row">
                                        <label>Password  <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p><input type="submit" value="Login" />
                                        <label class="checbox-info">
                                            <input type="checkbox" />
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-pass"><a href="#">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="checkbox-form">
                    <h3 class="checkbox-title">Billing Details</h3>
                    <div class="row">
                        <?= $this->Form->create($userAddress) ?>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'label' => ['class' => 'required']]);?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('country', ['label' => ['class' => 'required']]); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('address_line_1', ['placeholder' => 'Street address','label' => ['class' => 'required', 'text' => 'Address line 1' ]]); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('address_line_2', ['placeholder' => 'Apartment, suite, unit etc.','label' => 'Address line 2']);?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('city', ['placeholder' => 'Town / City','label' => ['class' => 'required']]); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('state', ['placeholder' => 'VIC / NSW','label' => ['class' => 'required']]);?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-row">
                                <?php echo $this->Form->control('postcode', ['placeholder' => 'Postcode / Zip','label' => ['class' => 'required']]);?>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <label class="checbox-info">
                                <input id="cbox" type="checkbox">
                                Don't have an account?
                            </label>
                            <div id="cbox_info">
                                <p>Follow the link to Sign up </p>
                                <p class="form-row">
                                    <label>Phone<span class="required">*</span></label>
                                    <input type="text" placeholder="Phone"/>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="your-order">
                    <h3 class="checkbox-title">Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="c-product-name">Product</th>
                                <th class="c-product-total">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart_item">
                                <td class="c-product-name">
                                    Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                </td>
                                <td class="c-product-total">
                                    <span class="amount">£165.00</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="c-product-name">
                                    Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                </td>
                                <td class="c-product-total">
                                    <span class="amount">£50.00</span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="cart-subtotal">
                                <th>Cart Subtotal</th>
                                <td><span class="amount">£215.00</span></td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping</th>
                                <td>
                                    <ul>
                                        <li>
                                            <input type="radio" />
                                            <label>
                                                Flat Rate: <span class="amount">£7.00</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" />
                                            <label>Free Shipping:</label>
                                        </li>
                                        <li></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Order Total</th>
                                <td><strong><span class="amount">£215.00</span></strong>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <!-- ACCORDION START -->
                            <h3>Direct Bank Transfer</h3>
                            <div class="payment-content">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>Cheque Payment</h3>
                            <div class="payment-content">
                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>PayPal <img src="img/payment.png" alt="" /></h3>
                            <div class="payment-content">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                        <div class="order-button-payment">
                            <input type="submit" value="Place order" />
                            <?= $this->Form->button(__('Submit'), ['class' => 'order-button-payment','id'=>'checkout-button']) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Check Out Area End -->
<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- jquery Venobox js
============================================ -->
<script src="js/venobox.js"></script>
<!-- jquery bxslider js
============================================ -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- countdown JS
============================================ -->
<script src="js/jquery.countdown.min.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- Nivo slider js
============================================ -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('pk_test_51LkgUlGRmWCorjcXsDFRkKYqWTuPWk8mGeKtr6398t7o55wnltXdYpUjAqaDzSfHb426KyXxxCtfC2wWi6tV7IB700R4ElytR1');
    const btn = document.getElementById("checkout-button")
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
            sessionId: "<?php echo $session->id; ?>"
        });
    });
</script>
</body>
</html>
