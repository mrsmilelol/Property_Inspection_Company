<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Collection\CollectionInterface|string[] $parentCategories
 * @var \Cake\Collection\CollectionInterface|string[] $products
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
        <h1 class="h3 mb-0 text-gray-800"><?= __('Add new subcategory') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($category) ?>
            <?php
            echo $this->Form->control('parent_id', ['options' => $parentCategories, 'label' => 'Parent category']);
            echo $this->Form->control('description', ['label' => 'Subcategory name']);
            echo $this->Form->control('products._ids', ['options' => $products,'class' => 'category_select_main', 'id' => 'select_category_main', 'style' => 'width:600px',]);
            //echo $this->Form->control('created_at');
            //echo $this->Form->control('modified_at');
            ?>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.category_select_main').select2();
        $('.category_select_sub').select2();
    });
</script>
<style>
    .select2-container {
        display: block;
    }
</style>
