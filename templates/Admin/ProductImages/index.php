<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductImage[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Images') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new image</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Product name') ?></th>
                    <th><?= h('Description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($productImages as $productImage) : ?>
                    <tr>
                        <td><?= $this->Number->format($productImage->id) ?></td>
                        <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                        <td><?= h($productImage->description) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $productImage->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productImage->id]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#products').DataTable();
    });
</script>

