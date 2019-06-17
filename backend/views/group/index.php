<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Справочник групп';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">
                    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>
                    <?php Pjax::begin(); ?>
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
                            'id_group',
                            'number',
                            'spec',
                            'count_student',
                            'kurs',

                        ],
                    ]); ?>
    <div class="modal-footer">
            <?= Html::a('Добавить группу', ['create'], ['class' => 'btn btn-outline-primary']) ?>
            <?= Html::a('Удалить группу', ['delete', 'id' => $model->id], ['class' => 'btn btn-outline-danger']) ?>
    </div>
    <?php Pjax::end(); ?>
</div>
