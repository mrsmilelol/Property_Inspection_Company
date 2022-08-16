<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem[]|\Cake\Collection\CollectionInterface $orderItems
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Order items') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new items</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Order_id') ?></th>
                    <th><?= h('Product_id') ?></th>
                    <th><?= h('Quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($orderItems as $orderItem): ?>
                    <tr>
                        <td><?= $this->Number->format($orderItem->id) ?></td>
                        <td><?= $orderItem->has('order') ? $this->Html->link($orderItem->order->id, ['controller' => 'Orders', 'action' => 'view', $orderItem->order->id]) : '' ?></td>
                        <td><?= $orderItem->has('product') ? $this->Html->link($orderItem->product->name, ['controller' => 'Products', 'action' => 'view', $orderItem->product->id]) : '' ?></td>
                        <td><?= $this->Number->format($orderItem->quantity) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $orderItem->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderItem->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    $(document).ready( function () {
        $('#products').DataTable();
    } );
</script>
