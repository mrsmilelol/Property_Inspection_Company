<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
echo $this->Html->script('bootstrapModal', ['block' => true]);
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);

$this->Form->setTemplates([
    'confirmJs' => 'addToModal("{{formName}}"); return false;'
])
//echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet', ['block' => true]);
//echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
//echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new product</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Name') ?></th>
                    <th><?= h('Description') ?></th>
                    <th><?= h('Normal price') ?></th>
                    <th><?= h('Material') ?></th>
                    <th><?= h('Brand') ?></th>
                    <th><?= h('Style') ?></th>
                    <th data-visible="false"><?= h('Colour') ?></th>
                    <th><?= h('Units in stock') ?></th>
                    <th data-visible="false"><?= h('Size (cm)') ?></th>
                    <th data-visible="false"><?= h('Weight (kg)') ?>
                    <th data-visible="false"><?= h('Finish') ?></th>
                    <th><?= h('Sale price') ?></th>
                    <th data-visible="false"><?= h('Wholesale price') ?></th>
                    <th data-visible="false"><?= h('Manufacturer') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= h($product->description) ?></td>
                        <td><?= $this->Number->format($product->price) ?></td>
                        <td><?= h($product->material) ?></td>
                        <td><?= h($product->brand) ?></td>
                        <td><?= h($product->style) ?></td>
                        <td><?= h($product->colour) ?></td>
                        <td><?= h($product->units_in_stock) ?></td>
                        <td><?= h($product->size) ?></td>
                        <td><?= h($product->weight) ?></td>
                        <td><?= h($product->finish) ?></td>
                        <td><?= $this->Number->format(h($product->sale_price)) ?></td>
                        <td><?= $this->Number->format(h($product->wholesale_price)) ?></td>
                        <td><?= h($product->manufacturing) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete product "{0}"?', $product->name),
                                'data-toggle' => "modal", 'data-target' => "#bootstrapModal"
                            ]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal" id="bootstrapModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="confirmMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="ok">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<script>
    $(document).ready(function () {
        $('#products').DataTable();
    });
</script>

