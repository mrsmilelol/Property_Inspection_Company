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
];
$this->Form->setTemplates($formTemplate);

$this->layout = 'front';
?>


<!-- Contact Area Area Start -->
<!--<div class="section-padding-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="contact-wrap">
                    <h5 class="title">Send a Message</h5>
                    <form action="php/mail.php" method="post" id="contact-form">
                        <div class="row mb-n20">

                            <div class="col-md-4 col-12 mb-20">
                                <div class="row mb-n20">

                                    <div class="col-12 mb-20">
                                        <label>Your Name</label>
                                        <input type="text" name="name">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Your Email</label>
                                        <input type="email" name="email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Subject</label>
                                        <select name="subject">
                                            <option selected="selected">-- Choose --</option>
                                            <option value="Customer service">Customer service</option>
                                            <option value="Webmaster">Webmaster</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-8 col-12 mb-20">
                                <label>Message</label>
                                <textarea name="message"></textarea>
                            </div>

                            <div class="col-12 mb-20">
                                <input type="submit" value="send message">
                            </div>

                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>

            </div>
        </div>
    </div>
</div> -->

<!-- Contact Area Area End -->

<!--<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?/*= __('Create Wholesale request') */?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?/*= $this->Form->create($wholesaleRequest) */?>
            <fieldset>
                <?php
/*                echo $this->Form->control('business_name');
                echo $this->Form->control('abn');
                echo $this->Form->control('address_line_1');
                echo $this->Form->control('address_line_2');
                echo $this->Form->control('phone');
                echo $this->Form->control('email');
                echo $this->Form->control('business_type');
                echo $this->Form->control('payment_method');
                echo $this->Form->control('message');
                //echo $this->Form->control('status');
                //echo $this->Form->control('created_at');
                //echo $this->Form->control('modified_at');
                */?>
            </fieldset>
            <br>
            <?/*= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) */?>
            <?/*= $this->Form->end() */?>
    </div>
</div>-->

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
                            echo $this->Form->control('business_name', ['label' => 'Business name', 'id' => 'maxWidth']);
                            echo $this->Form->control('website', ['id' => 'maxWidth', 'id' => 'maxWidth']);
                            echo $this->Form->control('abn', ['label' => 'ABN', 'id' => 'maxWidth']);
                            echo $this->Form->control('business_phone', ['id' => 'maxWidth', 'id' => 'maxWidth']);
                            echo $this->Form->control('address_line_1', ['label' => 'Address line 1', 'id' => 'maxWidth']);
                            echo $this->Form->control('address_line_2', ['label' => 'Address line 2', 'id' => 'maxWidth']);
                            echo $this->Form->control('first_name', ['label' => 'Contact person firstname', 'id' => 'maxWidth']);
                            echo $this->Form->control('last_name', ['label' => 'Contact person lastname', 'id' => 'maxWidth']);
                            echo $this->Form->control('phone', ['id' => 'maxWidth']);
                            echo $this->Form->control('email', ['id' => 'maxWidth']);
                            echo $this->Form->control('position', ['id' => 'maxWidth']);
                            echo $this->Form->control('message', ['label' => 'Additional information', 'id' => 'maxWidth']);
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
                                'class' => '',
                            ]) ?>
                        </p>

                        <?= $this->Form->end() ?>
                        </p>
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
<!-- Account Area End -->
