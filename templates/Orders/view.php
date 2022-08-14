<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->id) ?></h3>
            <table class="table table-bordered" id="ordersTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->id, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($order->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($order->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($order->modified_at) ?></td>
                </tr>
            </table>
            <br>
            <div class="related">
                <h4><?= __('Related Order Items') ?></h4>
                <?php if (!empty($order->order_items)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="ordersTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
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
