<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}> {{value}}</textarea>',
];
$this->Form->setTemplates($formTemplate);

//$this->layout = 'logged_out';
$this->layout = 'front';
?>

<!-- Account Area Start -->
<div class="account-area section-padding2">
    <div class="container" style="display: flex; justify-content: center">
        <div class="row" style="width: 100vmin">
            <div class="account-details">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="#" class="login-form" method="post">
                        <h1 class="heading-title"><?= __('Please enter your username and password') ?></h1>
                        <p class="form-row">
                            <?= $this->Form->create() ?>
                        <fieldset>
                            <?= $this->Form->control('username', ['id' => 'maxWidth']) ?>
                            <?= $this->Form->control('password', ['id' => 'maxWidth']) ?>
                        </fieldset>

                        <p class="lost-password form-group">Don't have an account?
                            <?= $this->Html->link('Sign up', ['action' => 'sign_up'], ['class' => 'button float-right']) ?>
                        </p>
                        <div class="form-row">
                            <div class="col-md-3 mb-3" style="padding-left: 0">
                                <p class="submit">
                                    <?= $this->Form->button(__('Login'), [
                                        'type' => 'submit',
                                        'id' => 'submitlogin',
                                        'name' => 'SubmitLogin',
                                        'class' => '',
                                    ]); ?>
                                </p>
                            </div>
                            <div style="display: flex; justify-content:flex-end">
                                <?= $this->Html->link('Forgot your password?', ['action' => 'password_reset', 'id' => 'forgot_password'], ['class' => 'submit ']) ?>
                            </div>
                        </div>
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
