<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?/*= __('Actions') */?></h4>
            <?/*= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wholesaleRequest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wholesaleRequest->id), 'class' => 'side-nav-item']
            ) */?>
            <?/*= $this->Html->link(__('List Wholesale Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) */?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wholesaleRequests form content">
            <?/*= $this->Form->create($wholesaleRequest) */?>
            <fieldset>
                <legend><?/*= __('Edit Wholesale Request') */?></legend>
                <?php
/*                    echo $this->Form->control('business_name', ['label'=>'Business name']);
                    echo $this->Form->control('website');
                    echo $this->Form->control('abn', ['label'=>'ABN']);
                    echo $this->Form->control('business_phone', ['label'=>'Business phone']);
                    echo $this->Form->control('address_line_1', ['label'=>'Address line 1']);
                    echo $this->Form->control('address_line_2', ['label'=>'Address line 2']);
                    echo $this->Form->control('first_name',['label'=>'Contact person first name']);
                    echo $this->Form->control('last_name',['label'=>'Contact person last name']);
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('position');
                    echo $this->Form->control('message',['label'=>'Additional information']);
                    //echo $this->Form->control('status');
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                */?>
            </fieldset>
            <?/*= $this->Form->button(__('Submit')) */?>
            <?/*= $this->Form->end() */?>
        </div>
    </div>
</div>
-->
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Edit wholesale request') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($wholesaleRequest) ?>
            <fieldset>
                <?php
                echo $this->Form->control('business_name', ['label'=>'Business name']);
                echo $this->Form->control('website');
                echo $this->Form->control('abn', ['label'=>'ABN']);
                echo $this->Form->control('business_phone', ['label'=>'Business phone']);
                echo $this->Form->control('address_line_1', ['label'=>'Address line 1']);
                echo $this->Form->control('address_line_2', ['label'=>'Address line 2']);
                echo $this->Form->control('first_name',['label'=>'Contact person first name']);
                echo $this->Form->control('last_name',['label'=>'Contact person last name']);
                echo $this->Form->control('phone');
                echo $this->Form->control('email');
                echo $this->Form->control('position');
                echo $this->Form->control('message',['label'=>'Additional information']);
                //echo $this->Form->control('status');
                //echo $this->Form->control('created_at');
                //echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-group']) ?>
            <?= $this->Form->end() ?>
    </div>
</div>
