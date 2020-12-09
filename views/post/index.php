<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>

<section class="bg-text-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-text">
                    <h3>ДЕТИ БУДУЩЕГО</h3>
                    <p>Присоединяйтесь к нам и давайте вместе изменять мир к лучшему</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-post-area">
    <div class="container">
        <div class="row">
            <div class="blog-post-area-style">
                <div class="col-md-12">
                    <div class="single-post-big">
                        <div class="big-image">
                            <img src="img/room.jpg" alt="комната">
                        </div>
                        <div class="big-text">
                            <h3><a href="#">Дистанционная и очная формы обучения.</a></h3>
                            <p>C целью обеспечения санитарно-эпидемиологического благополучия населения Нижегородской области и предупреждения распространения новой коронавирусной инфекции (COVID-19) на территории Нижегородской области, во исполнение Указа Губернатора Нижегородской области от 13 марта 2020 г. № 27 (в редакции от 2 ноября 2020 г.), во исполнение Приказа Министерства образования, науки и молодежной политики Нижегородской области от 02.11.2020 № 316-01-63-1787/20, приказа Управления образования администрации Богородского муниципального района Нижегородской области от 03.11.2020 №573 на территории Богородского муниципального района для учащихся 6-8, 10 классов вводят обучение с применением электронных и дистанционных технологий c 5 ноября 2020 года до особого распоряжения.</p>
                            <p>Внимание родителей и учащихся 9 и 11 классов!!!</p>

                            <p>В Нижегородской области принято решение о переводе учеников 9-х и 11-х классов общеобразовательных школ на очный вариант обучения с 8 ноября 2020 г.(приказ министерства образования , науки и молодежной политики Нижегородской области от 05.11 2020 г №316-01-63- 1802/20 «О внесении изменений в приказ министерства образования, науки и молодежной политики Нижегородской области от 2 ноября 2020 № 316-01- 63-1787/20)».</p>
                            <p>Дополнительная информация в разделе ДИСТАНЦИОННОЕ ОБУЧЕНИЕ</p>
                            <h4><span class="date">Опубликовано: 05 Ноябрь 2020</span><span class="author">Director: <span class="author-name">Lilia Blazhenova</span></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <br>
                    <div class="single-post-big">
                        <div class="big-image">
                            <img src="img/Covid-19.png" alt="COVID–19">
                        </div>
                        <div class="big-text">
                            <h3><a href="#">Организация учебного процесса по классам в МБОУ «Школа №1» в 2020-2021 учебном году в условиях сохранения рисков распространения COVID–19.</a></h3>
                            <p>Организация учебного процесса в МБОУ «Школа № 1» в условиях распространения новой коронавирусной инфекции (COVID-19) c учетом Постановления Главного государственного санитарного врача РФ от 30.06.2020 № 16 "Об утверждении санитарно-эпидемиологических правил СП 3.1/2.4.3598-20 «Санитарно-эпидемиологические требования к устройству, содержанию и организации работы образовательных организаций и других объектов социальной инфраструктуры для детей и молодежи в условиях распространения новой коронавирусной инфекции (COVID-19)».</p>
                            <p>Вход родителей в школу и на территорию допускается ТОЛЬКО в масках!</p>
                            <h4><span class="date">Опубликовано: 04 Сентябрь 2020</span><span class="author">Director: <span class="author-name">Lilia Blazhenova</span></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <h2>Наши отличники:</h2>
                <?php foreach($posts as $post): ?>
                    <div class="col-md-3">
                        <div class="single-post">
                        <?= \yii\helpers\Html::img("@web/{$post->img}") ?>
                        <h3><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"><?= $post->title ?></a></h3>
                        <h4><span>Сильные стороны: <span class="author-name">
                                <a href="<?= \yii\helpers\Url::to(['category/view', 'alias' => $post->category->alias]) ?>">
                                    <?= $post->category->title ?>
                                </a>
                            </span></span>
                        </h4>
                        <?= $post->excerpt ?>
                        <h4><span><?= Yii::$app->formatter->asDate($post->created_at, 'php:d.m.Y') ?></span></h4>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="pegination">

        <div class="nav-links">
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
            ]) ?>
            <!--<span class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
        </div>
    </div>
</section>

