<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserType[]|\Cake\Collection\CollectionInterface $userTypes
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="userTypes index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('User Types') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New products</a>
    </div>
    <table class="table table-bordered" id="userTypes" width="100%" cellspacing="0">
        <thead>
        <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('Role') ?></th>
                    <th><?= h('created_at') ?></th>
                    <th><?= h('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userTypes as $userType): ?>
                <tr>
                    <td><?= $this->Number->format($userType->id) ?></td>
                    <td><?= h($userType->name) ?></td>
                    <td><?= h($userType->created_at) ?></td>
                    <td><?= h($userType->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <script>
        $(document).ready( function () {
            $('#userTypes').DataTable();
        } );
    </script>
</div>
