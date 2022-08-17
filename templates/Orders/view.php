<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($order->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('Shopping session') ?></th>
                <td><?= $order->has('shopping_session') ? $this->Html->link($order->shopping_session->id, ['controller' => 'ShoppingSessions', 'action' => 'view', $order->shopping_session->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
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
            <br>
            <div class="related">
                <h4><?= __('Related order items') ?></h4>
                <?php if (!empty($order->order_items)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="ordersTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Order ID') ?></th>
                            <th><?= __('Product ID') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($order->order_items as $orderItems) : ?>
                        <tr>
                            <td><?= h($orderItems->id) ?></td>
                            <td><?= h($orderItems->order_id) ?></td>
                            <td><?= h($orderItems->product_id) ?></td>
                            <td><?= h($orderItems->quantity) ?></td>
                            <td><?= h($orderItems->created_at) ?></td>
                            <td><?= h($orderItems->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>
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
        $('#ordersTable').DataTable();
    } );
</script>
