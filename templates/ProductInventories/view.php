<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductInventory $productInventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Inventory'), ['action' => 'edit', $productInventory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Inventory'), ['action' => 'delete', $productInventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productInventory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Inventories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Inventory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productInventories view content">
            <h3><?= h($productInventory->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($productInventory->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productInventory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Quantity') ?></th>
                    <td><?= $this->Number->format($productInventory->product_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($productInventory->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($productInventory->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
