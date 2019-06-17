<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Group */

$this->title = 'Изменить группу: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-update">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
