<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-0 text-gray-800"><?= __('Add new product') ?></h1>
                <?= $this->Form->create($product, ['type' => 'file']) ?>
                <?php

                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('price');
                    echo $this->Form->control('material');
                    echo $this->Form->control('brand');
                    echo $this->Form->control('style');
                    echo $this->Form->control('colour');
                    echo $this->Form->control('units_in_stock');
                    echo $this->Form->control('size');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('finish');
                    echo $this->Form->control('wholesale_price');
                    echo $this->Form->control('sale_price');
                    echo $this->Form->control('manufacturing');
                    echo $this->Form->file('image_file. ', array('type'=>'file','multiple'=>'multiple'));
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                ?>
<br>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
