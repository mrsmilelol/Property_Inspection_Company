<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WholesaleRequest $wholesaleRequest
 */

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}> {{value}}</textarea>',
];
$this->Form->setTemplates($formTemplate);

$this->layout = 'front';
?>
<!-- Account Area Start -->
<div class="account-area section-padding2">
    <div class="align-items-center" style="display: flex; justify-content: center">
        <div class="row" style="width: 100vmin;">
            <div class="col-md-12">
                <h1 class="heading-title"><?= __('Apply for wholesale account') ?></h1>
            </div>
            <div class="account-details">
                <div class="col-lg-6 col-sm-6" style="width: 100%">
                    <form action="#" class="create-account-form" method="post">
                        <!--                        <h1 class="heading-title">Create an account</h1>-->
                        <p class="form-row">
                            <?= $this->Form->create($wholesaleRequest) ?>
                        <fieldset>
                            <?php
                            echo $this->Form->control('business_name', [
                                'label' => ['class' => 'required', 'text' => 'Business name'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('website', ['id' => 'maxWidth']);
                            echo $this->Form->control('abn', [
                                'label' => ['class' => 'required', 'text' => 'ABN'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('business_phone', [
                                'label' => ['class' => 'required', 'text' => 'Business phone'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('address_line_1', [
                                'label' => ['class' => 'required', 'text' => 'Address line 1'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('address_line_2', ['label' => 'Address line 2', 'id' => 'maxWidth']);
                            echo $this->Form->control('first_name', [
                                'label' => ['class' => 'required', 'text' => 'Contact person first name'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('last_name', [
                                'label' => ['class' => 'required', 'text' => 'Contact person last name'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('phone', [
                                'label' => ['class' => 'required'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('email', [
                                'label' => ['class' => 'required'],
                                'id' => 'maxWidth']);
                            echo $this->Form->control('position', [
                                'label' => ['class' => 'required'], 'id' => 'maxWidth']);
                            echo $this->Form->control('message', [
                                'label' => 'Additional information',
                                'id' => 'maxWidth', 'type' => 'textarea', 'rows' => '5']);
                            ?>
                        </fieldset>
                        <br>
                        <p class="submit">
                            <?= $this->Form->button(__('Submit'), [
                                'type' => 'submit',
                                'id' => 'submitlogin',
                                'name' => 'SubmitLogin',
                                'class' => '',
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
    #maxWidth {
        max-width: 100%;
    }
</style>
<!-- Account Area End -->
