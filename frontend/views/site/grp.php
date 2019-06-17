<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

?>
<section class="text-center container margint-100">
<div class="col-md-8 col-xs-12">
  <input class="form-control search mb-2" type="text" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-primary">Дневное</button>
  <button class="btn btn-outline-primary">Вечернее</button>
  <span class="d-block mt-3 text-center maincolor text-white">1 Курс</span>
  <div class="ml-3 mt-1 row">
      <?php foreach($groups as $group):?>
      <a href="<?=Url::to(['site/rasp'])?>"><button type="button" class="btn m-1 btn-outline-primary" ><? echo $group->number ?></button></a>
      <?endforeach;?>
  </div>
  <div class="">

  </div>
  <span class="d-block mt-3 text-center maincolor text-white ">2 Курс</span>
  <div class="ml-3 mt-1 row">
      <?php foreach($groups as $group):?>
          <button href="<?=Url::to(['site/rasp'])?>" type="button" class="btn m-1 btn-outline-primary" ><? echo $group->number ?></button>
      <?endforeach;?>
  </div>
  <div class="">

  </div>
  <span class="d-block mt-3 text-center maincolor text-white">3 Курс</span>
  <div class="ml-3 mt-1 row">
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
  </div>
  <div class="">

  </div>
  <span class="d-block mt-3 text-center maincolor text-white">4 Курс</span>
  <div class="ml-3 mt-1 row">
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
    <button type="button" class="btn m-1 btn-outline-primary">Д096</button>
  </div>
</div>
<div class="col-md-4 col-xs-12">
  <span class="d-block p-2 maincolor text-white mt-3"></span>
  <div class="card-body">
  <h4 class="card-title">21.02.2019</h4>
  <p class="card-text">2019/2020</p>
  <p class="card-text">Чётная неделя</p>
  </div>
<div class="mt-5">
    <span class="d-block p-2 maincolor text-white">Время звонков</span>
    <div class="card-body white">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-center">Начало</th>
                <th class="text-center">Конец</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class="text-center">1</th>
                <td>8:30</td>
                <td>10:05</td>
            </tr>
            <tr>
                <th class="text-center">2</th>
                <td>10:25</td>
                <td>12:00</td>
            </tr>
            <tr>
                <th class="text-center">3</th>
                <td>12:50</td>
                <td>14:25</td>
            </tr>
            <tr>
                <th class="text-center">4</th>
                <td>14:35</td>
                <td>16:05</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</section>
