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
                    <th><?= __('Parent category') ?></th>
                    <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->description, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($category->description) ?></td>
                </tr>
                <!--<tr>
                    <th><?/*= __('ID') */?></th>
                    <td><?/*= $this->Number->format($category->id) */?></td>
                </tr>-->
                <tr>
                    <th><?= __('Created at') ?></th>
                    <td><?= h($category->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified at') ?></th>
                    <td><?= h($category->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php if (!empty($category->child_categories)) : ?>
                <h4><?= __('Related subcategories') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                    <tr>
                            <!--<th><?/*= __('ID') */?></th>
                            <th><?/*= __('Parent ID') */?></th>-->
                            <th><?= __('Subcategory') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->child_categories as $childCategories) : ?>
                        <tr>
                            <!--<td><?/*= h($childCategories->id) */?></td>
                            <td><?/*= h($childCategories->parent_id) */?></td>-->
                            <td><?= h($childCategories->description) ?></td>
                            <td><?= h($childCategories->created_at) ?></td>
                            <td><?= h($childCategories->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
<!--                                --><!--<?//= $this->Form->postLink(__('Delete'),
//                                    ['controller' => 'Categories', 'action' => 'delete', $childCategories->id],
//                                    ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)])
//                                ?>-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <br>
            <div class="related">
            <?php if (!empty($category->products)) : ?>
                <h4><?= __('Related products') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="categoryTable" width="100%" cellspacing="0">
                        <tr>
                            <!--<th><?/*= __('ID') */?></th>-->
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Normal price') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Brand') ?></th>
                            <th><?= __('Style') ?></th>
                            <th><?= __('Colour') ?></th>
                            <th><?= __('Units in stock') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Finish') ?></th>
                            <th><?= __('Sale price') ?></th>
                            <th><?= __('Wholesale price') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->products as $products) : ?>
                            <tr>
                                <!--<td><?/*= h($products->id) */?></td>-->
                                <td><?= h($products->name) ?></td>
                                <td><?= h($products->description) ?></td>
                                <td><?= $this->Number->format(h($products->price)) ?></td>
                                <td><?= h($products->material) ?></td>
                                <td><?= h($products->brand) ?></td>
                                <td><?= h($products->style) ?></td>
                                <td><?= h($products->colour) ?></td>
                                <td><?= h($products->units_in_stock) ?></td>
                                <td><?= h($products->size) ?></td>
                                <td><?= h($products->weight) ?></td>
                                <td><?= h($products->finish) ?></td>
                                <td><?= $this->Number->format(h($products->sale_price)) ?></td>
                                <td><?= $this->Number->format(h($products->wholesale_price)) ?></td>
                                <td><?= h($products->manufacturing) ?></td>
                                <td><?= h($products->created_at) ?></td>
                                <td><?= h($products->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
<!--                                    --><!--<?//= $this->Form->postLink(__('Delete'),
//                                        ['controller' => 'Products', 'action' => 'delete', $products->id],
//                                        ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)])
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
            $('#categoryTable').DataTable();
        } );
    </script>

