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
        <h1 class="h3 mb-0 text-gray-800"><?= __('Wholesale requests') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new request</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="wholesaleRequests" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= h('Account no.') ?></th>
                    <th><?= h('Business name') ?></th>
                    <th><?= h('Name of contact person') ?></th>
                    <th data-visible="false"><?= h('Status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($wholesaleRequests as $wholesaleRequest) : ?>
                    <tr>
                        <td><?= $wholesaleRequest->user_id ?></td>
                        <td><?= h($wholesaleRequest->business_name) ?></td>
                        <td><?= h($wholesaleRequest->first_name) . ' ' . h($wholesaleRequest->last_name) ?></td>
                        <td><?= h($wholesaleRequest->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Review'), ['action' => 'view', $wholesaleRequest->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wholesaleRequest->id]) ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#products').DataTable();
        });
    </script>
