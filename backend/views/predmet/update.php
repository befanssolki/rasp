<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Predmet */

$this->title = 'Изменить предмет: ' . $model->id_predmet;
$this->params['breadcrumbs'][] = ['label' => 'Predmets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_predmet, 'url' => ['view', 'id' => $model->id_predmet]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="predmet-update">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
