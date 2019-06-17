<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Group */

$this->title = 'Группа '. $model->number;
$this->params['breadcrumbs'][] = ['label' => 'Справочник групп', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="group-view">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_group',
            'number',
            'spec',
            'count_student',
            'kurs',
        ],
    ]) ?>
    <div class="modal-footer">
        <?= Html::a('Изменить', ['update', 'id' => $model->id_group], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_group], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </div>

</div>
