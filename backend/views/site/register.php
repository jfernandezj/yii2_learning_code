<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
?>
<div class="login-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'username',['options'=>['tag'=>'div','class'=>'form-group field-loginform-username has-feedback required'],'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}'])->textInput(['placeholder'=>'Username']) ?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'email',['template'=>'{input}<span class="glyphicon glyphicon-envelope form-control-feedback"></span>{error}{hint}'])->textInput(['placeholder'=>'example@example.org']);?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'password',['template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>{error}{hint}'])->passwordInput(['placeholder'=>'Password']) ?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'repassword',['template'=>'{input}<span class="glyphicon glyphicon-log-in form-control-feedback"></span>{error}{hint}'])->passwordInput(['placeholder'=>'Retype Password']) ?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'agree')->checkbox()->label('I\'m agree with the terms') ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
    </div><!-- /.social-auth-links -->
    <?= Html::a('I forgot my password', ['site/forgot']);?><br>
    <?= Html::a('I already have a membership', ['site/login']) ?>
    
    <a href="register.html" class="text-center"></a>
</div>
</div>

</div><!-- /.login-box-body -->