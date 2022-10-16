<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var array $state
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

<?php $user = $this->request->getSession()->read('Auth') ?>
<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container-dashboard" style="display: flex; justify-content: center">
        <div class="row" style="width: 100vmin;">
            <div class="mb-30 myaccount-content">
                <h5>Add Address</h5>
                <div class="account-details-form">
                    <form action="#" method="post">
                        <p class="form-row">
                            <?= $this->Form->create($userAddress) ?>
                        <fieldset>
                            <?php
                            echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => $user->id]);
                            echo $this->Form->control('address_line_1', ['label' => ['class' => 'required', 'text' => 'Address'], 'id' => 'maxWidth', 'placeholder' => 'e.g. 1680 Dandenong Rd']);
                            ?>
                            <br>
                            <?php
                            echo $this->Form->control('address_line_2', ['label' => false, 'placeholder' => 'e.g. Oakleigh East', 'id' => 'maxWidth']);
                            echo $this->Form->control('city', ['label' => ['class' => 'required'], 'id' => 'maxWidth', 'placeholder' => 'e.g. Melbourne']);
                            echo $this->Form->control('country', ['label' => ['class' => 'required'], 'id' => 'maxWidth', 'value' => 'Australia', 'type' => 'hidden']);
                            echo $this->Form->control('state', ['options' => $state, 'label' => ['class' => 'required', 'text' => 'Select your state'], 'id' => 'maxWidth']);
                            echo $this->Form->control('postcode', ['label' => ['class' => 'required'], 'id' => 'maxWidth', 'placeholder' => 'e.g. 3166']);
                            ?>
                        </fieldset>
                        <br>
                        <p class="submit">
                            <?= $this->Form->button(__('Add address'), [
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
<!-- Account Area End -->
