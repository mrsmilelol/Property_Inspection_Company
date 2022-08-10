<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments view content">
            <h3><?= h($payment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $payment->has('user') ? $this->Html->link($payment->user->id, ['controller' => 'Users', 'action' => 'view', $payment->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Type') ?></th>
                    <td><?= h($payment->payment_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Provider') ?></th>
                    <td><?= h($payment->provider) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($payment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Account No') ?></th>
                    <td><?= $this->Number->format($payment->account_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Security No') ?></th>
                    <td><?= $this->Number->format($payment->security_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= $this->Number->format($payment->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($payment->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($payment->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
