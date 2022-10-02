<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder $cancelledOrder
 */
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($cancelledOrder->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $cancelledOrder->has('order') ? $this->Html->link($cancelledOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $cancelledOrder->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reason') ?></th>
                    <td><?= h($cancelledOrder->reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($cancelledOrder->created_at) ?></td>
                </tr>
            </table>

            <?= $this->Html->link(
                'Approve',
                ['controller' => 'CancelledOrders', 'action' => 'approve',$cancelledOrder->id],
                ['class' => 'btn btn-primary']
            );
            ?>
            <?= $this->Html->link(
                'Reject',
                ['controller' => 'CancelledOrders', 'action' => 'reject',$cancelledOrder->id],
                ['class' => 'btn btn-primary'],
            );
            ?>
        </div>
    </div>
</div>
