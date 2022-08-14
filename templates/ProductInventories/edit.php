<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductInventory $productInventory
 */
$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-0 text-gray-800"><?= __('Edit product inventory') ?></h1>
<?= $this->Form->create($productInventory) ?>
                    <?php
                    echo $this->Form->control('product_name');
                    echo $this->Form->control('product_quantity');
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                    ?>
<br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
