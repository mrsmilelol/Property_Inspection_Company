<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
$this->layout = 'front';
$userType = $this->request->getSession()->read('Auth.user_type_id');
?>

<div class="account-area">
    <div class="container-dashboard">
        <div class="row" style="padding-left: 30px; padding-right: 30px">
            <div class="mb-30 myaccount-content">
                <div class="row">
                    <h5 style="float: left">Order <?= h($order->id) ?></h5>
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']) ?>"
                       class="btn btn-round address-btn-edit" style="float: right">
                        <i class="fa fa-home"></i> Back to Dashboard </a>
                </div>
                <br>
                <div class="myaccount-table table-responsive">
                    <table class="table-myaccount table-bordered">
                        <tr>
                            <th><?= __('Total') ?></th>
                            <td><?= $this->Number->format($order->total) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td><?= h($order->status) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Order date') ?></th>
                            <td><?= h($order->created_at) ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <?php if (!empty($order->products)) : ?>
                <h4><?= __('Related products') ?></h4>
                <div class="myaccount-table table-responsive">
                    <table class="table-myaccount table-bordered">
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Normal price') ?></th>
                            <?php if ($userType === 3) : ?>
                            <th><?= __('Sale price') ?></th>
                            <?php endif; ?>
                            <?php if ($userType === 2) : ?>
                            <th><?= __('Wholesale price') ?></th>
                            <?php endif; ?>
                        </tr>
                        <?php foreach ($order->products as $products) : ?>
                            <tr>
                                <td><?= h($products->name) ?></td>
                                <td><?= h($products->qty) ?></td>
                                <td><?= $this->Number->format(h($products->price)) ?></td>
                                <?php if ($userType === 3) : ?>
                                <td><?= $this->Number->format(h($products->sale_price)) ?></td>
                                <?php endif; ?>
                                <?php if ($userType === 2) : ?>
                                <td><?= $this->Number->format(h($products->wholesale_price)) ?></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
                <br>
                <?php if (!empty($order->cancelled_orders)) : ?>
                <h4><?= __('Related order cancellation requests') ?></h4>
                <div class="myaccount-table table-responsive">
                    <table class="table-myaccount table-bordered">
                        <tr>
                            <th><?= __('Request no.') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Requested at') ?></th>
                        </tr>
                        <?php foreach ($order->cancelled_orders as $cancelledOrders) : ?>
                            <tr>
                                <td><?= h($cancelledOrders->id) ?></td>
                                <td><?= h($cancelledOrders->reason) ?></td>
                                <td><?= h($cancelledOrders->status) ?></td>
                                <td><?= h($cancelledOrders->created_at) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
