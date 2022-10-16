<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($wholesaleRequest->business_name) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('User') ?></th>
                <td><?= $wholesaleRequest->has('user') ? $this->Html->link($wholesaleRequest->user->id, ['controller' => 'Users', 'action' => 'view', $wholesaleRequest->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Business name') ?></th>
                <td><?= h($wholesaleRequest->business_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Website') ?></th>
                <td><?= h($wholesaleRequest->website) ?></td>
            </tr>
            <tr>
                <th><?= __('ABN') ?></th>
                <td><?= h($wholesaleRequest->abn) ?></td>
            </tr>
            <tr>
                <th><?= __('Business phone') ?></th>
                <td><?= h($wholesaleRequest->business_phone) ?></td>
            </tr>
            <tr>
                <th><?= __('Address') ?></th>
                <td><?= h($wholesaleRequest->address_line_1) ?></td>
            </tr>
            <tr>
                <th><?= __('') ?></th>
                <td><?= h($wholesaleRequest->address_line_2) ?></td>
            </tr>
            <tr>
                <th><?= __('First name') ?></th>
                <td><?= h($wholesaleRequest->first_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Last name') ?></th>
                <td><?= h($wholesaleRequest->last_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Phone') ?></th>
                <td><?= h($wholesaleRequest->phone) ?></td>
            </tr>
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($wholesaleRequest->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Position') ?></th>
                <td><?= h($wholesaleRequest->position) ?></td>
            </tr>
            <tr>
                <th><?= __('Message') ?></th>
                <td><?= h($wholesaleRequest->message) ?></td>
            </tr>
            <tr>
                <th><?= __('Status') ?></th>
                <td><?= h($wholesaleRequest->status) ?></td>
            </tr>
            <!--<tr>
                    <th><? /*= __('ID') */ ?></th>
                    <td><? /*= $this->Number->format($wholesaleRequest->id) */ ?></td>
                </tr>-->
            <tr>
                <th><?= __('Created at') ?></th>
                <td><?= h($wholesaleRequest->created_at) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified at') ?></th>
                <td><?= h($wholesaleRequest->modified_at) ?></td>
            </tr>
        </table>
        <?php if (strcmp($wholesaleRequest->status, 'Not approved') == 0) : ?>
            <?= $this->Html->link(
                'Approve',
                ['controller' => 'WholesaleRequests', 'action' => 'approve', $wholesaleRequest->id],
                ['class' => 'btn btn-primary']
            );
            ?>
            <?= $this->Html->link(
                'Reject',
                ['controller' => 'WholesaleRequests', 'action' => 'reject', $wholesaleRequest->id],
                ['class' => 'btn btn-primary'],
            );
            ?>
        <?php endif; ?>
    </div>
</div>
