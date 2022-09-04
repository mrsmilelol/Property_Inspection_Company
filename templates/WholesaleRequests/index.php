<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest[]|\Cake\Collection\CollectionInterface $wholesaleRequests
 */
?>
<div class="wholesaleRequests index content">
    <?= $this->Html->link(__('New Wholesale Request'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Wholesale Requests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('business_name') ?></th>
                    <th><?= $this->Paginator->sort('abn') ?></th>
                    <th><?= $this->Paginator->sort('address_line_1') ?></th>
                    <th><?= $this->Paginator->sort('address_line_2') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('business_type') ?></th>
                    <th><?= $this->Paginator->sort('payment_method') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wholesaleRequests as $wholesaleRequest): ?>
                <tr>
                    <td><?= $this->Number->format($wholesaleRequest->id) ?></td>
                    <td><?= $this->Number->format($wholesaleRequest->business_name) ?></td>
                    <td><?= h($wholesaleRequest->abn) ?></td>
                    <td><?= h($wholesaleRequest->address_line_1) ?></td>
                    <td><?= h($wholesaleRequest->address_line_2) ?></td>
                    <td><?= h($wholesaleRequest->phone) ?></td>
                    <td><?= h($wholesaleRequest->business_type) ?></td>
                    <td><?= h($wholesaleRequest->payment_method) ?></td>
                    <td><?= h($wholesaleRequest->message) ?></td>
                    <td><?= h($wholesaleRequest->status) ?></td>
                    <td><?= h($wholesaleRequest->created_at) ?></td>
                    <td><?= h($wholesaleRequest->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wholesaleRequest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wholesaleRequest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wholesaleRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wholesaleRequest->id)]) ?>
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
