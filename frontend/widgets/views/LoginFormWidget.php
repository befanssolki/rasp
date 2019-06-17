<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;

Modal::begin([
    'id'=>'login-modal',
    'header'=>'<div class="ml-2"><h4>ВХОД</h4></div>',
]);
?>
<div class="text-center">
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-login'],
]);
echo $form->field($model, 'username')->textInput();
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
?>
</div>
    <div class="text-center mb-4">
        Забыли пароль? <?= Html::a('Восстановить', ['site/request-password-reset']) ?>.
    </div>
    <div class="form-group">
        <div class="text-center">

            <?php
            echo Html::button('Отмена', ['class' => 'btn btn-default mr-3', 'data-dismiss' => 'modal']);
            echo Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']);
            ?>

        </div>
    </div>

<?php
ActiveForm::end();
Modal::end();