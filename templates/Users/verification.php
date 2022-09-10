<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Thank your email has been verified') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create() ?>
            <br>
            <?= $this->Form->button(__('Continue'), ['controller' => 'users', 'action' => 'login', 'prefix' => 'false', 'class' => 'btn btn-primary'])?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
