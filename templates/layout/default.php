
<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>
    <title><?= $this->fetch('title') ?></title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <?= $this->Html->css('sb-admin-2.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build(['controller'=>'Pages', 'action'=>'display','main']) ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-toolbox"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Chelsea Furniture</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Products', 'action'=>'shop']) ?>">
                <i class="fas fa-fw fa-store-alt"></i>
                <span>Shop</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            System control
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-chair"></i>
                <span>Product management</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Product menu:</h6>
                    <a class="collapse-item" href="<?= $this->Url->build('/') ?>">Products</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'Categories','action' => 'index']) ?>">Categories</a>
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'ProductImages','action' => 'index']) ?>--><!--">Images</a>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'ProductReviews','action' => 'index']) ?>--><!--">Reviews</a>-->
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayments"-->
<!--               aria-expanded="true" aria-controls="collapsePayments">-->
<!--                <i class="fas fa-fw fa-user"></i>-->
<!--                <span>User management</span>-->
<!--            </a>-->
<!--            <div id="collapsePayments" class="collapse" aria-labelledby="headingUtilities"-->
<!--                 data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <h6 class="collapse-header">User menu:</h6>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'Users','action' => 'index']) ?>--><!--">Users</a>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'UserTypes','action' => 'index']) ?>--><!--">User Types</a>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'UserAddresses','action' => 'index']) ?>--><!--">User Addresses</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!---->
        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"-->
<!--               aria-expanded="true" aria-controls="collapseUtilities">-->
<!--                <i class="fas fa-fw fa-credit-card"></i>-->
<!--                <span>Payments</span>-->
<!--            </a>-->
<!--            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"-->
<!--                 data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <h6 class="collapse-header">Payment menu:</h6>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'Payments','action' => 'index']) ?>--><!--">Payments</a>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'ShoppingSessions','action' => 'index']) ?>--><!--">Shopping Sessions</a>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!---->
        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"-->
<!--               aria-expanded="true" aria-controls="collapseOrderss">-->
<!--                <i class="fas fa-fw fa-box"></i>-->
<!--                <span>Orders</span>-->
<!--            </a>-->
<!--            <div id="collapseOrders" class="collapse" aria-labelledby="headingUtilities"-->
<!--                 data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <h6 class="collapse-header">Order menu:</h6>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'Orders','action' => 'index']) ?>--><!--">Orders</a>-->
<!--                    <a class="collapse-item" href="--><!--<?//= $this->Url->build(['controller' => 'OrderItems','action' => 'index']) ?>--><!--">Ordered items</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!---->
        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="--><!--<?//= $this->Url->build(['controller' => 'Stores','action' => 'index']) ?>--><!--"-->
<!--               aria-expanded="true" aria-controls="collapseOrderss">-->
<!--                <i class="fas fa-fw fa-store"></i>-->
<!--                <span>Stores</span>-->
<!--            </a>-->
<!--        </li>-->

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Profile</span>
                            <?=$this->Html->image('undraw_profile.svg', ['class' => 'img-profile rounded-circle']) ?>
                        </a>
                        <!-- Dropdown - User Information -->
<!--                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
<!--                             aria-labelledby="userDropdown">-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Settings-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">-->
<!--                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                Logout-->
<!--                            </a>-->
<!--                        </div>-->
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Chelsea Furniture 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>
<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min') ?>

<!-- Page level plugins
<script src="vendor/chart.js/Chart.min.js"></script>
-->
<!-- Page level custom scripts
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
 -->
<?= $this->fetch('script') ?>
</body>

</html>
