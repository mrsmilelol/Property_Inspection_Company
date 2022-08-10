<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShoppingSession $shoppingSession
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Shopping Session'), ['action' => 'edit', $shoppingSession->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Shopping Session'), ['action' => 'delete', $shoppingSession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingSession->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Shopping Sessions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Shopping Session'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="shoppingSessions view content">
            <h3><?= h($shoppingSession->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $shoppingSession->has('user') ? $this->Html->link($shoppingSession->user->id, ['controller' => 'Users', 'action' => 'view', $shoppingSession->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $shoppingSession->has('product') ? $this->Html->link($shoppingSession->product->name, ['controller' => 'Products', 'action' => 'view', $shoppingSession->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shoppingSession->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $shoppingSession->quantity === null ? '' : $this->Number->format($shoppingSession->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($shoppingSession->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($shoppingSession->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
