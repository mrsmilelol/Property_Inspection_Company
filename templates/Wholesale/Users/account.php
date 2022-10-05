<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css', ['block' => true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block' => true]);

$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
    'radioContainer' => '<div class="form-radio">{{content}}</div>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}> {{value}}</textarea>'
];
$this->Form->setTemplates($formTemplate);

$this->layout = 'front';
?>

<?php $thisuser = $this->request->getSession()->read('Auth') ?>
<!-- Account Area Start -->
<div class="account-area section-padding-sm">
    <div class="container-dashboard" style="display: flex; justify-content: center">
        <div class="row" style="width: 100vmin;">
            <div class="mb-30 myaccount-content">
                <h5>Edit Account Details</h5>
                <div class="account-details-form">
                    <form action="#" method="post">
                        <p class="form-row">
                            <?= $this->Form->create($user) ?>
                            <fieldset>
                                        <?php
                                        echo $this->Form->control('firstname',
                                            ['label' => ['class' => 'required', 'text' =>'First name'],
                                                'id' => 'maxWidth']);
                                        echo $this->Form->control('lastname',
                                            ['label' => ['class' => 'required', 'text' =>'Last name'],
                                                'id' => 'maxWidth']);
                                        echo $this->Form->control('username',
                                            ['label' => ['class' => 'required'],
                                                'id' => 'maxWidth']);
                                        echo $this->Form->control('phone',
                                            ['label' => ['class' => 'required'],
                                                'id' => 'maxWidth']);
                                        echo $this->Form->control('email',
                                            ['label' => ['class' => 'required'],
                                                'id' => 'maxWidth']);
                                        echo $this->Form->control('password',
                                            ['label' => ['class' => 'required'],
                                                'id' => 'maxWidth']);
                                        //echo $this->Form->control('created_at');
                                        //echo $this->Form->control('modified_at');
                                        ?>
                            </fieldset>
                            <br>
                            <p class="submit">
                                <?= $this->Form->button(__('Save changes'), [$thisuser->id,
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
<!-- Account Area End -->
