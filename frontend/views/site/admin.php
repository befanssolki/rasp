<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'Личный кабинет';
?>
<main>
    <div class="container white clearfix">
        <section class="text-center container pb-3 margint-70">
            <div class="card text-center">
                <div class="card-body">
                    <div class="row paneltext">
                        <div class="col-md-4">
                            <div class="col-md-12 col-xs-12 text-center">
                                <img src="/images/dogaeva.jpg" alt="Avatar" class="rounded-circle" style="width: 170px; height: 170px;">
                                <h4><?= $model->familia. ' ' .$model->name. ' ' .$model->otchestvo; ?></h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="card border-primary mb-3" style="max-width: 20rem;">
                                <div class="card-header">Сообщение</div>
                                <div class="card-body">
                                    <h4 class="card-title">Заголовок сообщения</h4>
                                    <p class="card-text">Текст сообщения</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 text-center">
                            <span class="d-block p-2 maincolor text-white"></span>
                            <div class="card-body">
                                <h4 class="card-title"><?= date('d.m.Y'); ?></h4>
                                <p class="card-text">Чётная неделя</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center"><h3><i class="fa fa-calendar-alt"></i> Понедельник, 31 января 2019 г. </h3></div>
        <section class="text-center container pt-3 pb-3">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered mt-1">
                        <thead>
                        <tr>
                            <th class="text-center">Время</th>
                            <th class="text-center">Понедельник</th>
                            <th class="text-center">Вторник</th>
                            <th class="text-center">Среда</th>
                            <th class="text-center">Четверг</th>
                            <th class="text-center">Пятница</th>
                            <th class="text-center">Суббота</th>
                        </tr>
                        <thead>
                        <tbody>
                        <tr>
                            <th class="text-center">8:30 <br> 10:05</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center">10:25 <br> 12:00</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center">12:50 <br> 14:25</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center">14:35 <br> 16:05</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center">16:15 <br> 17:50</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</main>