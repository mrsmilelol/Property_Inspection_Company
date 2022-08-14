<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payments
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="payments index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Payments') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New payments</a>
    </div>
    <table class="table table-bordered" id="payments" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th><?= h('ID') ?></th>
                    <th><?= h('User_id') ?></th>
                    <th><?= h('Payment_type') ?></th>
                    <th><?= h('Provider') ?></th>
                    <th><?= h('Account_no') ?></th>
                    <th><?= h('Security_no') ?></th>
                    <th><?= h('Expiry_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment): ?>
                <tr>
                    <td><?= $this->Number->format($payment->id) ?></td>
                    <td><?= $payment->has('user') ? $this->Html->link($payment->user->username, ['controller' => 'Users', 'action' => 'view', $payment->user->id]) : '' ?></td>
                    <td><?= h($payment->payment_type) ?></td>
                    <td><?= h($payment->provider) ?></td>
                    <td><?= $this->Number->format($payment->account_no) ?></td>
                    <td><?= $this->Number->format($payment->security_no) ?></td>
                    <td><?= $this->Number->format($payment->expiry_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <script>
        $(document).ready( function () {
            $('#payments').DataTable();
        } );
    </script>
</div>
