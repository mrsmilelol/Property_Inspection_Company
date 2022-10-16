<!-- Header Area Start -->
<div class="header-area">
    <?php $categories = $this->Common->getCategoryInfo(); ?>
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="header-default pull-left social-icon">
                        <!--                        <p>Default Welcome Msg!</p>-->
                        <ul>
                            <li><a href="https://www.facebook.com/chelsea.furnitures/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/chelseafurniture_australia"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/+61404737301"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="header-top-right pull-right">
                        <div class="header-user-info pull-right">
                            <?php $userType = $this->request->getSession()->read('Auth.user_type_id') ?>
                            <!-- Only displays back to dashboard button if user is an admin -->
                            <?php if ($userType == 1) : ?>
                                <a href=<?= $this->Url->build(['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'index']) ?>>
                                    <i class="fa fa-home"></i>
                                    Back to Dashboard
                                </a>
                            <?php endif; ?>
                            <!-- Only displays my account button if user is a customer -->
                            <?php if ($userType == 2) : ?>
                                <a href=<?= $this->Url->build(['prefix' => 'Wholesale', 'controller' => 'Users', 'action' => 'dashboard']) ?>>
                                    <i class="fa fa-home"></i>
                                    My Account
                                </a>
                            <?php endif; ?>
                            <?php if ($userType == 3) : ?>
                                <a href=<?= $this->Url->build(['prefix' => 'Customer', 'controller' => 'Users', 'action' => 'dashboard']) ?>>
                                    <i class="fa fa-home"></i>
                                    My Account
                                </a>
                            <?php endif; ?>
                            <?php if ($userType == 3 || $userType == null) : ?>
                                <a href=<?= $this->Url->build(['controller' => 'WholesaleRequests', 'action' => 'request']); ?>>
                                    Wholesale Application
                                </a>
                            <?php endif; ?>
                            <a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'about']); ?>>
                                About Us
                            </a>
                            <a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'contact']); ?>>
                                Contact Us
                            </a>
                            <?php if ($this->request->getSession()->read('Auth')) : ?>
                                <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'logout', 'prefix' => false]); ?>>
                                    <i class="fa fa-share-square-o"></i>
                                    Log out
                                </a>
                            <?php else : ?>
                                <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'login', 'prefix' => false]); ?>>
                                    <i class="fa fa-user"></i>
                                    Log In
                                </a>
                                <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'signUp', 'prefix' => false]); ?>>
                                    <i class="fa fa-unlock-alt"></i>
                                    Sign up
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="container headernone">
            <div class="row">
                <div class="col-lg-1 col-md-3 col-sm-6 col-xs-12">
                    <!-- Header Logo -->
                    <div class="header-logo logo-main-page" style="width: 150%; height: auto; max-width: 100px">
                        <a href=<?= $this->Url->build(['controller' => 'Pages',
                            'action' => 'display', 'main']); ?> title="Chelsea Furniture">
                        <?= $this->Html->image('Logo-circle.png', ['class' => 'img-fluid']); ?>
                        </a>
                    </div>
                </div>
                <!--Header Bottom Right Start-->
                <div class="col-lg-2 col-md-1  col-sm-6 col-xs-11 header-right-inner">
                    <div class="header-bottom-right pull-right">
                        <div class="header-bottom-right-inner">
                            <ul>
                                <li>
                                    <a class="cart-toggler mini-cart-icon"
                                       href="<?= $this->Url->build(['controller' => 'products',
                                           'action' => 'cart', 'prefix' => false]); ?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        <!--                                       <span>*</span>-->
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12">
                    <!-- Main Menu -->
                    <div class="mainmenu vertical-center">
                        <nav>
                            <ul>
                                <!--                                <li><a href="-->
                                <!--<? //= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']); ?>-->
                                <!--">Home</a>-->
                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'Products', 'action' => 'shop']); ?>">Shop</a>
                                </li>
                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'list', 1]); ?>">Styles</a>
                                    <!-- Mega Menu Four Column -->
                                    <div class="mega-menu two-column">
                                        <?php $categories = $categories->toArray();
                                        for ($x = 0; $x <= count($categories) - 1; $x++) :
                                            if ($categories[$x]->parent_id == 1) : ?>
                                                <?php $saved_id = $categories[$x]->id; ?>
                                                <span>
                                            <a class="mega-title"
                                               href=<?= $this->Url->build(['controller' => 'Categories',
                                                'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                                                                            <?php foreach ($categories as $subcategory) :
                                                                                                if ($subcategory->parent_id == $saved_id) : ?>
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
                                                    if ($subcategory->parent_id == $saved_id) : ?>
                                                        <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                                'action' => 'list', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>
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
<!-- Mobile Menu Start 1-->
<div class="mobile-menu-area">
    <div class="mobile-header-logo">
        <a href=<?= $this->Url->build(['controller' => 'Pages',
            'action' => 'display', 'main']); ?> title="Chelsea Furniture">
        <?= $this->Html->image('Logo-circle.png', ['class' => 'img-fluid']); ?>
        </a>
    </div>
    <a class="cart-toggler mini-cart-icon" href="<?= $this->Url->build(['controller' => 'products',
        'action' => 'cart', 'prefix' => false]); ?>">
        <i class="fa fa-shopping-cart"></i>
        <!--                                       <span>*</span>-->
    </a>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li>
                                <a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'main']); ?>>Home</a>
                            </li>
                            <li>
                                <a href=<?= $this->Url->build(['controller' => 'Categories', 'action' => 'list', 1]); ?>>Styles</a>
                                <ul>
                                    <?php for ($x = 0; $x <= count($categories) - 1; $x++) :
                                        if ($categories[$x]->parent_id == 1) : ?>
                                            <?php $saved_id = $categories[$x]->id; ?>
                                            <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                    'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                                <ul>
                                                    <?php foreach ($categories as $subcategory) :
                                                        if ($subcategory->parent_id == $saved_id) : ?>
                                                            <li>
                                                                <a href=<?= $this->Url->build(['controller' => 'Categories',
                                                                    'action' => 'list', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                                            </li>
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
                                            'action' => 'list', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                        <!-- DropDown Menu -->
                                        <ul>
                                            <?php foreach ($categories as $subcategory) :
                                                if ($subcategory->parent_id == $saved_id) : ?>
                                                    <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                            'action' => 'list', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <!--<li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'about']); ?>>About Us</a></li>
                            <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'contact']); ?>>Contact Us</a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
<style>
    @media (max-width: 767px) {
        .headernone {
            display: none;
        }

        .mobile-header-logo {
            width: 30px;
            height: 30px;
            position: absolute;
            left: 4%;
            top: 11px;
        }

        .cart-toggler {
            position: absolute;
            right: 2%;
            top: 10px;
        }
    }

</style>
