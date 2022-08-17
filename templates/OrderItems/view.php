<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem $orderItem
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($orderItem->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderItem->has('order') ? $this->Html->link($orderItem->order->id, ['controller' => 'Orders', 'action' => 'view', $orderItem->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderItem->has('product') ? $this->Html->link($orderItem->product->name, ['controller' => 'Products', 'action' => 'view', $orderItem->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orderItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($orderItem->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created at') ?></th>
                    <td><?= h($orderItem->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified at') ?></th>
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
