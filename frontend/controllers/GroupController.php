<?php

namespace frontend\controllers;

use common\models\Group;
use yii\rest\ActiveController;

class GroupController extends ActiveController
{
    public $modelClass = Group::class;
}