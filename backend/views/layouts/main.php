<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\Bootstrap4Asset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/images/logo.png" style="height: 50px;"/>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'maincolor navbar navbar-expand-md navbar-fixed-top',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
        $menuItems = [
            ['label' => 'группы', 'url' => ['/group/index']],
            ['label' => 'предметы', 'url' => ['/predmet/index']],
            ['label' => 'аудитории', 'url' => ['/audit/index']],
            ['label' => 'Личный кабинет', 'url' => ['/site/index']],
            ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username . ')',
                ['class' => 'a logout text-white']
            )
            . Html::endForm()
            . '</li>';
    }


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container text-white">
      <div class="container-fluid text-center text-white text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-lg-9 mt-md-0 mt-3">
            <!-- Content -->
            <p>
              Областное государственное бюджетное профессиональное образовательное учреждение «Северский промышленный колледж»
              <br>
              Свидетельство о государственной аккредитации № 723 от 20 января 2015 г.
              <br>
              Лицензия № 1713 от 8 февраля 2016 г.
            </p>
            <div class="row">

       <!-- Grid column -->
       <div class="col-md-5">
         <div class="mb-5">

           <!-- Facebook -->
           <a class="fb-ic">
             <i class="fab fa-facebook-f fa-lg white-text mr-3 fa-2x"> </i>
           </a>
           <!-- Vk -->
           <a class="tw-ic">
             <i class="fab fa-vk fa-lg white-text mr-3 fa-2x"> </i>
           </a>
           <!-- Twitter-->
           <a class="gplus-ic">
             <i class="fab fa-twitter fa-lg white-text mr-3 fa-2x"> </i>
           </a>
           <!--Youtube -->
           <a class="li-ic">
             <i class="fab fa-youtube fa-lg white-text mr-3 fa-2x"> </i>
           </a>
           <!--Instagram-->
           <a class="ins-ic">
             <i class="fab fa-instagram fa-lg white-text mr-3 fa-2x"> </i>
           </a>
         </div>
       </div>
       <!-- Grid column -->

     </div>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Grid column -->

          <div class="col-lg-3 mb-md-0 mb-3">
            <!-- Content -->
            <p>
              Россия, 636036, г. Северск Томской области
              <br>
              ул. Крупской, 17, каб. 212
            </p>
            <p>
              т. (3823) 780-311
              <br>
              факс (3823) 780-304
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
