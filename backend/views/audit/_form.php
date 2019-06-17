<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Audit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_audit')->textInput() ?>

    <?= $form->field($model, 'name_audit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_place')->textInput() ?>

    <?= $form->field($model, 'type_audit')->dropDownList(['Компьютерный', 'Лекционный'], ['class' => 'btn btn-outline']) ?>

    <?= $form->field($model, 'number_korpus')->dropDownList(['1','2'], ['class' => 'btn btn-outline']) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-outline-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
