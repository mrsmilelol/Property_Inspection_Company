<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="productImages index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Product images') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New images</a>
    </div>
    <table class="table table-bordered" id="images" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Product_Name') ?></th>
                    <th><?= h('Description') ?></th>
                    <th data-visible="false"><?= h('created_at') ?></th>
                    <th data-visible="false"><?= h('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productImages as $productImage): ?>
                <tr>
                    <td><?= $this->Number->format($productImage->id) ?></td>
                    <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                    <td><?= h($productImage->description) ?></td>
                    <td><?= h($productImage->created_at) ?></td>
                    <td><?= h($productImage->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productImage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productImage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <script>
        $(document).ready( function () {
            $('#images').DataTable();
        } );
    </script>
</div>
