<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductReview $productReview
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productReview->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Product Reviews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productReviews form content">
            <?= $this->Form->create($productReview) ?>
            <fieldset>
                <legend><?= __('Edit Product Review') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('product_id', ['options' => $products, 'empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('rating');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
