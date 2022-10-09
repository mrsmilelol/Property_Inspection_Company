<?php
/**
 * @var \App\View\AppView $this
 * * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);

$this->layout = 'front';
?>

<?php
$the_user = $this->request->getSession()->read('Auth');
?>

<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container-dashboard">
        <div class="row-dashboard mb-n30">

            <!-- My Account Tab Menu Start -->
            <div class="col-12 mb-30" style="flex: 0 0 auto; width: 25%;">
                <div class="myaccount-tab-menu nav-dashboard" role="tablist" id="allTabs">
                    <a href="#dashboard" class="aTab active" data-toggle="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <a href="#orders" class="aTab" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                    <!--<a href="#payment-method" class="aTab" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a>-->
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
                                <p class="lhbigger">Hello, <strong><?= h($the_user->firstname) . " " . h($the_user->lastname) ?> </strong> <!--(If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)--></p>
                            </div>
                            <br>
                            <p class="lhbigger mb-0">From your account dashboard, you can easily check &amp; view your recent orders, manage your address and edit your account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Orders -->
                    <div class="tab-pane fade active" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Orders</h5>
                            <div class="myaccount-table table-responsive">
                                <?php if (!empty($orders)) : ?>
                                <table class="table-myaccount table-bordered">
                                    <thead>
                                    <tr>
                                        <th><?= __('ID') ?></th>
                                        <th><?= __('Total') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Order date') ?></th>
                                        <th><?= __('Actions') ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($orders as $order) :?>
                                        <tr>
                                            <td><?= $this->Number->format($order->id) ?></td>
                                            <td><?= $this->Number->format($order->total) ?></td>
                                            <td><?= h($order->status) ?></td>
                                            <td><?= h($order->created_at) ?></td>
                                            <td>
                                                <!--<a href="<?= $this->Url->build(['controller' => 'Orders', 'action' => 'view', $order->id]) ?>" class="btn btn-round orders-btn-view">View</a>-->
                                                <a href="<?= $this->Url->build(['controller' => 'CancelledOrders', 'action' => 'cancel', $order->id]) ?>" class="btn btn-round orders-btn-view">Cancel</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                        <p class="lhbigger">You currently have no orders. </p>
                                        <a href="<?= $this->Url->build(['controller' => 'UserAddresses', 'action' => 'add', $the_user->id]) ?>" class="btn btn-round d-inline-block address-btn-edit">
                                            <i class="fa fa-edit"></i> Add address </a>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Payment Method -->
                    <!--<div class="tab-pane fade" id="payment-method" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Payment Method</h5>
                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                        </div>
                    </div>-->
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Address -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Billing Address</h5>
                            <p><strong><?= h($the_user->firstname) . " " . h($the_user->lastname) ?></strong></p>
                            <address>
                                <?php if (!empty($addresses)) : ?>
                                <?php foreach ($addresses as $address) :?>
                                    <p class="lhbigger"><?= h($address->address_line_1)?> <br>
                                        <?= h($address->address_line_2)?></p>
                                    <p class="lhbigger"> City:
                                        <?= h($address->city)?>, <?= h($address->country)?>
                                    </p>
                                        <p class="lhbigger"> State:
                                            <?= h($address->state)?> <?= h($address->postcode)?>
                                        </p>
                                    <a href="<?= $this->Url->build(['controller' => 'UserAddresses', 'action' => 'edit', $address->id]) ?>" class="btn btn-round d-inline-block address-btn-edit">
                                        <i class="fa fa-edit"></i> Edit address </a>
                                <?php endforeach; ?>
                                <?php else : ?>
                                <p class="lhbigger">You currently have no saved address. </p>
                                <a href="<?= $this->Url->build(['controller' => 'UserAddresses', 'action' => 'add', $the_user->id]) ?>" class="btn btn-round d-inline-block address-btn-edit">
                                    <i class="fa fa-edit"></i> Add address </a>
                            </address>
                                <?php endif; ?>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Account Details -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Account Details</h5>
                            <div class="myaccount-table table-responsive">
                                <table class="table-myaccount table-bordered">
                                    <tr>
                                        <th><?= __('First name') ?></th>
                                        <td style="text-align: left"><?= h($the_user->firstname) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Last name') ?></th>
                                        <td style="text-align: left"><?= h($the_user->lastname) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Phone') ?></th>
                                        <td style="text-align: left"><?= h($the_user->phone) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Email') ?></th>
                                        <td style="text-align: left"><?= h($the_user->email) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Username') ?></th>
                                        <td style="text-align: left"><?= h($the_user->username) ?></td>
                                    </tr>
                                </table>
                            </div>
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'account', $the_user->id]) ?>" class="btn btn-round d-inline-block address-btn-edit"><i
                                    class="fa fa-edit"></i> Edit account details</a>
                                <!--<?/*= $this->Html->link('Edit account details',
                                    ['controller' => 'Users', 'action' => 'account', $the_user->id],
                                    array('class'=>'submit')
                                );*/?>--->
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
