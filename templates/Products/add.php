<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $subcategories
 * @var \Cake\Collection\CollectionInterface|string[] $displayCategory
 * @var \Cake\Collection\CollectionInterface|string[] $productInventories
 * @var \Cake\Collection\CollectionInterface|string[] $productImages
 */


//debug($this->Form->getTemplates());
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
];
$this->Form->setTemplates($formTemplate);
echo $this->Html->css('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', ['block' => true]);
echo $this->Html->script('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Add new product') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($product, ['type' => 'file']) ?>
<!--            <div><label>Categories</label></div>-->
<!--                    --><?php
//                        foreach ($categories as $category):
//                            echo $this->Form->radio('category_id', ['value' => $category['parent_id']]);
//                        endforeach;?>
            <div><label>Categories</label></div>
                    <?php /*foreach ($categories as $category) :
                        foreach ($subcategories as $subcategory) :
                            if ($category->id == $subcategory->parent_id) :
                                echo $this->Form->select('category_description', ['value' => $category['description'] . ' ' . $subcategory['description']], ['multiple' => 'checkbox']);
                            endif;
                        endforeach;
                    endforeach;*/
                    echo $this->Form->input('category_id',
                        array(
                            "type" => "select",
                            'multiple' => true,
                            "options" => $displayCategory
                        )
                    );
                        //echo $this->Form->control('inventory_id', ['options' => $productInventories, 'empty' => true]);
                        echo $this->Form->control('name');
                        echo $this->Form->control('description');
                        echo $this->Form->control('units_in_stock');
                        echo $this->Form->control('material');
                        echo $this->Form->control('brand');
                        echo $this->Form->control('style');
                        echo $this->Form->control('colour');
                        echo $this->Form->control('size');
                        echo $this->Form->control('weight');
                        echo $this->Form->control('finish');
                        echo $this->Form->control('manufacturing');
                        echo $this->Form->control('wholesale_price');
                        echo $this->Form->control('price', [
                            'label' => [
                                'text' => 'Customer Price']]);
                        echo $this->Form->control('sale_price');
                        echo $this->Form->file('image_file. ', ['type' => 'file','multiple' => 'multiple']);
                        //echo $this->Form->control('created_at');
                        //echo $this->Form->control('modified_at');
                        ?>
            <br>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>

