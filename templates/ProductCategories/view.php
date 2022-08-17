<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductCategory $productCategory
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>

    <div class="column-responsive column-80">
        <div class="productCategories view content">
            <h3><?= h($productCategory->id) ?></h3>
            <table class="table table-bordered" id="productCategoryTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->id, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productCategory->has('product') ? $this->Html->link($productCategory->product->name, ['controller' => 'Products', 'action' => 'view', $productCategory->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($productCategory->id) ?></td>
                </tr>
            </table>
        </div>

    <script>
        $(document).ready( function () {
            $('#productCategoryTable').DataTable();
        } );
    </script>
</div>
