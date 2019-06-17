<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Predmet */

$this->title = 'Добавить предмет';
$this->params['breadcrumbs'][] = ['label' => 'Predmets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="predmet-create">

    <span class="d-block p-2 mb-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
