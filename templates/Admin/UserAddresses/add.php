<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var array $state
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
echo $this->Html->css('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', ['block' => true]);
echo $this->Html->script('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Add new user address') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($userAddress) ?>
            <?php
            echo $this->Form->control('user_id', ['class' => 'category_select_main', 'id' => 'select_user', 'options' => $users, 'empty' => true, 'label' => ['class' => 'required']]);
            echo $this->Form->control('address_line_1', ['label' => ['class' => 'required', 'text' => 'Address'], 'placeholder' => 'e.g. 1680 Dandenong Rd']); ?>
            <br>
            <?php
            echo $this->Form->control('address_line_2', ['label' => false, 'placeholder' => 'e.g. Oakleigh East']);
            echo $this->Form->control('city', ['placeholder' => 'e.g. Melbourne', 'label' => ['class' => 'required']]);
            echo $this->Form->control('country', ['value' => 'Australia', 'type' => 'hidden']);
            echo $this->Form->control('state', ['options' => $state, 'label' => ['class' => 'required', 'text' => 'Select your state']]);
            echo $this->Form->control('postcode', ['placeholder' => 'e.g. 3166', 'label' => ['class' => 'required']]);
            ?>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#select_user').select2();
    });
</script>
