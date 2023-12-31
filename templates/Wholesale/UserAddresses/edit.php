<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
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
                <h5>Edit Address</h5>
                <div class="account-details-form">
                    <form action="#" method="post">
                        <p class="form-row">
                            <?= $this->Form->create($userAddress) ?>
                        <fieldset>
                            <?php
                            echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => $user->id]);
                            echo $this->Form->control(
                                'address_line_1',
                                ['label' => ['class' => 'required', 'text' => 'Address'],
                                'id' => 'maxWidth']
                            );
                            ?>
                            <br>
                            <?php
                            echo $this->Form->control(
                                'address_line_2',
                                ['label' => false, 'id' => 'maxWidth']
                            );
                            echo $this->Form->control(
                                'city',
                                ['label' => ['class' => 'required'], 'id' => 'maxWidth']
                            );
                            echo $this->Form->control(
                                'country',
                                ['label' => ['class' => 'required'], 'id' => 'maxWidth', 'type' => 'hidden']
                            );
                            $states = ['1' => 'VIC', '2' => 'NSW', '3' => 'SA', '4' => 'WA', '5' => 'NT', '6' => 'QLD', '7' => 'TAS'];
                            echo $this->Form->control(
                                'state',
                                ['options' => $states, 'label' => ['class' => 'required', 'text' => 'Select your state'],
                                'id' => 'maxWidth']
                            );
                            echo $this->Form->control(
                                'postcode',
                                ['label' => ['class' => 'required'], 'id' => 'maxWidth']
                            );
                            ?>
                        </fieldset>
                        <br>
                        <p class="submit">
                            <?= $this->Form->button(__('Save changes'), [
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
