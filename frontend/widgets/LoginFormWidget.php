<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use frontend\assets\AppAsset;
use common\models\LoginForm;
use frontend\assets\Bootstrap4Asset;

class LoginFormWidget extends Widget {

    public function run() {
        if (Yii::$app->user->isGuest) {
            $model = new LoginForm();
            return $this->render('loginFormWidget', [
                'model' => $model,
            ]);
        } else {
            return ;
        }
    }
};
?>