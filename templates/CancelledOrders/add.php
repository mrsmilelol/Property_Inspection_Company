<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder $cancelledOrder
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cancelled Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cancelledOrders form content">
            <?= $this->Form->create($cancelledOrder) ?>
            <fieldset>
                <legend><?= __('Add Cancelled Order') ?></legend>
                <?php
                    echo $this->Form->control('order_id', ['options' => $orders]);
                    echo $this->Form->control('reason');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
