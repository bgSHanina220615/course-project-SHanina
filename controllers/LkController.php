<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use yii\helpers\ArrayHelper;

class LkController extends Controller
{
    public function beforeAction($action)
    {
        //Наши предварительные обработки(условия)
        //Отсекаем гостей
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/site/login']);
        }
        //Отсекаем админов
        if (Yii::$app->user->identity->admin == 1) {
            return $this->redirect(['/site/login']);
        }
        ################################
        if (!parent::beforeAction($action)) {

            return false;
        }

        return true;// or false to not run the action
    }

    public function actionIndex()
    {
        //Остались только админы.Даем доступ
        //return $this->render('index');
    }
}