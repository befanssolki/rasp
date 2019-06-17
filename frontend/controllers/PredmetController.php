<?php

namespace frontend\controllers;

use common\models\Predmet;
use yii\rest\ActiveController;

class PredmetController extends ActiveController
{
    public $modelClass = Predmet::class;
}