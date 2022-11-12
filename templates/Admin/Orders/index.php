<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
echo $this->Html->script('bootstrapModal', ['block' => true]);
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
$this->Form->setTemplates([
    'confirmJs' => 'addToModal("{{formName}}"); return false;'
])
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Orders') ?></h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="orders" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('Username') ?></th>
                    <th><?= h('Total') ?></th>
                    <th><?= h('Status') ?></th>
                    <th><?= h('Created at') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->username, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($order->total) ?></td>
                    <td><?= h($order->status) ?></td>
                    <td><?= h($order->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>-->
                        <?= $this->Form->postLink(__('Cancel'), ['prefix' => 'Admin','action' => 'cancel', $order->id],
                            ['confirm' => __('Are you sure you want to cancel order no. {0}?', $order->id),
                                'data-toggle' => "modal", 'data-target' => "#bootstrapModal"
                            ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

        <div class="modal" id="bootstrapModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="confirmMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="ok">Yes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script>
    $(document).ready( function () {
        $('#orders').DataTable();
    } );
</script>
