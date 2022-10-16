<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js', ['block' => true]);
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= h($store->id) ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="productTable" width="100%" cellspacing="0">
            <tr>
                <th><?= __('Address') ?></th>
                <td><?= h($store->address) ?></td>
            </tr>
            <tr>
                <th><?= __('Suburb') ?></th>
                <td><?= h($store->suburb) ?></td>
            </tr>
            <tr>
                <th><?= __('City') ?></th>
                <td><?= h($store->city) ?></td>
            </tr>
            <tr>
                <th><?= __('Country') ?></th>
                <td><?= h($store->country) ?></td>
            </tr>
            <tr>
                <th><?= __('State') ?></th>
                <td><?= h($store->state) ?></td>
            </tr>
            <tr>
                <th><?= __('Postcode') ?></th>
                <td><?= h($store->post_code) ?></td>
            </tr>
            <tr>
                <th><?= __('ID') ?></th>
                <td><?= $this->Number->format($store->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Created at') ?></th>
                <td><?= h($store->created_at) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified at') ?></th>
                <td><?= h($store->modified_at) ?></td>
            </tr>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#storeTable').DataTable();
    });
</script>
