<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {


    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionContact() {
        return $this->render('contact');
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionProjects() {
        return $this->render('projects');
    }

    public function actionRenovaties() {
        return $this->render('renovaties');
    }

    public function actionSchilderwerken() {
        return $this->render('schilderwerken');
    }

    public function actionGyproc() {
        return $this->render('gyproc');
    }

    public function actionBetegeling() {
        return $this->render('betegeling');
    }

}
