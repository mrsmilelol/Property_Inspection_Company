<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
?>
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Users') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add new user</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th data-visible="false"><?= h('ID') ?></th>
                    <th><?= h('Username') ?></th>
                    <th><?= h('First name') ?></th>
                    <th><?= h('Last name') ?></th>
                    <th data-visible="false"><?= h('Phone') ?></th>
                    <th><?= h('Email') ?></th>
                    <th><?= h('Role') ?></th>
                    <?php $userMaster = $this->request->getSession()->read('Auth.master') ?>
                    <!-- Only displays Change access level button if user has access at top level -->
                    <?php if ($userMaster == 1) : ?>
                    <th><?= h('Change status') ?></th>
                    <th><?= h('Change access level') ?></th>
                    <?php endif; ?>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->firstname) ?></td>
                        <td><?= h($user->lastname) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>

                        <!-- Only displays if user has access at top level -->
                        <?php $userID = $this->request->getSession()->read('Auth.id') ?>
                        <?php if ($userMaster == 1) : ?>
                        <?php if ($user->id !== $userID) : ?>
                        <td>
                            <?php if ($user->status == 1) : ?>
                                <?= $this->Form->postLink(
                                    __('Deactivate'),
                                    ['action' => 'userStatus', $user->id, $user->status],
                                    ['block' => true,
                                        'confirm' => __('Are you sure you want to deactivate this user # {0}? This user will no longer be able to access the system.',
                                            $user->username)]
                                ) ?>
                            <?php else : ?>
                                <?= $this->Form->postLink(
                                    __('Activate'),
                                    ['action' => 'userStatus', $user->id, $user->status],
                                    ['block' => true,
                                        'confirm' => __('Are you sure you want to activate this user # {0}? This user will now be able to access the system.',
                                            $user->username)]
                                ) ?>
                            <?php endif; ?>
                        </td>
                        <?php else : ?>
                        <td></td>
                        <?php endif; endif;?>

                        <!-- Only displays if user has access at top level -->
                        <?php if ($userMaster == 1) : ?>
                            <?php if ($user->user_type_id == 1 and $user->id !== $userID) : ?>
                            <td>
                                <?php if ($user->master == 1) : ?>
                                    <?= $this->Form->postLink(
                                        __('Downgrade'),
                                        ['action' => 'userMaster', $user->id, $user->master],
                                        ['block' => true, 'confirm' => __('Are you sure you want to downgrade this user # {0}?', $user->username)]
                                    ) ?>
                                <?php else : ?>
                                    <?= $this->Form->postLink(
                                        __('Upgrade'),
                                        ['action' => 'userMaster', $user->id, $user->master],
                                        ['block' => true, 'confirm' => __('Are you sure you want to upgrade this user # {0}?', $user->username)]
                                    ) ?>
                                <?php endif; ?>
                            </td>
                            <?php else : ?>
                            <td></td>
                            <?php endif; ?>
                        <?php endif; ?>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?php if ($userMaster == 1 or $user->user_type_id != 1 or $user->id == $userID) : ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->Form->end() ?>
            <?= $this->fetch('postLink'); ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    $(document).ready( function () {
        $('#products').DataTable();
    } );
</script>
