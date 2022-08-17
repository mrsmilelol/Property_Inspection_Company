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
<!--                <div class="col-lg-9 col-md-9 col-sm-12">-->
<!--                    <div class="header-top-right pull-right">-->
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
<!--                        <div class="header-user-info pull-right">-->
<!--                            <a href="my-account.html" title="My account">-->
<!--                                <i class="fa fa-user"></i>-->
<!--                                My account-->
<!--                            </a>-->
<!--                            <a href="wishlist.html" title="My wishlist">-->
<!--                                <i class="fa fa-heart"></i>-->
<!--                                My wishlist-->
<!--                            </a>-->
<!--                            <a href="#" title="My wishlist">-->
<!--                                <i class="fa fa-unlock-alt"></i>-->
<!--                                Sign in-->
<!--                            </a>-->
<!--                            <a href="#" title="My wishlist">-->
<!--                                <i class="fa fa-share-square-o"></i>-->
<!--                                Check out-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <!-- Header Logo -->
                    <div class="header-logo logo-main-page pull-left">
                        <a href=<?= $this->Url->build(['controller'=>'Pages',
                            'action'=>'display','main']); ?> title="Chelsea Furniture">
                        <?= $this->Html->image('chelsea-furniture-logo-smaller.png',
                            ['class' =>'img-responsive']); ?>
                        </a>
                    </div>
                </div>
                <!--Header Bottom Right Start-->
                <div class="col-lg-2 col-md-2  col-sm-6 col-xs-12 header-right-inner">
                    <div class="header-bottom-right">
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
                                    <a class="cart-toggler mini-cart-icon" href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>2</span>
                                    </a>
                                    <div class="cart-list">
                                        <div class="product">
                                            <div class="cart-single-product">
                                                <a class="product-image" href=<?= $this->Url->build(['controller'=>'Pages',
                                                    'action'=>'display','main']); ?>>
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
                                                <a class="product-image" href=<?= $this->Url->build(['controller'=>'Pages',
                                                    'action'=>'display','main']); ?>>
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
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']); ?>">Home</a>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Styles</a>
                                    <!-- Mega Menu Four Column -->
                                    <div class="mega-menu">
                                        <?php $categories = $categories->toArray();
                                        for($x = 0; $x <= count($categories)-1; $x++): if ($categories[$x]->parent_id == 1): ?>
                                        <?php $saved_id = $categories[$x]->id; ?>
                                        <span>
                                            <a class="mega-title" href=<?= $this->Url->build(['controller'=>'Categories',
                                                'action'=> 'view', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                                <?php foreach ($categories as $subcategory): if ($subcategory->parent_id == $saved_id):  ?>
                                                <a href=<?= $this->Url->build(['controller' => 'Categories',
                                                    'action' => 'view', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                        </span>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                    </div>
                                </li>

                                <li><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Livingroom</a>
                                    <!-- Mege Menu Two Column -->
                                    <div class="mega-menu two-column">
												<span>
													<a class="mega-title" href="#">Categories 01</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                        <span>
													<a class="mega-title" href="#">Categories 02</a>
													<a href="shop.html">Washing machine 1</a>
													<a href="shop.html">Washing machine 2</a>
													<a href="shop.html">Washing machine 3</a>
													<a href="shop.html">Washing machine 4</a>
												</span>
                                    </div>
                                </li>
                                <li class="expand"><a href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','shop']); ?>">Lighting</a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                        <li class="sub-menu-title"><a href="#">Categories 01</a></li>
                                        <li><a href="shop.html">Washing machine 1</a></li>
                                        <li><a href="shop.html">Washing machine 2</a></li>
                                        <li><a href="shop.html">Washing machine 3</a></li>
                                        <li><a href="shop.html">Washing machine 4</a></li>
                                    </ul>
                                </li>
                                <?php
                                for($x = 0; $x <= count($categories)-1; $x++): if ($categories[$x]->id > 1 and $categories[$x]->parent_id == null): ?>
                                    <?php $saved_id = $categories[$x]->id; ?>
                                <li class="expand"><a href=<?= $this->Url->build(['controller'=>'Categories',
                                        'action'=> 'view', $categories[$x]->id]); ?>><?= h($categories[$x]->description) ?></a>
                                    <!-- DropDown Menu -->
                                    <ul class="restrain sub-menu">
                                        <?php foreach ($categories as $subcategory): if ($subcategory->parent_id == $saved_id):  ?>
                                        <li><a href=<?= $this->Url->build(['controller' => 'Categories',
                                                'action' => 'view', $subcategory->id]); ?>><?= h($subcategory->description) ?></a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <?php endfor; ?>

                                <li>
                                    <a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'about']); ?>>About Us</a>
                                </li>
                                <li><a href=<?= $this->Url->build(['controller'=>'Pages', 'action'=>'contact']); ?>>Contact Us</a></li>
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
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="index-3.html">Home Version 3</a></li>
                                    <li><a href="index-4.html">Home Version 4</a></li>
                                    <li><a href="index-5.html">Home Version 5</a></li>
                                    <li><a href="index-6.html">Home Version 6</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Bedroom</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Livingroom</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Washing machine 1</a></li>
                                            <li><a href="shop.html">Washing machine 2</a></li>
                                            <li><a href="shop.html">Washing machine 3</a></li>
                                            <li><a href="shop.html">Washing machine 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="account.html">Account</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="product-simple.html">Product Details</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Lighting</a>
                                <ul>
                                    <li><a href="shop.html">Washing machine 1</a></li>
                                    <li><a href="shop.html">Washing machine 2</a></li>
                                    <li><a href="shop.html">Washing machine 3</a></li>
                                    <li><a href="shop.html">Washing machine 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->

<!--<div class="header">-->
<!--			<nav class="navbar container">-->
<!---->
<!--			  <div class="navbar-header">-->
<!--				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--				  <span class="sr-only">Toggle navigation</span>-->
<!--				  <span class="icon-bar"></span>-->
<!--				  <span class="icon-bar"></span>-->
<!--				  <span class="icon-bar"></span>-->
<!--				</button>-->
<!--					--><?//= $this->Html->link($this->Html->image('logo.png', ['alt' => 'Sapphire']) . ' eCommerce', ['controller' => 'Products', 'action' => 'index'], ['class' => 'navbar-brand', 'escapeTitle' => false]) ?>
<!--				</a>-->
<!--			  </div>-->
<!---->
<!---->
<!--                 <div class="navbar-collapse collapse navbar-right">-->
<!--					<ul class="nav navbar-nav">-->
<!--					  <li>--><?//= $this->Html->link('Home', ['controller' => 'Products', 'action' => 'index']) ?><!--</li>-->
<!--					  <li>--><?//= $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'about_us']) ?><!--</li>-->
<!--					  <li>--><?//= $this->Html->link('Contact Us', ['controller' => 'Pages', 'action' => 'contact_us']) ?><!--</li>-->
<!--                    </ul>-->
<!---->
<!--			        --><?php //if(isset($authUser['id']) && !empty($authUser['id'])): ?>
<!---->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span-->
<!--                    class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li>--><?php //echo $this->Html->link(__('<i class="glyphicon glyphicon-user"></i> Profile'), array('controller' => 'users', 'action' => 'profile', $authUser['id']), array('escapeTitle' => false)); ?><!--</li>-->
<!--                        <li>--><?php //echo $this->Html->link(__('<i class="glyphicon glyphicon-cog"></i> Change Password'), array('controller' => 'users', 'action' => 'change_password', $authUser['id']), array('escapeTitle' => false)); ?><!--</li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li>--><?php //echo $this->Html->link(__('<i class="glyphicon glyphicon-off"></i> Logout'), array('controller' => 'users', 'action' => 'logout'), array('escapeTitle' => false)) ?><!--</li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!---->
<!--                    <ul class="nav navbar-right cart">-->
<!--                      <li class="dropdown">-->
<!--                      	--><?php //$carts = $this->Common->getCartInfoByUserId($authUser['id']); ?>
<!--                      	--><?php //if( (isset($carts)) && (!empty($carts)) ): ?>
<!--                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown"><span>--><?//= $carts->count() ?><!--</span></a>-->
<!---->
<!--					<div class="cart-info dropdown-menu">-->
<!--						<table class="table">-->
<!--							<thead>-->
<!--							</thead>-->
<!--							<tbody>-->
<!--								--><?php //foreach($carts as $cart): ?>
<!--								<tr>-->
<!--									<td class="image">--><?//= $this->Html->image('../'.$cart['product']['thumb'], ['alt' => $cart['product']['name'], 'class' => 'img-responsive']) ?><!--</td>-->
<!--									<td class="name">--><?//= $this->Html->link($cart['product']['name'], '/project.html') ?><!--</td>-->
<!--									<td class="quantity">x&nbsp;--><?//= $cart['quantity'] ?><!--</td>-->
<!--									<td class="total">$--><?//= $cart['price'] ?><!--</td>-->
<!--									<td class="remove">--><?//= $this->Html->image('../'.$cart['product']['thumb'], ['alt' => $cart['product']['name'], 'title' => $cart['product']['name']]) ?><!--</td>-->
<!--								</tr>-->
<!--								--><?php //endforeach; ?>
<!--							</tbody>-->
<!--						</table>-->
<!--						<div class="cart-total">-->
<!--						  <table>-->
<!--							 <tbody>-->
<!--								<tr>-->
<!--								  <td><b>Sub-Total:</b></td>-->
<!--								  <td>$400.00</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--								  <td><b>Total:</b></td>-->
<!--								  <td>$400.00</td>-->
<!--								</tr>-->
<!--							</tbody>-->
<!--						  </table>-->
<!--						  <div class="checkout">-->
<!--						  	--><?//= $this->Html->link('View Cart', ['controller' => 'Carts', 'action' => 'index'], ['class' => 'ajax_right']) ?>
<!--						  	<!-- <a href="cart.html" class="ajax_right">View Cart</a>  -->-->
<!--						  	| <a href="checkout.html" class="ajax_right">Checkout</a>-->
<!--						  </div>-->
<!--						</div>-->
<!--					</div>-->
<!--					--><?php //endif; ?>
<!--			      </li>-->
<!--			     </ul>-->
<!---->
<!--                 --><?php //else: ?>
<!--               <ul class="nav navbar-nav">-->
<!--                  <li>--><?//= $this->Html->link('Sign Up', ['controller' => 'Users', 'action' => 'account']) ?><!--</li>-->
<!--                  <li class="dropdown">-->
<!--                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>-->
<!--                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">-->
<!--                        <li>-->
<!--                           <div class="row">-->
<!--                              <div class="col-md-12">-->
<!--                              	--><?php
//                              		echo $this->Form->create('User', ['url' => ['controller' => 'Users', 'action' => 'login']]);
//									echo $this->Form->input('email', ['label' => false, 'placeholder' => 'Email address']);
//									echo $this->Form->input('password', ['label' => false, 'placeholder' => 'Password']);
//									echo $this->Form->input('remember_me', ['type' => 'checkbox']) ;
//								    echo $this->Form->submit('Sign In', ['class' => 'btn btn-success btn-block']) ;
//								    echo $this->Form->end() ;
//                              	?>
<!--                              </div>-->
<!--                           </div>-->
<!--                        </li>-->
<!--                        <li class="text-center">or</li>-->
<!--                        <br />-->
<!--                        <li>-->
<!--                           <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">-->
<!--                           <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">-->
<!--                        </li>-->
<!--                     </ul>-->
<!--                  </li>-->
<!--               </ul>-->
<!--                 --><?php //endif; ?>
<!---->
<!--                    <form action="#" class="navbar-form navbar-search navbar-right" role="search">-->
<!--		      		  <div class="input-group">-->
<!--                        <input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button>-->
<!--                      </div>-->
<!--                    </form>-->
<!---->
<!--                  </div><!-- /.navbar-collapse -->-->
<!--			</nav>-->
<!--		</div>-->
