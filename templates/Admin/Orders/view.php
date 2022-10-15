<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($order->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($order->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->username, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($order->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created at') ?></th>
                    <td><?= h($order->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified at') ?></th>
                    <td><?= h($order->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php if (!empty($order->products)) : ?>
                    <h4><?= __('Related products') ?></h4>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Normal price') ?></th>
                                <th><?= __('Units in stock') ?></th>
                                <th><?= __('Sale price') ?></th>
                                <th><?= __('Wholesale price') ?></th>
                                <th><?= __('Created at') ?></th>
                                <th><?= __('Modified at') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($order->products as $products) : ?>
                                <tr>
                                    <td><?= h($products->name) ?></td>
                                    <td><?= h($products->qty) ?></td>
                                    <td><?= $this->Number->format(h($products->price)) ?></td>
                                    <td><?= $this->Number->format(h($products->units_in_stock)) ?></td>
                                    <td><?= $this->Number->format(h($products->sale_price)) ?></td>
                                    <td><?= $this->Number->format(h($products->wholesale_price)) ?></td>
                                    <td><?= h($products->created_at) ?></td>
                                    <td><?= h($products->modified_at) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                        <!--<?/*= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) */?>--><!--
                                    --><!--<?/*= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) */?>-->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <?php if (!empty($order->cancelled_orders)) : ?>
                <h4><?= __('Related order cancellation requests') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Request no.') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->cancelled_orders as $cancelledOrders) : ?>
                        <tr>
                            <td><?= h($cancelledOrders->id) ?></td>
                            <td><?= h($cancelledOrders->reason) ?></td>
                            <td><?= h($cancelledOrders->status) ?></td>
                            <td><?= h($cancelledOrders->created_at) ?></td>
                            <td><?= h($cancelledOrders->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CancelledOrders', 'action' => 'view', $cancelledOrders->id]) ?>
                                <!--<?= $this->Html->link(__('Edit'), ['controller' => 'CancelledOrders', 'action' => 'edit', $cancelledOrders->id]) ?>-->
                                <!--<?/*= $this->Form->postLink(__('Delete'), ['controller' => 'CancelledOrders', 'action' => 'delete', $cancelledOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancelledOrders->id)]) */?>-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <?php if (!empty($order->payments)) : ?>
                <h4><?= __('Related payments') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Order ID') ?></th>
                            <th><?= __('Payment type') ?></th>
                            <th><?= __('Provider') ?></th>
                            <th><?= __('Account no.') ?></th>
                            <th><?= __('Security no.') ?></th>
                            <th><?= __('Expiry date') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->payments as $payments) : ?>
                        <tr>
                            <td><?= h($payments->id) ?></td>
                            <td><?= h($payments->order_id) ?></td>
                            <td><?= h($payments->payment_type) ?></td>
                            <td><?= h($payments->provider) ?></td>
                            <td><?= h($payments->account_no) ?></td>
                            <td><?= h($payments->security_no) ?></td>
                            <td><?= h($payments->expiry_date) ?></td>
                            <td><?= h($payments->created_at) ?></td>
                            <td><?= h($payments->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<script>
    $(document).ready( function () {
        $('#productTable').DataTable();
    } );
</script>
