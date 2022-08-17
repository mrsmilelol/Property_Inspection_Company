<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage $productImage
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>

<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($productImage->product->name) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($productImage->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($productImage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created at') ?></th>
                    <td><?= h($productImage->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified at') ?></th>
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

