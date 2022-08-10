<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShoppingSession[]|\Cake\Collection\CollectionInterface $shoppingSessions
 */
?>
<div class="shoppingSessions index content">
    <?= $this->Html->link(__('New Shopping Session'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Shopping Sessions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shoppingSessions as $shoppingSession): ?>
                <tr>
                    <td><?= $this->Number->format($shoppingSession->id) ?></td>
                    <td><?= $shoppingSession->has('user') ? $this->Html->link($shoppingSession->user->id, ['controller' => 'Users', 'action' => 'view', $shoppingSession->user->id]) : '' ?></td>
                    <td><?= $shoppingSession->has('product') ? $this->Html->link($shoppingSession->product->name, ['controller' => 'Products', 'action' => 'view', $shoppingSession->product->id]) : '' ?></td>
                    <td><?= $shoppingSession->quantity === null ? '' : $this->Number->format($shoppingSession->quantity) ?></td>
                    <td><?= h($shoppingSession->created_at) ?></td>
                    <td><?= h($shoppingSession->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $shoppingSession->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shoppingSession->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shoppingSession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingSession->id)]) ?>
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
