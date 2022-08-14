<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="products index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Stores') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New stores</a>
    </div>
    <table class="table table-bordered" id="stores" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Address') ?></th>
                    <th><?= h('Suburb') ?></th>
                    <th><?= h('City') ?></th>
                    <th><?= h('Country') ?></th>
                    <th><?= h('State') ?></th>
                    <th><?= h('Post_code') ?></th>
                    <th><?= h('Phone') ?></th>
                    <th data-visible="false"><?= h('created_at') ?></th>
                    <th data-visible="false"><?= h('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stores as $store): ?>
                <tr>
                    <td><?= $this->Number->format($store->id) ?></td>
                    <td><?= h($store->address) ?></td>
                    <td><?= h($store->suburb) ?></td>
                    <td><?= h($store->city) ?></td>
                    <td><?= h($store->country) ?></td>
                    <td><?= h($store->state) ?></td>
                    <td><?= h($store->post_code) ?></td>
                    <td><?= h($store->phone) ?></td>
                    <td><?= h($store->created_at) ?></td>
                    <td><?= h($store->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $store->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script>
            $(document).ready( function () {
                $('#stores').DataTable();
            } );
        </script>
</div>
