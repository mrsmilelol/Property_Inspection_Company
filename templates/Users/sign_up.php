<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $userTypes
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
$this->layout = 'logged_out';
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Create account') ?></h1>
        <?= $this->Html->link(
            'Home',
            ['controller' => 'Pages', 'action' => 'main'],
            ['class' => 'btn btn-primary btn-group']
        );?>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($user) ?>
                <?php
                    echo $this->Form->control('username', ['label' => ['class' => 'required']]);
                    echo $this->Form->control('password', ['label' => ['class' => 'required']]);
                    echo $this->Form->control('firstname',
                        ['label' => ['class' => 'required', 'text' => 'First name']]);
                    echo $this->Form->control('lastname',
                    ['label' => ['class' => 'required', 'text' => 'Last name']]);
                    echo $this->Form->control('phone', ['label' => ['class' => 'required']]);
                    echo $this->Form->control('email', ['label' => ['class' => 'required']]);
                    //echo $this->Form->control('created_at', ['type' => 'hidden']);
                    //echo $this->Form->control('modified_at', ['type' => 'hidden']);
                ?>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>


