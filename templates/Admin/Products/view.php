<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $productImages
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
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
<!--                <td>--><!--<?//= $product->has('style') ? $this->Html->link($product->style->id, ['controller' => 'Styles', 'action' => 'view', $product->style->id]) : '' ?>--><!--</td>-->
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
            <tr>
                <th><?= __('ID') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
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
                        echo $this->Html->image($productImage->description, ['alt' => 'CakePHP','class' => 'img-fluid','width' => 200, 'height' => 200]);
                    } ?></td>
            </tr>

        </table>
        <br>
        <div class="related">
            <h4><?= __('Related order items') ?></h4>
            <?php if (!empty($product->order_items)) : ?>
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
<!--                                    --><!--<?//= $this->Form->postLink(__('Delete'),
//                                        ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id],
//                                        ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)])
//                                    ?>-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related categories') ?></h4>
            <?php if (!empty($product->categories)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                        <tr>
                            <th data-visible="false"><?= __('ID') ?></th>
                            <th><?= __('Parent ID') ?></th>
                            <th><?= __('Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->categories as $categories) : ?>
                            <tr>
                                <td><?= h($categories->id) ?></td>
                                <td><?= h($categories->parent_id) ?></td>
                                <td><?= h($categories->description) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
<!--                                    --><!--<?//= $this->Form->postLink(__('Delete'),
//                                        ['controller' => 'Categories', 'action' => 'delete', $categories->id],
//                                        ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)])
//                                    ?>-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#productTable').DataTable();
    } );
</script>

