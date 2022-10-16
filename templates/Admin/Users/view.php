<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
$userMaster = $this->request->getSession()->read('Auth.master');
$userID = $this->request->getSession()->read('Auth.id');
?>

<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($user->username) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('Username') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th><?= __('First name') ?></th>
                <td><?= h($user->firstname) ?></td>
            </tr>
            <tr>
                <th><?= __('Last name') ?></th>
                <td><?= h($user->lastname) ?></td>
            </tr>
            <tr>
                <th><?= __('Phone') ?></th>
                <td><?= h($user->phone) ?></td>
            </tr>
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th><?= __('User type') ?></th>
                <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Created at') ?></th>
                <td><?= h($user->created_at) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified at') ?></th>
                <td><?= h($user->modified_at) ?></td>
            </tr>
        </table>
        <br>
        <div class="related">
            <?php if (!empty($user->orders)) : ?>
            <h4><?= __('Related orders') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Order no.') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->orders as $orders) : ?>
                            <tr>
                                <td><?= h($orders->id) ?></td>
                                <td><?= $this->Number->format(h($orders->total)) ?></td>
                                <td><?= h($orders->created_at) ?></td>
                                <td><?= h($orders->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <div class="related">
            <?php if (!empty($user->payments)) : ?>
                <h4><?= __('Related payments') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('User ID') ?></th>
                            <th><?= __('Payment type') ?></th>
                            <th><?= __('Provider') ?></th>
                            <th><?= __('Account no.') ?></th>
                            <th><?= __('Security no.') ?></th>
                            <th><?= __('Expiry date') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->payments as $payments) : ?>
                            <tr>
                                <td><?= h($payments->id) ?></td>
                                <td><?= h($payments->user_id) ?></td>
                                <td><?= h($payments->payment_type) ?></td>
                                <td><?= h($payments->provider) ?></td>
                                <td><?= h($payments->account_no) ?></td>
                                <td><?= h($payments->security_no) ?></td>
                                <td><?= h($payments->expiry_date) ?></td>
                                <td><?= h($payments->created_at) ?></td>
                                <td><?= h($payments->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <div class="related">
            <?php if (!empty($user->user_addresses)) : ?>
            <h4><?= __('Related user addresses') ?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Address line 1') ?></th>
                            <th><?= __('Address line 2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('Created at') ?></th>
                            <th><?= __('Modified at') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_addresses as $userAddresses) : ?>
                            <tr>
                                <td><?= h($userAddresses->address_line_1) ?></td>
                                <td><?= h($userAddresses->address_line_2) ?></td>
                                <td><?= h($userAddresses->city) ?></td>
                                <td><?= h($userAddresses->country) ?></td>
                                <td><?= h($userAddresses->state) ?></td>
                                <td><?= h($userAddresses->postcode) ?></td>
                                <td><?= h($userAddresses->created_at) ?></td>
                                <td><?= h($userAddresses->modified_at) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'UserAddresses', 'action' => 'view', $userAddresses->id]) ?>
                                    <?php if ($userMaster == 1 || $user->id == $userID || $user->user_type_id !== 1) : ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddresses->id]) ?>
                                    <?php endif; ?>
                                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddresses->id)]) ?>-->
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
    $(document).ready(function () {
        $('#userTable').DataTable();
    });
</script>
