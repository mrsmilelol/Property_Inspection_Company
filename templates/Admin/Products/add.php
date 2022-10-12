<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $styles
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $subcategories
 * @var \Cake\Collection\CollectionInterface|string[] $productInventories
 * @var \Cake\Collection\CollectionInterface|string[] $productImages
 * @var \Cake\Collection\CollectionInterface|string[] $displayCategory
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
echo $this->Html->script('//cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Add new product') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($product, ['type' => 'file']) ?>

                    <?php
                        echo $this->Form->control('categories._ids', [
                            'options' => $categories,
                            'class' => 'category_select_main',
                            'id' => 'select_category_main',
                            'style' => 'width:600px',
                            'label' => ['class' => 'required', 'text' => 'Categories']]);
                        //echo $this->Form->control('categories._ids', ['options' => $categories->toArray(), 'class' => 'category_select_main', 'id' => 'select_category_main', 'style' => 'width:300px']);
                        //echo $this->Form->control('categories._ids', ['options' => $subcategories->toArray(), 'class' => 'category_select_sub', 'id' => 'select_category_sub', 'style' => 'width:300px', 'label'=>'Sub Category']);
                        //echo $this->Form->control('inventory_id', ['options' => $productInventories, 'empty' => true]);
                        echo $this->Form->control('name', ['label' => ['class' => 'required']]);
                        echo $this->Form->control('description', ['type' => 'text', 'id' => 'editor']);
                        echo $this->Form->control('units_in_stock', ['label' => ['class' => 'required', 'text' => 'Units in stock']]);
                        echo $this->Form->control('material', ['label' => ['class' => 'required']]);
                        echo $this->Form->control('brand', ['label' => ['class' => 'required']]);
                        echo $this->Form->control('style', ['label' => ['class' => 'required']]);
                        //echo $this->Form->control('style_id', ['options' => $styles, 'empty' => true]);
                        echo $this->Form->control('colour', ['label' => ['class' => 'required']]);
                        echo $this->Form->control('size', ['label' => [
                            'class' => 'required', 'text' => 'Size (cm) (e.g. w-122.682 x d-122.7 x h-45.72)']]);
                        echo $this->Form->control('weight', ['label'=> ['class' => 'required', 'text' => 'Weight (kg)']]);
                        echo $this->Form->control('finish', ['label'=>'Finish (e.g. Natural Oak)']);
                        echo $this->Form->control('manufacturing', ['label' => 'Manufacturer']);
                        echo $this->Form->control('price', [
                            'label' => [
                                'class' => 'required', 'text' => 'Normal price']]);
                        echo $this->Form->control('sale_price', ['label' => 'Sale price']);
                        echo $this->Form->control('wholesale_price', ['label' => 'Wholesale price']);
                        echo $this->Form->label('Product images', 'Product images', ['class' => 'required']);
                        ?>
                        <br>
                        <?php echo $this->Form->file('image_file. ', ['type' => 'file','multiple' => 'multiple','required'=>true]);
                        //echo $this->Form->control('created_at');
                        //echo $this->Form->control('modified_at');
                        ?>
            <p><br></p>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.category_select_main').select2();
        $('.category_select_sub').select2();
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    });
</script>
<style>
    .select2-container {
        display: block;
    }
</style>

