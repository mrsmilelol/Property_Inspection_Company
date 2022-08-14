<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductCategory[]|\Cake\Collection\CollectionInterface $productCategories
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="productCategories index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Product categories') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New category</a>
    </div>
    <table class="table table-bordered" id="categories" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('Category_Name') ?></th>
                    <th><?= h('Product_Name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productCategories as $productCategory): ?>
                <tr>
                    <td><?= $this->Number->format($productCategory->id) ?></td>
                    <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->description, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
                    <td><?= $productCategory->has('product') ? $this->Html->link($productCategory->product->name, ['controller' => 'Products', 'action' => 'view', $productCategory->product->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <script>
        $(document).ready( function () {
            $('#categories').DataTable();
        } );
    </script>
</div>
