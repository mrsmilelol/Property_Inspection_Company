<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($product->name) ?></h1>
    </div>
    <div class="card-body">
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($product->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($product->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sale Price') ?></th>
                    <td><?= $this->Number->format($product->sale_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wholesale price') ?></th>
                    <td><?= $this->Number->format($product->wholesale_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material') ?></th>
                    <td><?= h($product->material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand') ?></th>
                    <td><?= h($product->brand) ?></td>
                </tr>
                <tr>
                    <th><?= __('Style') ?></th>
                    <td><?= h($product->style) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colour') ?></th>
                    <td><?= h($product->colour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Units in stock') ?></th>
                    <td><?= $this->Number->format($product->units_in_stock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= $this->Number->format($product->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($product->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finish') ?></th>
                    <td><?= $this->Number->format($product->finish) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($product->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($product->modified_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Images') ?></th>
                    <td><?php foreach ($productImages as $productImage){
                        echo $this->Html->image($productImage->description,['alt' => 'CakePHP','class' => 'img-fluid','width' => 200, 'height' => 200]);} ?></td>
                </tr>
            </table>

        </div>
    </div>

<script>
    $(document).ready( function () {
        $('#productTable').DataTable();
    } );
</script>

