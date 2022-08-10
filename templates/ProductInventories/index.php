<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductInventory[]|\Cake\Collection\CollectionInterface $productInventories
 */
?>
<div class="productInventories index content">
    <?= $this->Html->link(__('New Product Inventory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Inventories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_name') ?></th>
                    <th><?= $this->Paginator->sort('product_quantity') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productInventories as $productInventory): ?>
                <tr>
                    <td><?= $this->Number->format($productInventory->id) ?></td>
                    <td><?= h($productInventory->product_name) ?></td>
                    <td><?= $this->Number->format($productInventory->product_quantity) ?></td>
                    <td><?= h($productInventory->created_at) ?></td>
                    <td><?= h($productInventory->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productInventory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productInventory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productInventory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
