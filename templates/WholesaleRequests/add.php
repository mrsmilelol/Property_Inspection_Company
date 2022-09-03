<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Wholesale Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wholesaleRequests form content">
            <?= $this->Form->create($wholesaleRequest) ?>
            <fieldset>
                <legend><?= __('Add Wholesale Request') ?></legend>
                <?php
                    echo $this->Form->control('business_name');
                    echo $this->Form->control('abn');
                    echo $this->Form->control('address_line_1');
                    echo $this->Form->control('address_line_2');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('business_type');
                    echo $this->Form->control('payment_method');
                    echo $this->Form->control('message');
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
