<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AuditSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Справочник аудиторий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-index">

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
          //  ['class' => 'yii\grid\SerialColumn'],
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
            'id_audit',
            'name_audit',
            'number_audit',
            'count_place',
            'type_audit',
            'number_korpus',


        ],
    ]); ?>
    <?php Pjax::end(); ?>
    <div class="modal-footer">
    <p>
        <?= Html::a('Добавить аудиторию', ['create'], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Удалить', ['delete'], ['class' => 'btn btn-outline-danger']) ?>
    </p>
    </div>
</div>
