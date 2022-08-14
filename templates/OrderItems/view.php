<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem $orderItem
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <div class="column-responsive column-80">
        <div class="orderItems view content">
            <h3><?= h($orderItem->id) ?></h3>
            <table class="table table-bordered" id="orderItemsTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderItem->has('order') ? $this->Html->link($orderItem->order->id, ['controller' => 'Orders', 'action' => 'view', $orderItem->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderItem->has('product') ? $this->Html->link($orderItem->product->name, ['controller' => 'Products', 'action' => 'view', $orderItem->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($orderItem->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($orderItem->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($orderItem->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
<script>
    $(document).ready( function () {
        $('#orderItemsTable').DataTable();
    } );
</script>
