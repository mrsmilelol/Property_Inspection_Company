<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
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
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($user->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
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
                    <th><?= __('User Type') ?></th>
                    <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($user->modified_at) ?></td>
                </tr>
            </table>
            <br>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($user->orders)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->user_id) ?></td>
                            <td><?= h($orders->total) ?></td>
                            <td><?= h($orders->created_at) ?></td>
                            <td><?= h($orders->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <br>
            <div class="related">
                <h4><?= __('Related Payments') ?></h4>
                <?php if (!empty($user->payments)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Payment Type') ?></th>
                            <th><?= __('Provider') ?></th>
                            <th><?= __('Account No') ?></th>
                            <th><?= __('Security No') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
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
                <h4><?= __('Related Product Reviews') ?></h4>
                <?php if (!empty($user->product_reviews)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->product_reviews as $productReviews) : ?>
                        <tr>
                            <td><?= h($productReviews->id) ?></td>
                            <td><?= h($productReviews->user_id) ?></td>
                            <td><?= h($productReviews->product_id) ?></td>
                            <td><?= h($productReviews->description) ?></td>
                            <td><?= h($productReviews->rating) ?></td>
                            <td><?= h($productReviews->created_at) ?></td>
                            <td><?= h($productReviews->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductReviews', 'action' => 'view', $productReviews->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductReviews', 'action' => 'edit', $productReviews->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductReviews', 'action' => 'delete', $productReviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReviews->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <br>
            <div class="related">
                <h4><?= __('Related Shopping Sessions') ?></h4>
                <?php if (!empty($user->shopping_sessions)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->shopping_sessions as $shoppingSessions) : ?>
                        <tr>
                            <td><?= h($shoppingSessions->id) ?></td>
                            <td><?= h($shoppingSessions->user_id) ?></td>
                            <td><?= h($shoppingSessions->product_id) ?></td>
                            <td><?= h($shoppingSessions->quantity) ?></td>
                            <td><?= h($shoppingSessions->created_at) ?></td>
                            <td><?= h($shoppingSessions->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ShoppingSessions', 'action' => 'view', $shoppingSessions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ShoppingSessions', 'action' => 'edit', $shoppingSessions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShoppingSessions', 'action' => 'delete', $shoppingSessions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingSessions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <br>
            <div class="related">
                <h4><?= __('Related User Addresses') ?></h4>
                <?php if (!empty($user->user_addresses)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="userTable" width="100%" cellspacing="0">
                    <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Address Line 1') ?></th>
                            <th><?= __('Address Line 2') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Postcode') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_addresses as $userAddresses) : ?>
                        <tr>
                            <td><?= h($userAddresses->id) ?></td>
                            <td><?= h($userAddresses->user_id) ?></td>
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
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserAddresses', 'action' => 'edit', $userAddresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserAddresses', 'action' => 'delete', $userAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userAddresses->id)]) ?>
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
        $('#userTable').DataTable();
    } );
</script>
