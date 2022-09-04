<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Wholesale Request'), ['action' => 'edit', $wholesaleRequest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Wholesale Request'), ['action' => 'delete', $wholesaleRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wholesaleRequest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Wholesale Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Wholesale Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wholesaleRequests view content">
            <h3><?= h($wholesaleRequest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Abn') ?></th>
                    <td><?= h($wholesaleRequest->abn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 1') ?></th>
                    <td><?= h($wholesaleRequest->address_line_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 2') ?></th>
                    <td><?= h($wholesaleRequest->address_line_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($wholesaleRequest->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Type') ?></th>
                    <td><?= h($wholesaleRequest->business_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Method') ?></th>
                    <td><?= h($wholesaleRequest->payment_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($wholesaleRequest->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($wholesaleRequest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Name') ?></th>
                    <td><?= $this->Number->format($wholesaleRequest->business_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($wholesaleRequest->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($wholesaleRequest->modified_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $wholesaleRequest->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
