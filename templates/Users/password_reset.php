<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//$this->layout = 'logged_out';
$this->layout = 'front';
?>
<!-- Account Area Start -->
<div class="account-area section-padding2">
    <div class="container" style="display: flex; justify-content: center">
        <div class="row">
            <div class="account-details">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="#" class="login-form" method="post">
                        <h1 class="heading-title"><?= __('Please enter your email to receive a link to reset password') ?></h1>
                        <p class="form-row">
                            <?= $this->Form->create() ?>
                        <fieldset>
                            <?php echo $this->Form->control('email', ['id' => 'maxWidth']); ?>
                        </fieldset>
                        <br>

                        <p class="submit">
                            <?= $this->Form->button(__('Submit'), [
                                'controller' => 'products', 'action' => 'index',
                                'type' => 'submit',
                                'id' => 'submitlogin',
                                'name' => 'SubmitLogin',
                                'class' => '',
                            ]); ?>
                        </p>
                        <?= $this->Form->end() ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account Area End -->
<style>
    #maxWidth {
        max-width: 100%;
    }
</style>
