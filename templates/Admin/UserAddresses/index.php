<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress[]|\Cake\Collection\CollectionInterface $userAddresses
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
$userMaster = $this->request->getSession()->read('Auth.master');
$userID = $this->request->getSession()->read('Auth.id');

?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('User addresses') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new user address</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('id') ?></th>
                    <th><?= h('User') ?></th>
                    <th><?= h('Address line 1') ?></th>
                    <th><?= h('Address line 2') ?></th>
                    <th><?= h('City') ?></th>
                    <th><?= h('Country') ?></th>
                    <th><?= h('State') ?></th>
                    <th><?= h('Postcode') ?></th>
                    <th data-visible="false"><?= h('created_at') ?></th>
                    <th data-visible="false"><?= h('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($userAddresses as $userAddress) : ?>
                    <tr>
                        <td><?= $this->Number->format($userAddress->id) ?></td>
                        <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->username, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                        <td><?= h($userAddress->address_line_1) ?></td>
                        <td><?= h($userAddress->address_line_2) ?></td>
                        <td><?= h($userAddress->city) ?></td>
                        <td><?= h($userAddress->country) ?></td>
                        <td><?= h($userAddress->state) ?></td>
                        <td><?= h($userAddress->postcode) ?></td>
                        <td><?= h($userAddress->created_at) ?></td>
                        <td><?= h($userAddress->modified_at) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $userAddress->id]) ?>
                            <?php if ($userMaster == 1 || $userAddress->user_id == $userID || $userAddress->user->user_type_id !== 1) : ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userAddress->id]) ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#products').DataTable();
    });
</script>
