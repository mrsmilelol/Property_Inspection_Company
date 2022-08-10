<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductReview $productReview
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Review'), ['action' => 'edit', $productReview->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Review'), ['action' => 'delete', $productReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReview->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Reviews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Review'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productReviews view content">
            <h3><?= h($productReview->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $productReview->has('user') ? $this->Html->link($productReview->user->id, ['controller' => 'Users', 'action' => 'view', $productReview->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productReview->has('product') ? $this->Html->link($productReview->product->name, ['controller' => 'Products', 'action' => 'view', $productReview->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($productReview->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productReview->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $this->Number->format($productReview->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($productReview->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($productReview->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
