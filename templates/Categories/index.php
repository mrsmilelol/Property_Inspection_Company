<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="d-sm-flex align-items-center justify-content-between card-header">
            <h1 class="h3 mb-0 text-gray-800"><?= __('Categories') ?></h1>
            <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add new categories</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= h('ID') ?></th>
                            <th><?= h('Parent Category') ?></th>
                            <th><?= h('Subcategory') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= $this->Number->format($category->id) ?></td>
                            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->description, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                            <td><?= h($category->description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <script>
        $(document).ready( function () {
            $('#products').DataTable();
        } );
    </script>
