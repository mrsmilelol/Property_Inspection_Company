<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
];
$this->Form->setTemplates($formTemplate);
$this->layout = 'logged_out';
?>
<div class="container" style="padding-top: 12%;">
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Application for wholesale account') ?></h1>
        <?= $this->Html->link(
            'Home',
            ['prefix'=>'Customer','controller' => 'Pages', 'action' => 'main'],
            ['class' => 'btn btn-primary btn-group']
        );?>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($wholesaleRequest) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('business_name');
                    echo $this->Form->control('website');
                    echo $this->Form->control('abn');
                    echo $this->Form->control('business_phone');
                    echo $this->Form->control('address_line_1');
                    echo $this->Form->control('address_line_2');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('position');
                    echo $this->Form->control('message');
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
</div>
