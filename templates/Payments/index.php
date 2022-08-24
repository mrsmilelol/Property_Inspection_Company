<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payments
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Payments') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new user payment</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= h('ID') ?></th>
                    <th><?= h('Order ID') ?></th>
                    <th><?= h('Payment type') ?></th>
                    <th><?= h('Provider') ?></th>
                    <th><?= h('Account no.') ?></th>
                    <th><?= h('Security no.') ?></th>
                    <th><?= h('Expiry date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $payment): ?>
                    <tr>
                        <td><?= $this->Number->format($payment->id) ?></td>
                        <td><?= $payment->has('order') ? $this->Html->link($payment->order->id, ['controller' => 'Orders', 'action' => 'view', $payment->order->id]) : '' ?></td>
                        <td><?= h($payment->payment_type) ?></td>
                        <td><?= h($payment->provider) ?></td>
                        <td><?= $this->Number->format($payment->account_no) ?></td>
                        <td><?= $this->Number->format($payment->security_no) ?></td>
                        <td><?= $this->Number->format($payment->expiry_date) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    $(document).ready( function () {
        $('#products').DataTable();
    } );
</script>
