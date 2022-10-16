<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserType[]|\Cake\Collection\CollectionInterface $userTypes
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('User types') ?></h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
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
                <?php foreach ($userTypes as $userType) : ?>
                    <tr>
                        <td><?= $this->Number->format($userType->id) ?></td>
                        <td><?= h($userType->name) ?></td>
                        <td><?= h($userType->created_at) ?></td>
                        <td><?= h($userType->modified_at) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $userType->id]) ?>
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
    $(document).ready(function () {
        $('#products').DataTable();
    });
</script>
