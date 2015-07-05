<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
?>
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'username',['options'=>['tag'=>'div','class'=>'form-group field-loginform-username has-feedback required'],'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}'])->textInput(['placeholder'=>'Username']) ?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'password',['template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>{error}{hint}'])->passwordInput(['placeholder'=>'Password']) ?>
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
    </div><!-- /.social-auth-links -->
    <?= Html::a('I forgot my password', ['site/forgot']) ?><br>
    <?= Html::a('Register a new membership', ['site/register']) ?>
</div>
</div>

</div><!-- /.login-box-body -->