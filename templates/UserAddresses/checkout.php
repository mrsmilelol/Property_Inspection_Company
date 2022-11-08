<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var string[]|\Cake\Collection\CollectionInterface $orderItems
 * @var string[]|\Cake\Collection\CollectionInterface $userID
 * @var string[]|\Cake\Collection\CollectionInterface $user
 * @var string[]|\Cake\Collection\CollectionInterface $check
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
$individual_user = $this->request->getSession()->read('Auth');
$userType = $this->request->getSession()->read('Auth.user_type_id');

$successURL = 'https://' . $_SERVER['SERVER_NAME'] . '/team09-app_fit3048/user-addresses/success/{CHECKOUT_SESSION_ID}';
$cancelURL = 'https://' . $_SERVER['SERVER_NAME'] . '/team09-app_fit3048/user-addresses/cancel';
//require_once 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51LkgUlGRmWCorjcXA038yfpvxDxs4RGCgZjVodGkU4lVz37N5Uo94ig9MZg2YCCGDZSwaT0vSUmFpUYjNFnI9qOi00eWvmMRNg');
//aaa
$orderCheckout = [];
if ($user->user_type_id == 2) {
    foreach ($orderItems['WholesaleOrderitems'] as $orderItem) {
        array_push($orderCheckout, ['price_data' => [
            'currency' => 'aud',
            'product_data' => [
                'name' => $orderItem['name'],
            ],
            'unit_amount' => intval($orderItem['price'] * 100),
        ],
            'quantity' => $orderItem['quantity']]);
    }
} else {
    foreach ($orderItems['Orderitems'] as $orderItem) {
        array_push($orderCheckout, ['price_data' => [
            'currency' => 'aud',
            'product_data' => [
                'name' => $orderItem['name'],
            ],
            'unit_amount' => intval($orderItem['price'] * 100),
        ],
            'quantity' => $orderItem['quantity']]);
    }
}

