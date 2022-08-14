<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductInventory $productInventory
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <div class="column-responsive column-80">
        <div class="productInventories view content">
            <h3><?= h($productInventory->product_name) ?></h3>
            <table class="table table-bordered" id="productInventoryTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($productInventory->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productInventory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Quantity') ?></th>
                    <td><?= $this->Number->format($productInventory->product_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($productInventory->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($productInventory->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#productInventoryTable').DataTable();
        } );
    </script>

