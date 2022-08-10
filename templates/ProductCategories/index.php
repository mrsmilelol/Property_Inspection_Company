<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductCategory[]|\Cake\Collection\CollectionInterface $productCategories
 */
?>
<div class="productCategories index content">
    <?= $this->Html->link(__('New Product Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productCategories as $productCategory): ?>
                <tr>
                    <td><?= $this->Number->format($productCategory->id) ?></td>
                    <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->id, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
                    <td><?= $productCategory->has('product') ? $this->Html->link($productCategory->product->name, ['controller' => 'Products', 'action' => 'view', $productCategory->product->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]) ?>
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
