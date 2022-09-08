<!-- Header Area Start -->
<div class="header-area">
    <?php $categories = $this->Common->getCategoryInfo(); ?>
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header-default pull-left social-icon">
                        <!--                        <p>Default Welcome Msg!</p>-->
                        <ul>
                            <li><a href="https://www.facebook.com/chelsea.furnitures/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/chelseafurniture_australia"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="header-top-right pull-right">
<!--                        <div class="currencies-block-top block-toggle pull-left">-->
<!--                            <div class="current">-->
<!--                                <span>GBP</span>-->
<!--                                <i class="fa fa-angle-down"></i>-->
<!--                            </div>-->
<!--                            <ul class="first-currencies toggle-content">-->
<!--                                <li><a href="#" title="Dollar (USD)">Dollar (USD)</a></li>-->
<!--                                <li><a href="#" title="Dollar (USD)">Pound (GBP)</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="languages-block-top block-toggle pull-left">-->
<!--                            <div class="current">-->
<!--                                <span>English</span>-->
<!--                                <i class="fa fa-angle-down"></i>-->
<!--                            </div>-->
<!--                            <ul class="first-languages  toggle-content">-->
<!--                                <li><a href="#" title="English">English</a></li>-->
<!--                                <li><a href="#" title="Arabic(Arabic)">Arabic(Arabic)</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="header-user-info pull-right">
                            <?php
//                            debug($_SERVER['REQUEST_URI']);
//                            exit;
                            $url_parts = parse_url($_SERVER['REQUEST_URI']);
                            $path_parts=explode('/', $url_parts['path']);
                            /*debug($path_parts[2]);
                            exit;*/
                            ?>
                            <?php if ($path_parts[2] == 'admin') : ?>
                                <a href=<?= $this->Url->build(['controller' => 'Products','action' => 'index']) ?>>
                                    <i class="fa fa-home"></i>
                                    Back to Dashboard
                                </a>
                            <?php endif; ?>
                            <a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','about']); ?>>
                                About Us
                            </a>
                            <a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','contact']); ?>>
                                Contact Us
                            </a>
                            <a href="wishlist.html" title="My wishlist">
                                <i class="fa fa-heart"></i>
                                My wishlist
                            </a>
                            <a href=<?= $this->Url->build(['prefix' => 'Admin','controller' => 'users', 'action' => 'login']); ?>>
                                <i class="fa fa-user"></i>
                                Log In
                            </a>
                            <a href=<?= $this->Url->build(['prefix' => 'Admin','controller' => 'users', 'action' => 'signUp']); ?>>
                                <i class="fa fa-unlock-alt"></i>
                                Sign up
                            </a>
                            <a href=<?= $this->Url->build(['prefix' => 'Admin','controller' => 'users', 'action' => 'logout']); ?>>
                            <i class="fa fa-share-square-o"></i>
                                Log out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-3 col-sm-6 col-xs-12">
                    <!-- Header Logo -->
                    <div class="header-logo logo-main-page">
                        <a href=<?= $this->Url->build(['controller' => 'Pages',
                            'action' => 'display','main']); ?> title="Chelsea Furniture">
                        <?= $this->Html->image(
                            'Logo-circle.png',
                            ['class' => 'img-responsive']
                        ); ?>
                        </a>
                    </div>
                </div>
                <!--Header Bottom Right Start-->
                <div class="col-lg-2 col-md-1  col-sm-6 col-xs-11 header-right-inner">
                    <div class="header-bottom-right pull-right">
                        <div class="header-bottom-right-inner">
                            <ul>
                                <li>
                                    <a class="cart-toggler search-icon to-search-icon" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <div class="header-bottom-search">
                                        <form class="search-box" action="#" method="POST">
                                            <div>
                                                <input type="text" value="" placeholder="Search" autocomplete="off">
                                                <button class="btn btn-search" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a class="cart-toggler mini-cart-icon" href="<?= $this->Url->build(['controller' => 'products',
                                        'action' => 'cart']); ?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>2</span>
                                    </a>
                                    <div class="cart-list">
                                        <div class="product">
                                            <div class="cart-single-product">
                                                <a class="product-image" href=<?= $this->Url->build(['controller' => 'products',
                                                    'action' => 'cart']); ?>
                                                    <?= $this->Html->image('cart-img/1.jpg'); ?>
                                                </a>
                                                <div class="product-details">
                                                    <a href="#" class="remove">
                                                        <i class="fa fa-times-circle"></i>
                                                    </a>
                                                    <div class="product-name">
                                                                <span class="quantity-formated">
                                                                    <span class="quantity">1</span>
                                                                    X
                                                                </span>
                                                        <a href="#" class="cart-block-product-name" title="Faded Short Sleeves T-shirt">Faded...</a>
                                                    </div>
                                                    <div class="product-atributes">
                                                        <a href="#" title="Product detail">S, Orange</a>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price">£ 16.84</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-single-product">
                                                <a class="product-image" href=<?= $this->Url->build(['controller' => 'Pages',
                                                    'action' => 'display','main']); ?>
                                                    <?= $this->Html->image('cart-img/2.jpg'); ?>
                                                </a>
                                                <div class="product-details">
                                                    <a href="#" class="remove">
                                                        <i class="fa fa-times-circle"></i>
                                                    </a>
                                                    <div class="product-name">
                                                                <span class="quantity-formated">
                                                                    <span class="quantity">2</span>
                                                                    X
                                                                </span>
                                                        <a href="#" class="cart-block-product-name" title="Faded Short Sleeves T-shirt">Printed Dr...</a>
                                                    </div>
                                                    <div class="product-atributes">
                                                        <a href="#" title="Product detail">S, Orange</a>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price">£ 64.23</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-prices">
                                            <div class="cart-prices-line first-line"></div>
                                            <div class="cart-prices-line last-line">
                                                <span>Total</span>
                                                <span class="price pull-right">£ 48.04</span>
                                            </div>
                                        </div>
                                        <p class="cart-buttons">
                                            <a class="btn btn-default button-small" href="#" title="Check out">
                                                        <span>
                                                            Check out
                                                            <i class="fa fa-angle-right"></i>
                                                        </span>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12">
                <div class="col-lg-11 col-md-7 col-sm-12 col-xs-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav>
                            <ul>
