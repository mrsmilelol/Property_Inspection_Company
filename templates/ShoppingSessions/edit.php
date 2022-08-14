<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShoppingSession $shoppingSession
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
$formTemplate= [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
];
$this->Form->setTemplates($formTemplate);
?>
<h1 class="h3 mb-0 text-gray-800"><?= __('Edit user shopping session') ?></h1>
<?= $this->Form->create($shoppingSession) ?>
<?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('product_id', ['options' => $products, 'empty' => true]);
                    echo $this->Form->control('Item quantity');
                    //echo $this->Form->control('created_at');
                    //echo $this->Form->control('modified_at');
                ?>
    <br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
