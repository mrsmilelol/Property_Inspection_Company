<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->script('bootstrapModal', ['block' => true]);
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
$this->Form->setTemplates([
    'confirmJs' => 'addToModal("{{formName}}"); return false;'
])
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($product->name) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($product->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Description') ?></th>
                <td><?= h($product->description) ?></td>
            </tr>
            <tr>
                <th><?= __('Material') ?></th>
                <td><?= h($product->material) ?></td>
            </tr>
            <tr>
                <th><?= __('Brand') ?></th>
                <td><?= h($product->brand) ?></td>
            </tr>
            <tr>
                <th><?= __('Style') ?></th>
                <td><?= h($product->style) ?></td>
                <!--                <td>-->
                <!--<? //= $product->has('style') ? $this->Html->link($product->style->id, ['controller' => 'Styles', 'action' => 'view', $product->style->id]) : '' ?>-->
                <!--</td>-->
            </tr>
            <tr>
                <th><?= __('Colour') ?></th>
                <td><?= h($product->colour) ?></td>
            </tr>
            <tr>
                <th><?= __('Size (cm)') ?></th>
                <td><?= h($product->size) ?></td>
            </tr>
            <tr>
                <th><?= __('Finish') ?></th>
                <td><?= h($product->finish) ?></td>
            </tr>
            <tr>
                <th><?= __('Manufacturer') ?></th>
                <td><?= h($product->manufacturing) ?></td>
            </tr>
            <!--<tr>
                <th><? /*= __('ID') */ ?></th>
                <td><? /*= $this->Number->format($product->id) */ ?></td>
            </tr>-->
            <tr>
                <th><?= __('Normal price') ?></th>
                <td><?= $this->Number->format($product->price) ?></td>
            </tr>
            <tr>
                <th><?= __('Units in stock') ?></th>
                <td><?= $this->Number->format($product->units_in_stock) ?></td>
            </tr>
            <tr>
                <th><?= __('Weight (kg)') ?></th>
                <td><?= $this->Number->format($product->weight) ?></td>
            </tr>
            <tr>
                <th><?= __('Sale price') ?></th>
                <td><?= $product->sale_price === null ? '' : $this->Number->format($product->sale_price) ?></td>
            </tr>
            <tr>
                <th><?= __('Wholesale price') ?></th>
                <td><?= $product->wholesale_price === null ? '' : $this->Number->format($product->wholesale_price) ?></td>
            </tr>
            <tr>
                <th><?= __('Images') ?></th>
                <td><?php foreach ($productImages as $productImage) {
                        echo $this->Html->image($productImage->description, ['alt' => 'CakePHP', 'class' => 'img-fluid', 'width' => 200, 'height' => 200]);
                    } ?></td>
            </tr>

        </table>
        <br>
        <div class="related">
            <?php if (!empty($product->orders)) : ?>
                <h4><?= __('Related orders') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                        <tr>
                            <!--<th><? /*= __('ID') */ ?></th>-->
                            <th><?= __('User') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->orders as $orders) : ?>
                            <tr>
                                <!--<td><? /*= h($orders->id) */ ?></td>-->
                                <td><?= h($orders->user_id) ?></td>
                                <td><?= $this->Number->format(h($orders->total)) ?></td>
                                <td><?= h($orders->created_at) ?></td>
                                <td><?= h($orders->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                    <!--<? /*= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) */ ?>-->
                                    <!--<? /*= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) */ ?>-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <div class="related">
            <?php if (!empty($product->order_items)) : ?>
                <h4><?= __('Related order items') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                        <tr>
                            <th data-visible="false"><?= __('ID') ?></th>
                            <th><?= __('Order ID') ?></th>
                            <th><?= __('Product ID') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->order_items as $orderItems) : ?>
                            <tr>
                                <td><?= h($orderItems->id) ?></td>
                                <td><?= h($orderItems->order_id) ?></td>
                                <td><?= h($orderItems->product_id) ?></td>
                                <td><?= h($orderItems->quantity) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>
                                    <?= $this->Form->postLink(
                                        __('Delete'),
                                        ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]
                                    )
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="related">
            <?php if (!empty($product->categories)) : ?>
                <h4><?= __('Related categories') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                        <tr>
                            <!--<th data-visible="false"><? /*= __('ID') */ ?></th>
                            <th><? /*= __('Parent ID') */ ?></th>-->
                            <th><?= __('Category') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->categories as $categories) : ?>
                            <tr>
                                <td><?= h($categories->description) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id],
                                        ['confirm' => __('Are you sure you want to delete category "{0}"?', $categories->description),
                                            'data-toggle' => "modal", 'data-target' => "#bootstrapModal"
                                        ]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
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

<script>
    $(document).ready(function () {
        $('#productTable').DataTable();
    });
</script>

