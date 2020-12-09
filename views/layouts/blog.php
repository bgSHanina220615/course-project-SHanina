<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <base href="/">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <div class="img-logo">
                        <img src="img/logo.jpg" alt="логотип">
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="menu">
                        <ul>
                            <li class="active"><a href="<?=Yii::$app->urlManager->createUrl(['./'])?>">Главная</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['/site/login'])?>">Авторизация</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['/site/reg'])?>">Регистрация</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['/admin/index'])?>">ЛК преподавателя</a></li>
                            <li><a href="<?=Yii::$app->urlManager->createUrl(['/lk/index'])?>">ЛК обучающегося</a></li>
                            <li>
                                <a href=<?= Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                'Выход (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                            ?>
                            </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bg">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="footer-menu">
                                    <ul>
                                        <li class="active"><a href="<?=Yii::$app->urlManager->createUrl(['./'])?>">Главная</a></li>
                                        <li><a href="<?=Yii::$app->urlManager->createUrl(['/site/login'])?>">Авторизация</a></li>
                                        <li><a href="<?=Yii::$app->urlManager->createUrl(['/site/reg'])?>">Регистрация</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="footer-icon">
                                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div> .
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
