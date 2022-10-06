<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder[]|\Cake\Collection\CollectionInterface $cancelledOrders
 */
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Cancel Order Request') ?></h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('Order number') ?></th>
                    <th><?= h('Status') ?></th>
                    <th><?= h('Created at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cancelledOrders as $cancelledOrder): ?>
                    <tr>
                        <td><?= $this->Number->format($cancelledOrder->id) ?></td>
                        <td><?= $cancelledOrder->has('order') ? $this->Html->link($cancelledOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $cancelledOrder->order->id]) : '' ?></td>
                        <td><?= h($cancelledOrder->status) ?></td>
                        <td><?= h($cancelledOrder->created_at) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Review'), ['action' => 'view', $cancelledOrder->id]) ?>

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
