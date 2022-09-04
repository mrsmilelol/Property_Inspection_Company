<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Style $style
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Style'), ['action' => 'edit', $style->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Style'), ['action' => 'delete', $style->id], ['confirm' => __('Are you sure you want to delete # {0}?', $style->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Styles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Style'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="styles view content">
            <h3><?= h($style->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($style->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($style->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($style->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($style->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($style->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Brand') ?></th>
                            <th><?= __('Colour') ?></th>
                            <th><?= __('Units In Stock') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Finish') ?></th>
                            <th><?= __('Wholesale Price') ?></th>
                            <th><?= __('Sale Price') ?></th>
                            <th><?= __('Manufacturing') ?></th>
                            <th><?= __('Style Id') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($style->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->price) ?></td>
                            <td><?= h($products->material) ?></td>
                            <td><?= h($products->brand) ?></td>
                            <td><?= h($products->colour) ?></td>
                            <td><?= h($products->units_in_stock) ?></td>
                            <td><?= h($products->size) ?></td>
                            <td><?= h($products->weight) ?></td>
                            <td><?= h($products->finish) ?></td>
                            <td><?= h($products->wholesale_price) ?></td>
                            <td><?= h($products->sale_price) ?></td>
                            <td><?= h($products->manufacturing) ?></td>
                            <td><?= h($products->style_id) ?></td>
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
</div>
