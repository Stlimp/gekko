<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactsForm;
use app\models\VacancyForm;
use app\models\PartnershipForm;
use app\models\FeedbackForm;
use app\models\Videogallery;
use app\models\Products;
use yii\data\ActiveDataProvider;


class SiteController extends Controller
{
    public $enableCsrfValidation = false;
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

        $model = new Products();
        $products = $model::find()->select('product_name')->all();



        $product = array_rand($products,1);



        $this->layout='indexLayout';
        return $this->render('index',['product'=>$products[$product]]);
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
        $model = new ContactsForm();
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
         $model=new FeedbackForm;

        if($model->load(Yii::$app->request->post()) &&$model->validate())
        {
           Yii::$app->session->setFlash('success',"Ваш отзыв успешно отправлен!");
        }
        return $this->render('feedback',['model' =>$model]);
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

    public function actionPrice()
    {
        return $this->render('price');
    }
    public function actionRocklaying()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Videogallery::find(),
            'pagination'=>[
                'pageSize' => 4,
             ],
        ]);

        $videos = $dataProvider->getModels();
        return $this->render('rocklaying',['videos' => $videos]);
    }


}
