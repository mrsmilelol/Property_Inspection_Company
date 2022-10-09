<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CancelledOrder $cancelledOrder
 * @var \App\Model\Entity\Order $order
 */

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}> {{value}}</textarea>'
];
$this->Form->setTemplates($formTemplate);

$this->layout = 'front';

/*debug($cancelledOrder);
exit;*/
?>


<div class="account-area section-padding2">
    <div class="align-items-center" style="display: flex; justify-content: center">
        <div class="row" style="width: 100vmin;">
            <div class="col-md-12">
                <h1 class="heading-title"><?= __('Cancel your order No.'.h($order->id)) ?></h1>
            </div>
            <div class="account-details">
                <div class="col-lg-6 col-sm-6" style="width: 100%">
                    <form action="#" class="create-account-form" method="post">
                        <!--                        <h1 class="heading-title">Create an account</h1>-->
                        <p class="form-row">
                            <?= $this->Form->create($cancelledOrder) ?>
                        <fieldset>
                            <?php

                            echo $this->Form->control('reason', [
                                'label' => ['text'=>'Reason for cancelling the order','class' => 'required'],
                                'id' => 'maxWidth', 'type' => 'textarea', 'rows' => '5']);
                            //echo $this->Form->control('status');
                            //echo $this->Form->control('created_at');
                            //echo $this->Form->control('modified_at');
                            ?>
                        </fieldset>
                        <br>
                        <p class="submit">
                            <!--<button type="submit" id="submitlogin" name="SubmitLogin" class="">
                                <span><i class="fa fa-lock"></i>Sign In</span>
                            </button>-->
                            <?= $this->Form->button(__('Submit'), [
                                'type' => 'submit',
                                'id' => 'submitlogin',
                                'name' => 'SubmitLogin',
                                'class' => ''
                            ]) ?>
                        </p>
                        <?= $this->Form->end() ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #maxWidth{max-width: 100%;
    }
</style>
