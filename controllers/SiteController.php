<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\VacancyForm;
use app\models\PartnershipForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCompany()
    {
        return $this->render('company');
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionFeedback()
    {
        return $this->render('feedback');
    }
    public function actionWarranty()
    {
        return $this->render('warranty');
    }
    public function actionWarning()
    {
        return $this->render('warning');
    }
    public function actionPublicoffer()
    {
        return $this->render('publicoffer');
    }
    public function actionVacancy()
    {
        $model=new VacancyForm;

        if($model->load(Yii::$app->request->post()) &&$model->validate())
        {
           Yii::$app->session->setFlash('success',"Ваша заявка успешно отправлена!");
        }
        return $this->render('vacancy',['model' =>$model]);
    }

    public function actionPartnership()
    {
        $model=new PartnershipForm;

        if($model->load(Yii::$app->request->post()) &&$model->validate())
        {
           Yii::$app->session->setFlash('success',"Ваша заявка успешно отправлена!");
        }
        return $this->render('partnership',['model' =>$model]);
    }

}
