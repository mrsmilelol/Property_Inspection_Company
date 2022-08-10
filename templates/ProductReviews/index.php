<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductReview[]|\Cake\Collection\CollectionInterface $productReviews
 */
?>
<div class="productReviews index content">
    <?= $this->Html->link(__('New Product Review'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Reviews') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productReviews as $productReview): ?>
                <tr>
                    <td><?= $this->Number->format($productReview->id) ?></td>
                    <td><?= $productReview->has('user') ? $this->Html->link($productReview->user->id, ['controller' => 'Users', 'action' => 'view', $productReview->user->id]) : '' ?></td>
                    <td><?= $productReview->has('product') ? $this->Html->link($productReview->product->name, ['controller' => 'Products', 'action' => 'view', $productReview->product->id]) : '' ?></td>
                    <td><?= h($productReview->description) ?></td>
                    <td><?= $this->Number->format($productReview->rating) ?></td>
                    <td><?= h($productReview->created_at) ?></td>
                    <td><?= h($productReview->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productReview->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productReview->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReview->id)]) ?>
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
