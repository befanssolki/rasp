<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Audit */

$this->title = 'Изменить аудиторию: ' . $model->id_audit;
$this->params['breadcrumbs'][] = ['label' => 'Audits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_audit, 'url' => ['view', 'id' => $model->id_audit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-update">

    <span class="d-block p-2 maincolor text-white text-center"><?= Html::encode($this->title) ?></span>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
