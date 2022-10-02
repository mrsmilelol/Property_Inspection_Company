<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder $cancelledOrder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cancelled Order'), ['action' => 'edit', $cancelledOrder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cancelled Order'), ['action' => 'delete', $cancelledOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancelledOrder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cancelled Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cancelled Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cancelledOrders view content">
            <h3><?= h($cancelledOrder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $cancelledOrder->has('order') ? $this->Html->link($cancelledOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $cancelledOrder->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reason') ?></th>
                    <td><?= h($cancelledOrder->reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($cancelledOrder->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cancelledOrder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($cancelledOrder->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($cancelledOrder->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
