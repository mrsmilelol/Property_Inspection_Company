<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $productInventories
 */
//debug($this->Form->getTemplates());
$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'selectMultiple' => '<select name="{{name}}[]" multiple="multiple" class="form-control"{{attrs}}>{{content}}</select>',

];
$this->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-0 text-gray-800"><?= __('Add new product') ?></h1>
<?= $this->Form->create($product) ?>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->control('inventory_id', ['options' => $productInventories, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('material');
            echo $this->Form->control('brand');
            echo $this->Form->control('style');
            echo $this->Form->control('colour');
            //echo $this->Form->control('created_at');
            //echo $this->Form->control('modified_at');
        ?>
<br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

