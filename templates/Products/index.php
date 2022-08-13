<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="products index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New products</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('category_id') ?></th>
                    <th><?= h('id') ?></th>
                    <th><?= h('inventory_id') ?></th>
                    <th><?= h('name') ?></th>
                    <th><?= h('description') ?></th>
                    <th><?= h('price') ?></th>
                    <th><?= h('material') ?></th>
                    <th><?= h('brand') ?></th>
                    <th><?= h('style') ?></th>
                    <th><?= h('colour') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->id, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    <td><?= $product->has('product_inventory') ? $this->Html->link($product->product_inventory->id, ['controller' => 'ProductInventories', 'action' => 'view', $product->product_inventory->id]) : '' ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= h($product->description) ?></td>
                    <td><?= $this->Number->format($product->price) ?></td>
                    <td><?= h($product->material) ?></td>
                    <td><?= h($product->brand) ?></td>
                    <td><?= h($product->style) ?></td>
                    <td><?= h($product->colour) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>
</div>
