<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $userTypes
 */

$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Edit user') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($user) ?>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('firstname', ['label' => 'First name']);
                    echo $this->Form->control('lastname', ['label' => 'Last name']);
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('user_type_id', ['label' => 'User type ID', 'options' => $userTypes, 'empty' => true]);
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                ?>
                <br>
                <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
        </table>
    </div>
</div>