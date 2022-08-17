<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($payment->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('Order') ?></th>
                <td><?= $payment->has('order') ? $this->Html->link($payment->order->id, ['controller' => 'Orders', 'action' => 'view', $payment->order->id]) : '' ?></td>
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
<script>
    $(document).ready( function () {
        $('#paymentTable').DataTable();
    } );
</script>
