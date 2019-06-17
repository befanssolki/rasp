<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

?>
<div class="site-index margint-100">
  <section class="text-center container">
    <div class="col-md-8 col-xs-12">
      <input class="form-control search mb-2" type="text" placeholder="Search" aria-label="Search">
      <div class="list-group">

      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <span class="d-block p-2 maincolor text-white mt-3"></span>
      <div class="card-body">
      <h4 class="card-title"><?php echo date("d.m.Y");?></h4>

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
</div>
