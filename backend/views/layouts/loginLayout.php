<?php

use backend\assets\loginAsset;
use yii\helpers\Html;


/* @var $this \yii\web\View */
/* @var $content string */

loginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
    </head>
    <body class="login-page">
<?php $this->beginBody() ?>
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div><!-- /.login-logo -->
            <?= $content ?>
        </div>

        <!--    <footer class="footer">
                <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </footer>-->

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
