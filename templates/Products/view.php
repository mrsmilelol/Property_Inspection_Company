<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
        <div class="products view content">
            <h3 ><?= h($product->name) ?></h3>
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->description, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Inventory') ?></th>
                    <td><?= $product->has('product_inventory') ? $this->Html->link($product->product_inventory->product_name, ['controller' => 'ProductInventories', 'action' => 'view', $product->product_inventory->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($product->description) ?></td>
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
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($product->price) ?></td>
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
<script>
    $(document).ready( function () {
        $('#productTable').DataTable();
    } );
</script>

