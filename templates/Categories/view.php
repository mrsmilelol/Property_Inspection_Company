<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($category->description) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Parent Category') ?></th>
                    <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->id, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($category->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($category->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($category->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Categories') ?></h4>
                <?php if (!empty($category->child_categories)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->child_categories as $childCategories) : ?>
                        <tr>
                            <td><?= h($childCategories->id) ?></td>
                            <td><?= h($childCategories->parent_id) ?></td>
                            <td><?= h($childCategories->description) ?></td>
                            <td><?= h($childCategories->created_at) ?></td>
                            <td><?= h($childCategories->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Product Categories') ?></h4>
                <?php if (!empty($category->product_categories)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->product_categories as $productCategories) : ?>
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
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($category->products)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Inventory Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Brand') ?></th>
                            <th><?= __('Style') ?></th>
                            <th><?= __('Colour') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->category_id) ?></td>
                            <td><?= h($products->inventory_id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->price) ?></td>
                            <td><?= h($products->material) ?></td>
                            <td><?= h($products->brand) ?></td>
                            <td><?= h($products->style) ?></td>
                            <td><?= h($products->colour) ?></td>
                            <td><?= h($products->created_at) ?></td>
                            <td><?= h($products->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
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
            $('#categoryTable').DataTable();
        } );
    </script>

