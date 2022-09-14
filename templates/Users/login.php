<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->layout = 'logged_out';
?>
<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Please enter your email and password') ?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link('Forgot password?', ['action' => 'password_reset'], ['class' => 'button float-right']) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>

