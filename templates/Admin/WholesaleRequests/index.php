<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest[]|\Cake\Collection\CollectionInterface $wholesaleRequests
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('WholesaleRequests') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new request</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="wholesaleRequests" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Business Name') ?></th>
                    <th><?= h('ABN') ?></th>
                    <th><?= h('Address') ?></th>
                    <th><?= h('Phone') ?></th>
                    <th><?= h('Business Type') ?></th>
                    <th><?= h('Payment Method') ?></th>
                    <th data-visible="false"><?= h('Message') ?></th>
                    <th data-visible="false"><?= h('Status') ?></th>
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
                    <td><?= h($wholesaleRequest->phone) ?></td>
                    <td><?= h($wholesaleRequest->business_type) ?></td>
                    <td><?= h($wholesaleRequest->payment_method) ?></td>
                    <td><?= h($wholesaleRequest->message) ?></td>
                    <td><?= h($wholesaleRequest->status) ?></td>
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
</div>
    <!-- /.container-fluid -->
    <script>
        $(document).ready( function () {
            $('#products').DataTable();
        } );
    </script>
