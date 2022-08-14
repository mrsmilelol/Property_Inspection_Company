<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage $productImage
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>

    <div class="column-responsive column-80">
        <div class="productImages view content">
            <h3><?= h($productImage->product->name) ?></h3>
            <table class="table table-bordered" id="productImageTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($productImage->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productImage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($productImage->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($productImage->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#productImageTable').DataTable();
        } );
    </script>

