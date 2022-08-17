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
            </tr>
            <tr>
                <th><?= __('Colour') ?></th>
                <td><?= h($product->colour) ?></td>
            </tr>
            <tr>
                <th><?= __('Size') ?></th>
                <td><?= h($product->size) ?></td>
            </tr>
            <tr>
                <th><?= __('Finish') ?></th>
                <td><?= h($product->finish) ?></td>
            </tr>
            <tr>
                <th><?= __('Manufacturing') ?></th>
                <td><?= h($product->manufacturing) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Price') ?></th>
                <td><?= $this->Number->format($product->price) ?></td>
            </tr>
            <tr>
                <th><?= __('Units In Stock') ?></th>
                <td><?= $this->Number->format($product->units_in_stock) ?></td>
            </tr>
            <tr>
                <th><?= __('Weight') ?></th>
                <td><?= $this->Number->format($product->weight) ?></td>
            </tr>
            <tr>
                <th><?= __('Wholesale Price') ?></th>
                <td><?= $product->wholesale_price === null ? '' : $this->Number->format($product->wholesale_price) ?></td>
            </tr>
            <tr>
                <th><?= __('Sale Price') ?></th>
                <td><?= $product->sale_price === null ? '' : $this->Number->format($product->sale_price) ?></td>
            </tr>
            <tr>
                <th><?= __('Images') ?></th>
                <td><?php foreach ($productImages as $productImage) {
                        echo $this->Html->image($productImage->description, ['alt' => 'CakePHP','class' => 'img-fluid','width' => 200, 'height' => 200]);
                    } ?></td>
            </tr>
            <tr>
                <th><?= __('Created At') ?></th>
                <td><?= h($product->created_at) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified At') ?></th>
                <td><?= h($product->modified_at) ?></td>
            </tr>

        </table>
        <div class="related">
            <h4><?= __('Related Order Items') ?></h4>
            <?php if (!empty($product->order_items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->order_items as $orderItems) : ?>
                            <tr>
                                <td><?= h($orderItems->id) ?></td>
                                <td><?= h($orderItems->order_id) ?></td>
                                <td><?= h($orderItems->product_id) ?></td>
                                <td><?= h($orderItems->quantity) ?></td>
                                <td><?= h($orderItems->created_at) ?></td>
                                <td><?= h($orderItems->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Product Categories') ?></h4>
            <?php if (!empty($product->product_categories)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_categories as $productCategories) : ?>
                            <tr>
                                <td><?= h($productCategories->id) ?></td>
                                <td><?= h($productCategories->category_id) ?></td>
                                <td><?= h($productCategories->product_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ProductCategories', 'action' => 'view', $productCategories->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductCategories', 'action' => 'edit', $productCategories->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductCategories', 'action' => 'delete', $productCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategories->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Product Reviews') ?></h4>
            <?php if (!empty($product->product_reviews)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_reviews as $productReviews) : ?>
                            <tr>
                                <td><?= h($productReviews->id) ?></td>
                                <td><?= h($productReviews->user_id) ?></td>
                                <td><?= h($productReviews->product_id) ?></td>
                                <td><?= h($productReviews->description) ?></td>
                                <td><?= h($productReviews->rating) ?></td>
                                <td><?= h($productReviews->created_at) ?></td>
                                <td><?= h($productReviews->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ProductReviews', 'action' => 'view', $productReviews->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductReviews', 'action' => 'edit', $productReviews->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductReviews', 'action' => 'delete', $productReviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReviews->id)]) ?>
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