<!--                                <li><a href="--><!--<?//= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']); ?>--><!--">Home</a>-->
                                <li><a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'shop']); ?>">Shop</a>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'list', 1]); ?>">Styles</a>
                                    <!-- Mega Menu Four Column -->
                                    <div class="mega-menu two-column">
                                        <?php $categories = $categories->toArray();
                                        for ($x = 0; $x <= count($categories) - 1; $x++) :
                                            if ($categories[$x]->parent_id == 1) : ?>
                                                <?php $saved_id = $categories[$x]->id; ?>
                                        <span>
                                            <a class="mega-title" href=<?= $this->Url->build(['controller' => 'Categories',
                                                'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                                                                            <?php foreach ($categories as $subcategory) :
                                                                                                if ($subcategory->parent_id == $saved_id) :  ?>
                                                <a href=<?= $this->Url->build(['controller' => 'Categories',
                                                    'action' => 'list', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                                                                                <?php endif; ?>
                                                                                            <?php endforeach; ?>
                                        </span>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                </li>

                                <?php
                                for ($x = 0; $x <= count($categories) - 1; $x++) :
                                    if ($categories[$x]->id > 1 and $categories[$x]->parent_id == null) : ?>
                                                                            <?php $saved_id = $categories[$x]->id; ?>
                                <li class="expand"><a href=<?= $this->Url->build(['controller' => 'Categories',
                                        'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                                                            <?php foreach ($categories as $subcategory) :
                                                                                if ($subcategory->parent_id == $saved_id) :  ?>
                                        <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                'action' => 'list', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                        </li>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                    </ul>
                                </li>
                                    <?php endif; ?>
                                <?php endfor; ?>

<!--                                <li>-->
<!--                                    <a href=--><!--<?//= $this->Url->build(['controller'=>'Pages', 'action'=>'about']); ?>--><!--About Us</a>-->
<!--                                </li>-->
                            </ul>
                        </nav>
                    </div>
                    <!--Mian Menu End-->
                </div>
            </div>
        </div>
    </div>
    <!--Header Bottom End-->
</div>
<!-- Header Area End -->
<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','main']); ?>>Home</a></li>
                            <li><a href=<?= $this->Url->build(['controller' => 'Categories', 'action' => 'view', 1]); ?>>Styles</a>
                                <ul>
                                    <?php for ($x = 0; $x <= count($categories) - 1; $x++) :
                                        if ($categories[$x]->parent_id == 1) : ?>
                                            <?php $saved_id = $categories[$x]->id; ?>
                                    <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                            'action' => 'view', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                        <ul>
                                                                                    <?php foreach ($categories as $subcategory) :
                                                                                        if ($subcategory->parent_id == $saved_id) :  ?>
                                            <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                    'action' => 'view', $subcategory->id]); ?>><?= h($subcategory->description) ?></a></li>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>
                                        </ul>
                                    </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </ul>
                            </li>
                            <?php
                            for ($x = 0; $x <= count($categories) - 1; $x++) :
                                if ($categories[$x]->id > 1 and $categories[$x]->parent_id == null) : ?>
                                                                    <?php $saved_id = $categories[$x]->id; ?>
                                <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                        'action' => 'view', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                    <!-- DropDown Menu -->
                                    <ul>
                                                                        <?php foreach ($categories as $subcategory) :
                                                                            if ($subcategory->parent_id == $saved_id) :  ?>
                                            <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                    'action' => 'view', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                            </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <!--<li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','about']); ?>>About Us</a></li>
                            <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display','contact']); ?>>Contact Us</a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
