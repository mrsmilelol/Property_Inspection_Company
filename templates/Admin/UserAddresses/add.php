<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserAddress $userAddress
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
echo $this->Html->css('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', ['block' => true]);
echo $this->Html->script('//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', ['block' => true]);
?>
    <div class="card shadow mb-4">
        <div class="d-sm-flex align-items-center justify-content-between card-header">
            <h1 class="h3 mb-0 text-gray-800"><?= __('Add new user address') ?></h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="products" width="100%" cellspacing="0">
                <?= $this->Form->create($userAddress) ?>
                <?php
                echo $this->Form->control('user_id', ['class' => 'category_select_main','id' => 'select_user','options' => $users, 'empty' => true]);
                echo $this->Form->control('address_line_1', ['label' => 'Address line 1']);
                echo $this->Form->control('address_line_2', ['label' => 'Address line 2']);
                echo $this->Form->control('city', ['label' => 'City: Melbourne']);
               // $countries = ['1' => 'Australia','2' => 'United States of America','3' => 'New Zealand'];
                echo $this->Form->control('country', ['value' => 'Australia']);
                $states = ['1' => 'VIC','2' => 'NSW','3' => 'SA','4' => 'WA','5' => 'NT','6' => 'QLD','7' => 'TAS'];
                echo $this->Form->control('state', ['options' => $states, 'label' => 'Select your state']);
                echo $this->Form->control('postcode', ['label' => 'Postcode: 3102']);
                ?>
                <br>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </table>
        </div>
    </div>
<script>
    $(document).ready(function() {
        $('#select_user').select2();
    });
</script>