if ($orderCheckout != []) {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [$orderCheckout],
        'mode' => 'payment',
        'success_url' => $successURL,
        'cancel_url' => $cancelURL,
    ]);
    $this->request->getSession()->write('pay_session', $session);
} else {
    $this->Url->build(['controller' => 'Products', 'action' => 'cart']);
}
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
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css"/>
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen"/>
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
    <link rel="stylesheet" href="css/venobox.css" media="screen"/>
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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
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
                        <li><a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'main']) ?> "><i
                                    class="fa fa-home"></i>Home</a></li>
                        <li>
                            <span>></span>
                        </li>
                        <li><a href="<?= $this->Url->build(['controller' => 'products', 'action' => 'cart']) ?> "><i
                                    class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
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
                <!--<div class="col-md-12">
                    <h1 class="heading-title">Procced to Checkout </h1>
                </div>-->
                <div class="col-md-12">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <!--                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>-->
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="form-row">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text"/>
                                    </p>
                                    <p class="form-row">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text"/>
                                    </p>
                                    <p><input type="submit" value="Login"/>
                                        <label class="checbox-info">
                                            <input type="checkbox"/>
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
                        <?php if (!empty($addresses)) : ?>
                            <?php foreach ($addresses as $address) : ?>
                                <?= $this->Form->create($userAddress) ?>
                                <?php echo $this->Form->hidden('user_id', ['value' => $userID->id, 'type' => 'text']); ?>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php
                                        echo $this->Form->control('country', ['placeholder' => 'Australia', 'value' => 'Australia', 'label' => ['class' => 'required'], 'readonly'=>'readonly']);
                                        ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php echo $this->Form->control('address_line_1', ['placeholder' => 'Street address',
                                            'label' => ['class' => 'required', 'text' => 'Address line 1'],
                                            'readonly'=>'readonly', 'value' => $address->address_line_1]); ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php echo $this->Form->control('address_line_2', ['placeholder' => 'Apartment, suite, unit etc.',
                                            'label' => 'Address line 2', 'readonly'=>'readonly', 'value' => $address->address_line_2]); ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php echo $this->Form->control('city', ['placeholder' => 'Town / City',
                                            'label' => ['class' => 'required'], 'readonly'=>'readonly', 'value' => $address->city]); ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php
                                        $states = ['1' => 'VIC', '2' => 'NSW', '3' => 'SA', '4' => 'WA', '5' => 'NT', '6' => 'QLD', '7' => 'TAS'];
                                        if ($check == 1) {
                                            for ($i = 1; $i < sizeof($states) + 1; $i++) {
                                                if ($states[$i] == $userAddress->state) {
                                                    echo $this->Form->control('state', ['options' => $states, 'label' => 'Select your state', 'value' => strval($i), 'readonly'=>'readonly']);
                                                }
                                            }
                                        } else {
                                            echo $this->Form->control('state', ['options' => $states, 'label' => 'Select your state', 'readonly'=>'readonly']);
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="form-row">
                                        <?php echo $this->Form->control('postcode', ['placeholder' => 'Postcode / Zip', 'label' => ['class' => 'required'], 'readonly'=>'readonly']); ?>
                                    </p>
                                </div>
                                <?php if ($userType == 2) : ?>
                                <a href="<?= $this->Url->build(['prefix' => 'Wholesale', 'controller' => 'UserAddresses', 'action' => 'edit', $address->id]) ?>"
                                   class="btn btn-round d-inline-block address-btn-edit">
                                    <i class="fa fa-edit"></i> Edit address </a>
                                <?php else : ?>
                                    <a href="<?= $this->Url->build(['prefix' => 'Customer', 'controller' => 'UserAddresses', 'action' => 'edit', $address->id]) ?>"
                                       class="btn btn-round d-inline-block address-btn-edit">
                                        <i class="fa fa-edit"></i> Edit address </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p class="lhbigger">You currently have no saved address. </p>
                            <?php if ($userType == 2) : ?>
                            <a href="<?= $this->Url->build(['prefix' => 'Wholesale', 'controller' => 'UserAddresses', 'action' => 'add', $individual_user->id]) ?>"
                               class="btn btn-round d-inline-block address-btn-edit">
                                <i class="fa fa-edit"></i> Add address </a>
                            <?php else : ?>
                            <a href="<?= $this->Url->build(['prefix' => 'Customer', 'controller' => 'UserAddresses', 'action' => 'add', $individual_user->id]) ?>"
                               class="btn btn-round d-inline-block address-btn-edit">
                                <i class="fa fa-edit"></i> Add address </a>
                            <?php endif; ?>
                            </address>
                        <?php endif; ?>
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
                                <th class="c-product-quantity">Quantity</th>
                                <th class="c-product-total">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($user->user_type_id == 2) :
                                if ($orderItems != null) :
                                    foreach ($orderItems['WholesaleOrderitems'] as $orderItem) : ?>
                            <tr class="cart_item">
                                <td class="c-product-name"><a
                                        href="<?= $this->Url->build(['controller' => 'products', 'action' => 'detail', $orderItem['product_id']]) ?>"><?= $orderItem['name'] ?></a>
                                </td>
                                <td class="c-product-quantity"><?= $orderItem['quantity'] ?></td>
                                <td class="c-product-total"><?= $this->Number->currency($orderItem['price']) ?></td>
                            </tr>
                            </tbody>
                                    <?php endforeach;
                                endif;
                            else :
                                if ($orderItems != null) :
                                    foreach ($orderItems['Orderitems'] as $orderItem) : ?>
                                        <tr class="cart_item">
                                            <td class="c-product-name"><a
                                                    href="<?= $this->Url->build(['controller' => 'products', 'action' => 'detail', $orderItem['product_id']]) ?>"><?= $orderItem['name'] ?></a>
                                            </td>
                                            <td class="c-product-quantity"><?= $orderItem['quantity'] ?></td>
                                            <td class="c-product-total"><?= $this->Number->currency($orderItem['price']) ?></td>
                                        </tr>
                                        </tbody>
                                    <?php endforeach;
                                endif;
                            endif; ?>
                            <tfoot>
                            <tr class="order-total">
                                <?php $subtotal = 0;
                                if ($user->user_type_id == 2) :
                                    if ($orderItems != null) :
                                        foreach ($orderItems['WholesaleOrderitems'] as $orderItem) :
                                            $subtotal = $subtotal + $orderItem['price'] * $orderItem['quantity'];
                                        endforeach;
                                    endif;
                                else :
                                    if ($orderItems != null) :
                                        foreach ($orderItems['Orderitems'] as $orderItem) :
                                            $subtotal = $subtotal + $orderItem['price'] * $orderItem['quantity'];
                                        endforeach;
                                    endif;
                                endif; ?>
                                <th>Order Total</th>
                                <td><strong><span class="amount"></span></strong></td>
                                <td><strong><span
                                            class="amount"><?= $this->Number->currency($subtotal) ?></span></strong>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="order-button-payment">
                            <?php echo $this->Form->submit('Place order', [
                                'type' => 'submit',
                                'id' => 'checkout-button-main',
                                'class' => 'order-button-payment',
                                'escape' => 'false',
                                'onclick'=> 'submitForm();',
                            ]); ?>
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
    const btn = document.getElementById("checkout-button-main")
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        stripe.redirectToCheckout({
            sessionId: "<?php echo $session->id; ?>"
        });
    });
</script>


    </body>
</html>
