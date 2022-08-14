<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductReview $productReview
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);
?>
    <div class="column-responsive column-80">
        <div class="productReviews view content">
            <h3><?= h($productReview->product->name) ?></h3>
            <table class="table table-bordered" id="productReviewsTable" width="100%" cellspacing="0">
            <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $productReview->has('user') ? $this->Html->link($productReview->user->id, ['controller' => 'Users', 'action' => 'view', $productReview->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productReview->has('product') ? $this->Html->link($productReview->product->name, ['controller' => 'Products', 'action' => 'view', $productReview->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($productReview->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productReview->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $this->Number->format($productReview->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($productReview->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($productReview->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#productReviewsTable').DataTable();
        } );
    </script>

