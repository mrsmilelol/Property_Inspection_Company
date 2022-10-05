<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}> {{value}}</textarea>'
];
$this->Form->setTemplates($formTemplate);

$this->layout = 'front';
?>

<?php $user = $this->request->getSession()->read('Auth') ?>
<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container-dashboard">
        <div class="row-dashboard mb-n30">

            <!-- My Account Tab Menu Start -->
            <div class="col-12 mb-30" style="flex: 0 0 auto; width: 25%;">
                <div class="myaccount-tab-menu nav-dashboard" role="tablist" id="allTabs">
                    <a href="#dashboard" class="aTab active" data-toggle="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <a href="#orders" class="aTab" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                    <a href="#payment-method" class="aTab" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a>
                    <a href="#address-edit" class="aTab" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                    <a href="#account-info" class="aTab" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="mb-30" style="flex: 0 0 auto; width: 75%;">
                <div class="tab-content" id="myaccountContent">

                    <!-- Single Tab Content Start -->
                    <!-- Dashboard -->
                    <div class="tab-pane fade active in" id="dashboard" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Dashboard</h5>
                            <div class="welcome">
                                <p class="lhbigger">Hello, <strong><?= h($user->firstname) . " " . h($user->lastname) ?> </strong> <!--(If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)--></p>
                            </div>
                            <p class="lhbigger mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Orders -->
                    <div class="tab-pane fade active" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Orders</h5>
                            <div class="myaccount-table table-responsive" style="text-align: center!important;">
                                <table class="table-myaccount table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Date</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Total</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Moisturizing Oil</td>
                                        <td>Aug 22, 2018</td>
                                        <td>Pending</td>
                                        <td>$45</td>
                                        <td><a href="cart.html" class="btn btn-round orders-btn-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Katopeno Altuni</td>
                                        <td>July 22, 2018</td>
                                        <td>Approved</td>
                                        <td>$100</td>
                                        <td><a href="cart.html" class="btn btn-round orders-btn-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Murikhete Paris</td>
                                        <td>June 12, 2017</td>
                                        <td>On Hold</td>
                                        <td>$99</td>
                                        <td><a href="cart.html" class="btn btn-round orders-btn-view">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Payment Method -->
                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Payment Method</h5>
                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Address -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Billing Address</h5>
                            <address>
                                <p><strong><?= h($user->firstname) . " " . h($user->lastname) ?></strong></p>
                                <p class="lhbigger"><?= h($user->user_addresses)?> <br>
                                    <!--San Francisco, CA 94103--></p>
                                <p class="lhbigger">Mobile: <?= h($user->phone)?></p>
                            </address>
                            <a href="#" class="btn btn-round d-inline-block address-btn-edit">
                                <i class="fa fa-edit"></i>Edit Address
                            </a>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Account Details -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Account Details</h5>
                            <div class="account-details-form">
                                <form action="#">
                                    <p class="form-row">
                                        <?= $this->Form->create($user) ?>
                                        <fieldset>
                                        <?php
                                        echo $this->Form->control('firstname', ['label' => ['class' => 'required', 'text' =>'First name']]);
                                        echo $this->Form->control('lastname', ['label' => ['class' => 'required', 'text' =>'Last name']]);
                                        echo $this->Form->control('username', ['label' => ['class' => 'required']]);
                                        echo $this->Form->control('phone', ['label' => ['class' => 'required']]);
                                        echo $this->Form->control('email', ['label' => ['class' => 'required']]);
                                        echo $this->Form->control('password', ['label' => ['class' => 'required']]);
                                        //echo $this->Form->control('created_at');
                                        //echo $this->Form->control('modified_at');
                                        ?>
                                        </fieldset>
                                        <br>
                                        <!--<div class="col-lg-6 col-12 mb-30">
                                            <input id="first-name" placeholder="First Name" type="text">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="last-name" placeholder="Last Name" type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="display-name" placeholder="Display Name" type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input id="email" placeholder="Email Address" type="email">
                                        </div>

                                        <div class="col-12 mb-30"><h6 class="mb-0">Password change</h6></div>

                                        <div class="col-12 mb-30">
                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="new-pwd" placeholder="New Password" type="password">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                        </div>-->

                                        <!--<div class="col-12">
                                            <button class="btn btn-round btn-lg">Save Changes</button>
                                        </div>-->

                                    <p class="submit">
                                        <!--<button type="submit" id="submitlogin" name="SubmitLogin" class="">
                                            <span><i class="fa fa-lock"></i>Sign In</span>
                                        </button>-->
                                        <?= $this->Form->button(__('Save changes'), [
                                            'type' => 'submit',
                                            'id' => 'submitlogin',
                                            'name' => 'SubmitLogin',
                                            'class' => ''
                                        ]) ?>
                                    </p>
                                    <?= $this->Form->end() ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                </div>
            </div>
            <!-- My Account Tab Content End -->

        </div>
    </div>
</div>
<!-- Account Area End -->

<script>
    // Get the container element
    var btnContainer = document.getElementById("allTabs");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("aTab");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
