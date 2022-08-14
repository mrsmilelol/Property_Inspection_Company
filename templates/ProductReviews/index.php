<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductReview[]|\Cake\Collection\CollectionInterface $productReviews
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="productReviews index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Product Reviews') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New review</a>
    </div>
    <table class="table table-bordered" id="productReviews" width="100%" cellspacing="0">
        <thead>
                <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('User ID') ?></th>
                    <th><?= h('Product ID') ?></th>
                    <th><?= h('Description') ?></th>
                    <th><?= h('User Rating') ?></th>
                    <th data-visible="false"><?= h('created_at') ?></th>
                    <th data-visible="false"><?= h('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productReviews as $productReview): ?>
                <tr>
                    <td><?= $this->Number->format($productReview->id) ?></td>
                    <td><?= $productReview->has('user') ? $this->Html->link($productReview->user->id, ['controller' => 'Users', 'action' => 'view', $productReview->user->id]) : '' ?></td>
                    <td><?= $productReview->has('product') ? $this->Html->link($productReview->product->name, ['controller' => 'Products', 'action' => 'view', $productReview->product->id]) : '' ?></td>
                    <td><?= h($productReview->description) ?></td>
                    <td><?= $this->Number->format($productReview->rating) ?></td>
                    <td><?= h($productReview->created_at) ?></td>
                    <td><?= h($productReview->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productReview->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productReview->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReview->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <script>
        $(document).ready( function () {
            $('#productReviews').DataTable();
        } );
    </script>
</div>
