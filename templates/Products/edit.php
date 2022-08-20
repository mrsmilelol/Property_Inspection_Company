<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 * @var string[]|\Cake\Collection\CollectionInterface $productInventories
 */
$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Edit product') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create($product) ?>
                <?php
                    //echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    //echo $this->Form->control('inventory_id', ['options' => $productInventories, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('price', ['label'=>'Normal price']);
                    echo $this->Form->control('material');
                    echo $this->Form->control('brand');
                    echo $this->Form->control('style');
                    echo $this->Form->control('colour');
                    echo $this->Form->control('units_in_stock', ['label'=>'Units in stock']);
                    echo $this->Form->control('size', ['label'=>'Size (cm) (e.g. w-122.682 x d-122.7 x h-45.72)']);
                    echo $this->Form->control('weight', ['label'=>'Weight (kg)']);
                    echo $this->Form->control('finish');
                    echo $this->Form->control('sale_price', ['label'=>'Sale price']);
                    echo $this->Form->control('wholesale_price', ['label'=>'Wholesale price']);
                    echo $this->Form->control('manufacturing', ['label'=>'Manufacturer']);
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                ?>
        </table>
<br>
<br>
        <div class="related">
            <h4><?= __('Related order items') ?></h4>
            <?php if (!empty($product->order_items)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                     <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Order ID') ?></th>
                            <th><?= __('Product ID') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->order_items as $orderItems) : ?>
                            <tr>
                                <td><?= h($orderItems->id) ?></td>
                                <td><?= h($orderItems->order_id) ?></td>
                                <td><?= h($orderItems->product_id) ?></td>
                                <td><?= h($orderItems->quantity) ?></td>
                                <th data-visible="false"><?= h($orderItems->created_at) ?></td>
                                <th data-visible="false"><?= h($orderItems->modified_at) ?></td>
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
    <h4><?= __('Related product categories') ?></h4>
    <?php if (!empty($product->categories)) : ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('Category ID') ?></th>
                    <th><?= __('Product ID') ?></th>
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
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>
<br>
<div class="related">
    <h4><?= __('Related product images') ?></h4>
    <?php if (!empty($product->product_images)) : ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('Product ID') ?></th>
                    <th><?= __('Description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->product_images as $productImages) : ?>
                    <tr>
                        <td><?= h($productImages->id) ?></td>
                        <td><?= h($productImages->product_id) ?></td>
                        <td><?= h($productImages->description) ?></td>
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
    <h4><?= __('Related product reviews') ?></h4>
    <?php if (!empty($product->product_reviews)) : ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('User ID') ?></th>
                    <th><?= __('Product ID') ?></th>
                    <th><?= __('Description') ?></th>
                    <th><?= __('Rating') ?></th>
                    <th><?= __('Created at') ?></th>
                    <th><?= __('Modified at') ?></th>
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
    <h4><?= __('Related shopping sessions') ?></h4>
    <?php if (!empty($product->shopping_sessions)) : ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('User ID') ?></th>
                    <th><?= __('Product ID') ?></th>
                    <th><?= __('Quantity') ?></th>
                    <th><?= __('Created at') ?></th>
                    <th><?= __('Modified at') ?></th>
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
            <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
