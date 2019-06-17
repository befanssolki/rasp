<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Audit */

$this->title = 'Добавить аудиторию';
$this->params['breadcrumbs'][] = ['label' => 'Справочник аудиторий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-create">

    <span class="d-block p-2 mb-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
