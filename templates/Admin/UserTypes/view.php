<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserType $userType
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>

<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($userType->name) ?></h1>
        <?php $userMaster = $this->request->getSession()->read('Auth.master') ?>
        <?php $userID = $this->request->getSession()->read('Auth.id') ?>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($userType->name) ?></td>
                </tr>
                <!--<tr>
                    <th><?/*= __('ID') */?></th>
                    <td><?/*= $this->Number->format($userType->id) */?></td>
                </tr>-->
                <tr>
                    <th><?= __('Created at') ?></th>
                    <td><?= h($userType->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified at') ?></th>
                    <td><?= h($userType->modified_at) ?></td>
                </tr>
            </table>
            <br>
            <div class="related">
                <h4><?= __('Related users') ?></h4>
                <?php if (!empty($userType->users)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTypeTable" width="100%" cellspacing="0">
                    <tr>
                            <!--<th><?/*= __('ID') */?></th>-->
                            <th><?= __('Username') ?></th>
                            <th><?= __('First name') ?></th>
                            <th><?= __('Last name') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <!--<th><?/*= __('User type ID') */?></th>-->
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($userType->users as $users) : ?>
                        <tr>
                            <!--<td><?/*= h($users->id) */?></td>-->
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->firstname) ?></td>
                            <td><?= h($users->lastname) ?></td>
                            <td><?= h($users->phone) ?></td>
                            <td><?= h($users->email) ?></td>
                            <!--<td><?/*= h($users->user_type_id) */?></td>-->
                            <td><?= h($users->created_at) ?></td>
                            <td><?= h($users->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?php if ($userMaster == 1 or $users->user_type_id != 1 or $users->id == $userID) : ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?php endif; ?>
                                <!--<?/*= $this->Form->postLink(__('Delete'), [
                                    'controller' => 'Users',
                                    'action' => 'delete', $users->id
                                ],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) */?>-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<script>
    $(document).ready( function () {
        $('#userTypeTable').DataTable();
    } );
</script>
