<?php
/**
 * @var \App\View\AppView $this
 */
//$this->layout = 'logged_out';
$this->layout = 'front';
?>
<!-- Account Area Start -->
<div class="account-area section-padding2">
    <div class="container" style="display: flex; justify-content: center">
        <div class="row">
            <!--<div class="col-md-12">
                <h1 class="heading-title">Authentication</h1>
            </div>-->
            <div class="account-details">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="#" class="login-form" method="post">
                        <h1 class="heading-title"><?= __('Please add new password') ?></h1>
                        <p class="form-row">
                            <?= $this->Form->create() ?>
                        <fieldset>
                            <?php echo $this->Form->control('password', ['id' => 'maxWidth']);?>
                        </fieldset>
                        <br>

                        <p class="submit">
                            <?= $this->Form->button(__('Submit'), [
                                'action' => 'login',
                                'type' => 'submit',
                                'id' => 'submitlogin',
                                'name' => 'SubmitLogin',
                                'class' => ''
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

<!--<div class="card shadow mb-4">
    <div class="d-sm-flex align-items-center justify-content-between card-header">
        <h1 class="h3 mb-0 text-gray-800"><?/*= __('Please add new password') */?></h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="products" width="100%" cellspacing="0">
            <?/*= $this->Form->create() */?>
            <fieldset>
                <?php /*echo $this->Form->control('password');*/?>
            </fieldset>
            <br>
            <?/*= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary','action' => 'login']) */?>
            <?/*= $this->Form->end() */?>
        </table>
    </div>
</div>-->
