<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShoppingSession $shoppingSession
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <div class="column-responsive column-80">
        <div class="shoppingSessions view content">
            <h3><?= h($shoppingSession->id) ?></h3>
            <table class="table table-bordered" id="shoppingSessionTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $shoppingSession->has('user') ? $this->Html->link($shoppingSession->user->username, ['controller' => 'Users', 'action' => 'view', $shoppingSession->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $shoppingSession->has('product') ? $this->Html->link($shoppingSession->product->name, ['controller' => 'Products', 'action' => 'view', $shoppingSession->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($shoppingSession->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $shoppingSession->quantity === null ? '' : $this->Number->format($shoppingSession->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($shoppingSession->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($shoppingSession->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
<script>
    $(document).ready( function () {
        $('#shoppingSessionTable').DataTable();
    } );
</script>
