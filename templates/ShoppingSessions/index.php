<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShoppingSession[]|\Cake\Collection\CollectionInterface $shoppingSessions
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="shoppingSessions index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Shopping Sessions') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New shopping sessions</a>
    </div>
    <table class="table table-bordered" id="shoppingSessions" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th><?= h('ID') ?></th>
                    <th><?= h('User_id') ?></th>
                    <th><?= h('Product_id') ?></th>
                    <th><?= h('Quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shoppingSessions as $shoppingSession): ?>
                <tr>
                    <td><?= $this->Number->format($shoppingSession->id) ?></td>
                    <td><?= $shoppingSession->has('user') ? $this->Html->link($shoppingSession->user->username, ['controller' => 'Users', 'action' => 'view', $shoppingSession->user->id]) : '' ?></td>
                    <td><?= $shoppingSession->has('product') ? $this->Html->link($shoppingSession->product->name, ['controller' => 'Products', 'action' => 'view', $shoppingSession->product->id]) : '' ?></td>
                    <td><?= $shoppingSession->quantity === null ? '' : $this->Number->format($shoppingSession->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shoppingSession->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shoppingSession->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shoppingSession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingSession->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script>
            $(document).ready( function () {
                $('#shoppingSessions').DataTable();
            } );
        </script>
</div>
