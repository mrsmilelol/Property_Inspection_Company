<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder[]|\Cake\Collection\CollectionInterface $cancelledOrders
 */
?>
<div class="cancelledOrders index content">
    <?= $this->Html->link(__('New Cancelled Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cancelled Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('reason') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cancelledOrders as $cancelledOrder): ?>
                <tr>
                    <td><?= $this->Number->format($cancelledOrder->id) ?></td>
                    <td><?= $cancelledOrder->has('order') ? $this->Html->link($cancelledOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $cancelledOrder->order->id]) : '' ?></td>
                    <td><?= h($cancelledOrder->reason) ?></td>
                    <td><?= h($cancelledOrder->status) ?></td>
                    <td><?= h($cancelledOrder->created_at) ?></td>
                    <td><?= h($cancelledOrder->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cancelledOrder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cancelledOrder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cancelledOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancelledOrder->id)]) ?>
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
