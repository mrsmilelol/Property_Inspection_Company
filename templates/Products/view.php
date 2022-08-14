<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
        <div class="products view content">
            <h3 ><?= h($product->name) ?></h3>
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->description, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Inventory') ?></th>
                    <td><?= $product->has('product_inventory') ? $this->Html->link($product->product_inventory->product_name, ['controller' => 'ProductInventories', 'action' => 'view', $product->product_inventory->id]) : '' ?></td>
                </tr>
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
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($product->price) ?></td>
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
            <br>
            <div class="related">
                <h4><?= __('Related Order Items') ?></h4>
                <?php if (!empty($product->order_items)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
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
            <br>
            <div class="related">
                <h4><?= __('Related Product Categories') ?></h4>
                <?php if (!empty($product->product_categories)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_categories as $productCategories) : ?>
                        <tr>
                            <td><?= h($productCategories->id) ?></td>
                            <td><?= h($productCategories->category) ?></td>
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
            <br>
            <div class="related">
                <h4><?= __('Related Product Images') ?></h4>
                <?php if (!empty($product->product_images)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->product_images as $productImages) : ?>
                        <tr>
                            <td><?= h($productImages->id) ?></td>
                            <td><?= h($productImages->product_id) ?></td>
                            <td><?= h($productImages->description) ?></td>
                            <td><?= h($productImages->created_at) ?></td>
                            <td><?= h($productImages->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductImages', 'action' => 'view', $productImages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductImages', 'action' => 'edit', $productImages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductImages', 'action' => 'delete', $productImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <br>
            <div class="related">
                <h4><?= __('Related Product Reviews') ?></h4>
                <?php if (!empty($product->product_reviews)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
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
            <br>
            <div class="related">
                <h4><?= __('Related Shopping Sessions') ?></h4>
                <?php if (!empty($product->shopping_sessions)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->shopping_sessions as $shoppingSessions) : ?>
                        <tr>
                            <td><?= h($shoppingSessions->id) ?></td>
                            <td><?= h($shoppingSessions->user_id) ?></td>
                            <td><?= h($shoppingSessions->product_id) ?></td>
                            <td><?= h($shoppingSessions->quantity) ?></td>
                            <td><?= h($shoppingSessions->created_at) ?></td>
                            <td><?= h($shoppingSessions->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ShoppingSessions', 'action' => 'view', $shoppingSessions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ShoppingSessions', 'action' => 'edit', $shoppingSessions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShoppingSessions', 'action' => 'delete', $shoppingSessions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingSessions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
<script>
    $(document).ready( function () {
        $('#productTable').DataTable();
    } );
</script>

