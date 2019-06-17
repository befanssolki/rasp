<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Audit */

$this->title = $model->name_audit;
$this->params['breadcrumbs'][] = ['label' => 'Справочник аудиторий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-view">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_audit',
            'number_audit',
            'name_audit',
            'count_place',
            'type_audit',
            'number_korpus',
        ],
    ]) ?>

    <div class="modal-footer">
        <?= Html::a('Изменить', ['update', 'id' => $model->id_audit], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_audit], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту аудиторию?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
