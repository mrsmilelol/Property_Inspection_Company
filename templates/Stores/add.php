<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-0 text-gray-800"><?= __('Add new store') ?></h1>
<?= $this->Form->create($store) ?>
                <?php
                    echo $this->Form->control('address');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('city');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('post_code');
                    echo $this->Form->control('phone number');
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                ?>
<br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
