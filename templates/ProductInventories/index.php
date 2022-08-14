<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductInventory[]|\Cake\Collection\CollectionInterface $productInventories
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="productInventories index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Product inventories') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New inventories</a>
    </div>
    <table class="table table-bordered" id="inventories" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('Product name') ?></th>
                    <th><?= h('Product quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productInventories as $productInventory): ?>
                <tr>
                    <td><?= $this->Number->format($productInventory->id) ?></td>
                    <td><?= h($productInventory->product_name) ?></td>
                    <td><?= $this->Number->format($productInventory->product_quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productInventory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productInventory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productInventory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<script>
    $(document).ready( function () {
        $('#inventories').DataTable();
    } );
</script>

</div>
