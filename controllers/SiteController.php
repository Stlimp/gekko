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
use app\models\ProductCategories;
use app\models\ProductSubategories;
use app\models\Products;
use app\models\Emails;
use app\models\Press;
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

      /*  $model = new Products();
        $products = $model::find()->select('product_name')->all();



        $product = array_rand($products,1);*/
        $model=new ProductCategories();
        $products_categories=$model::find()->select('product_category_id')->all();

        $pressModel = new Press();
        $pressLinks = $pressModel::find()->all();

        $this->layout='indexLayout';
        return $this->render('index',[
            'press'=>$pressLinks
            ]);
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
        if ($model->load(Yii::$app->request->post())&&$model->validate() ) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->mailer->compose('contact',[
                    'organization'=>$model->organization,
                    'city'=>$model->city,
                    'text'=>$model->text,
                    'department'=>$model->department,
                    'name'=>$model->name,
                    'position'=>$model->position,
                    'email'=>$model->email,
                    'phone'=>$model->phone,
                ])
            ->setFrom('bot@gekkostone.com')
            ->setTo('admin@gekkostone.com')
            ->setSubject('Получен новое обращение  '.$model->text)
            ->send();
            Yii::$app->session->setFlash('success',"Ваше обращение успешно отправлено!");                
            } 
        return $this->render('contact',['model' =>$model]);
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
        $this->layout='main';
         $model=new FeedbackForm;


        if($model->load(Yii::$app->request->post()) &&$model->validate())
        {
          Yii::$app->mailer->compose('feedback',[
                'name'=>$model->name,
                'text'=>$model->text,
                'department'=>$model->department,
                'email'=>$model->email,
                'phone'=>$model->phone,
            ])
            ->setFrom('bot@gekkostone.com')
            ->setTo('admin@gekkostone.com')
            ->setSubject('Получен новый отзыв для '.$model->department)
            ->send();

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
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->mailer->compose('vacancy',[
                            'employment'=>$model->employment,
                            'employmenttype'=>$model->employmenttype,
                            'name'=>$model->name,
                            'age'=> $model->age,
                            'education'=> $model->education,
                            'speciality'=> $model->speciality, 
                            'workhistory'=> $model->workhistory,
                            'workhistory_years'=> $model->workhistory_years,
                            'workhistory_second'=> $model->workhistory_second,
                            'workhistory_years_second'=> $model->workhistory_years_second,
                            'workhistory_third'=> $model->workhistory_third,
                            'workhistory_years_third'=> $model->workhistory_years_third,
                            'workhistory_fourth'=> $model->workhistory_fourth,
                            'workhistory_years_fourth'=> $model->workhistory_years_fourth,
                            'civilstatus'=> $model->civilstatus,
                            'personalauto'=> $model->personalauto,
                            'driverlicence'=> $model->driverlicence,
                            'adress'=> $model->adress,
                            'salary'=> $model->salary,
                            'smoker'=> $model->smoker,
                            'characteristic'=> $model->characteristic,
                            'selfimage'=> $model->selfimage,
                            'phonenumber'=> $model->phonenumber,])
                ->setFrom('bot@gekkostone.com')
                ->setTo('admin@gekkostone.com')
                ->setSubject('Получен новое обращение  '.$model->education)
                ->send();
            Yii::$app->session->setFlash('success',"Ваша заявка успешно отправлена!");
        }
        return $this->render('vacancy',['model' =>$model]);
    }

    public function actionPartnership()
    {
        $model=new PartnershipForm;

        if($model->load(Yii::$app->request->post()) &&$model->validate())
        {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->mailer->compose('partnership',[
               'companytype'=>$model->companytype,
               'location'=>$model->location,
               'timeperiod'=>$model->timeperiod,
               'mainactivity'=>$model->mainactivity,
               'typeofpartnership'=>$model->typeofpartnership,
               'info'=>$model->info, 
               'contactperson'=>$model->contactperson,
               'position'=>$model->position,
               'email'=>$model->email,
               'phone'=>$model->phone,

                ])
                ->setFrom('bot@gekkostone.com')
                ->setTo('admin@gekkostone.com')
                ->setSubject('Новая заявка на партнерство')
                ->send();
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
