<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Style $style
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $style->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $style->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Styles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="styles form content">
            <?= $this->Form->create($style) ?>
            <fieldset>
                <legend><?= __('Edit Style') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
