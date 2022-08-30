<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($userAddress->user->username) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userAddress->has('user') ? $this->Html->link($userAddress->user->id, ['controller' => 'Users', 'action' => 'view', $userAddress->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 1') ?></th>
                    <td><?= h($userAddress->address_line_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Line 2') ?></th>
                    <td><?= h($userAddress->address_line_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($userAddress->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($userAddress->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($userAddress->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= h($userAddress->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userAddress->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($userAddress->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($userAddress->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
<script>
    $(document).ready( function () {
        $('#userAddressTable').DataTable();
    } );
</script>
