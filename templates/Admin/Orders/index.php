<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>

<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Orders') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new order</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= h('ID') ?></th>
                        <th><?= h('Shopping session ID') ?></th>
                        <th><?= h('Total') ?></th>
                        <th data-visible="false"><?= h('created_at') ?></th>
                        <th data-visible="false"><?= h('modified_at') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $this->Number->format($order->id) ?></td>
                        <td><?= $order->has('shopping_session') ? $this->Html->link($order->shopping_session->id, ['controller' => 'ShoppingSessions', 'action' => 'view', $order->shopping_session->id]) : '' ?></td>
                        <td><?= $this->Number->format($order->total) ?></td>
                        <td><?= h($order->created_at) ?></td>
                        <td><?= h($order->modified_at) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
