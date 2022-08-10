<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress[]|\Cake\Collection\CollectionInterface $userAddresses
 */
?>
<div class="userAddresses index content">
    <?= $this->Html->link(__('New User Address'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Addresses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('address_line_1') ?></th>
                    <th><?= $this->Paginator->sort('address_line_2') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('postcode') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userAddresses as $userAddress): ?>
                <tr>
                    <td><?= $this->Number->format($userAddress->id) ?></td>
                    <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->id, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                    <td><?= h($userAddress->address_line_1) ?></td>
                    <td><?= h($userAddress->address_line_2) ?></td>
                    <td><?= h($userAddress->city) ?></td>
                    <td><?= h($userAddress->country) ?></td>
                    <td><?= h($userAddress->state) ?></td>
                    <td><?= h($userAddress->postcode) ?></td>
                    <td><?= h($userAddress->created_at) ?></td>
                    <td><?= h($userAddress->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userAddress->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAddress->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id)]) ?>
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
