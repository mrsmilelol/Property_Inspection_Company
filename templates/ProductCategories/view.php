<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductCategory $productCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Category'), ['action' => 'edit', $productCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Category'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productCategories view content">
            <h3><?= h($productCategory->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->id, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productCategory->has('product') ? $this->Html->link($productCategory->product->name, ['controller' => 'Products', 'action' => 'view', $productCategory->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productCategory->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
