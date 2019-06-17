<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Predmet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="predmet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_predmet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prepod')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-outline-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
