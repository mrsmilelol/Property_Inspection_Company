<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Address'), ['action' => 'edit', $userAddress->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Address'), ['action' => 'delete', $userAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddress->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Addresses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Address'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userAddresses view content">
            <h3><?= h($userAddress->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->id, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 1') ?></th>
                    <td><?= h($userAddress->address_line_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 2') ?></th>
                    <td><?= h($userAddress->address_line_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($userAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($userAddress->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($userAddress->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($userAddress->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($userAddress->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($userAddress->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
