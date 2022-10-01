<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
$this->layout = 'front';
?>

<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container">
        <div class="row mb-n30">

            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboard" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                    <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                    <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a>
                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                    <!--<a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>-->
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 mb-30" style="flex: 0 0 auto; width: 100%;">
                <div class="tab-content" id="myaccountContent">

                    <!-- Single Tab Content Start -->
                    <!-- Dashboard -->
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Dashboard</h5>
                            <div class="welcome">
                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                            </div>
                            <p class="mb-0">From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Orders -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Orders</h5>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Moisturizing Oil</td>
                                        <td>Aug 22, 2018</td>
                                        <td>Pending</td>
                                        <td>$45</td>
                                        <td><a href="cart.html" class="btn btn-round">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Katopeno Altuni</td>
                                        <td>July 22, 2018</td>
                                        <td>Approved</td>
                                        <td>$100</td>
                                        <td><a href="cart.html" class="btn btn-round">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Murikhete Paris</td>
                                        <td>June 12, 2017</td>
                                        <td>On Hold</td>
                                        <td>$99</td>
                                        <td><a href="cart.html" class="btn btn-round">View</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <!-- Downloads -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <h5>Downloads</h5>
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Expire</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Moisturizing Oil</td>
                                        <td>Aug 22, 2018</td>
                                        <td>Yes</td>
                                        <td><a href="#" class="btn btn-round">Download File</a></td>
                                    </tr>
                                    <tr>
                                        <td>Katopeno Altuni</td>
                                        <td>Sep 12, 2018</td>
                                        <td>Never</td>
                                        <td><a href="#" class="btn btn-round">Download File</a></td>
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
                                <p><strong>Alex Tuntuni</strong></p>
                                <p>1355 Market St, Suite 900 <br>
                                    San Francisco, CA 94103</p>
                                <p>Mobile: (123) 456-7890</p>
                            </address>
                            <a href="#" class="btn btn-round d-inline-block"><i class="fa fa-edit"></i>Edit Address</a>
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
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30">
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
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-round btn-lg">Save Changes</button>
                                        </div>

                                    </div>
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
