<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Predmet */

$this->title = $model->name_predmet;
$this->params['breadcrumbs'][] = ['label' => 'Predmets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="predmet-view">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_predmet',
            'name_predmet',
            'id_prepod',
        ],
    ]) ?>
    <div class="modal-footer">
        <?= Html::a('Изменить', ['update', 'id' => $model->id_predmet], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_predmet], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

</div>
