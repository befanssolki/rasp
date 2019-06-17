<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PredmetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Справочник предметов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="predmet-index">

<span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table text-center table-borderedless'
        ],
        'layout'=>"{pager}\n{items}\n",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {link}',
                'buttons' => [
                    'update' => function ($url,$model) {
                        return Html::a(
                        '<span><i class="fas fa-highlighter"></i></span>',
                        $url);
                    },
                    'delete' => function ($url,$model) {
                        return Html::a(
                        '<span><i class="fas red fa-minus-square"></i></span>',
                        $url);
                    },
                ],
            ],
            'id_predmet',
            'name_predmet',
            'id_prepod',

        ],
    ]); ?>
    <div class="modal-footer">
        <?= Html::a('Добавить предмет', ['create'], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить предмет', ['delete', 'id' => $model->id], ['class' => 'btn btn-outline-danger']) ?>
    </div>
    <?php Pjax::end(); ?>
</div>
