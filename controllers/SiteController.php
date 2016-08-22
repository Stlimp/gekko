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
use app\models\Product;
use app\models\Emails;
use app\models\Orders;
use app\models\OrderItems;
/*use app\models\Press;*/
use app\models\Photogallery;
use yii\data\ActiveDataProvider;
use yii\web\ForbiddenHttpException;
use mPDF;

mb_internal_encoding("UTF-8");

class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            /*'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],*/
            /*'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }
    /*public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            if (!\Yii::$app->user->can($action->id)) {
                throw new ForbiddenHttpException('Access denied');
            }
            return true;
        } else {
            return false;
        }

    }*/
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

        $model = new Product();
        $products = $model::find()->all();
        $product = array_rand($products,1);

        $model=new ProductCategories();
        $products_categories=$model::find()->select('product_category_name')->all();

        $model=new Photogallery();
        $photos=$model::find()->all();

       /* $pressModel = new Press();
        $pressLinks = $pressModel::find()->all();*/
        $this->view->params['menuselected'] = '';

        $this->layout='indexLayout';
        return $this->render('index',[
            'product'=>$products[$product],
            'photos'=>$photos
            /*'press'=>$pressLinks*/
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
        $this->view->params['menuselected'] = 'index';
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

    public function actionCompany()
    {
        $this->view->params['menuselected'] = 'index';
        return $this->render('company');
    }

    public function actionAdvantages()
    {
        $this->view->params['menuselected'] = 'index';
        return $this->render('advantages');
    }
    public function actionCart()
    {
        $this->view->params['menuselected'] = '';
        $cartItems = \Yii::$app->cart->getPositions();
        $this->layout='twoFootersLayout';
        return $this->render('cart',['cartItems'=>$cartItems]);
    }

    public function actionFeedback()
    {
        $this->view->params['menuselected'] = 'index';
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
        $this->view->params['menuselected'] = 'info';
        return $this->render('warranty');
    }
    public function actionWarning()
    {
        $this->view->params['menuselected'] = 'info';
        return $this->render('warning');
    }
    public function actionPublicoffer()
    {
        $this->view->params['menuselected'] = 'info';
        return $this->render('publicoffer');
    }
    public function actionVacancy()
    {
        $this->view->params['menuselected'] = 'index';
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
                ->setSubject('Получен отзыв на вакансию')
                ->send();
            Yii::$app->session->setFlash('success',"Ваша заявка успешно отправлена!");
        }
        return $this->render('vacancy',['model' =>$model]);
    }

    public function actionPartnership()
    {
        $this->view->params['menuselected'] = 'index';
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
        $this->view->params['menuselected'] = 'info';
        return $this->render('price');
    }
    public function actionRocklaying()
    {
        $this->view->params['menuselected'] = 'info';
        $dataProvider = new ActiveDataProvider([
            'query' => Videogallery::find(),
            'pagination'=>[
                'pageSize' => 4,
             ],
        ]);

        $videos = $dataProvider->getModels();
        return $this->render('rocklaying',['videos' => $videos]);
    }

    public function actionDesign()
    {
        $this->view->params['menuselected'] = 'services';
        return $this->render('design');
    }
    public function actionSelection()
    {
        $this->view->params['menuselected'] = 'services';
        return $this->render('selection');
    }
    public function actionDelivery()
    {
        $this->view->params['menuselected'] = 'services';
        return $this->render('delivery');
    }
    public function actionFacing()
    {
        $this->view->params['menuselected'] = 'services';
        return $this->render('facing');
    }

    public function actionSitemap()
    {
        $this->view->params['menuselected'] = '';
        return $this->render('sitemap');
    }

    public function actionOrder() {
           // $start = microtime(true);

        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
        //$price_value= explode(":", $data['price_value']);
        //$total_weight= explode(":", $data['total_weight']);
           


           /* if(Yii::$app->user->isGuest) {
                $user='GUEST';
            } else {
                $user=Yii::app()->user->name;
            }*/
            $date=date('Y-m-d');
            $time=date('His');

            $ip=Yii::$app->request->getUserIP();


            //SAVE ORDER DETAILS
            $order = new Orders();
            $order->user=$user;
            $order->ip=$ip;
            $order->date=$date;
            $order->time= $time;
            $order->new="1";
            $order->status="pending";
            $order->price_input=$_POST["price_input"];
            $order->weight_input=$_POST["weight_input"];
            $order->save();
            //SAVE ORDER ITEMS

            $cartItems = \Yii::$app->cart->getPositions();
            foreach ($cartItems as $cartItem) {
                $orderItem = new OrderItems();
                $orderItem->order_id=$order->id;
                $orderItem->product_name=$cartItem->product_subcategory_name;
                $orderItem->product_color_name=$cartItem->product_color_name;
                $orderItem->regular_input=$_POST["regular_input"][$cartItem->product_color_id];
                $orderItem->angular_input=$_POST["angular_input"][$cartItem->product_color_id];
                $orderItem->reduce_squere=isset($_POST['reduce_squere'][$cartItem->product_color_id])?"checked":"unchecked";
                $orderItem->add_five_percent=isset($_POST['add_five_percent'][$cartItem->product_color_id])?"checked":"unchecked";
                $orderItem->seamless=isset($_POST['seamless'][$cartItem->product_color_id])?"checked":"unchecked";
                $orderItem->price_color=$_POST['price_color'][$cartItem->product_color_id];
                $orderItem->weight_color=$_POST['weight_color'][$cartItem->product_color_id];
                $orderItem->save();
            }





        //$bar = $_POST['bar'];
         
        //$postKeys = array_keys($_POST['product']);


    /*print_r($_POST["regular_input"][7]);
         die();*/
       /* if(isset($_POST['reduce_squere'][1])){
         print_r($_POST['reduce_squere']);die();
        }*/
            $mpdf = new mPDF(BLANK,'A4-L');

            $mpdf->allow_charset_conversion=true;  // Set by default to TRUE
            $mpdf->charset_in='windows-1251';
            $mpdf->SetTitle("Счет Gekkostone");
            $mpdf->SetHeader('|GEKKOSTONE|');
            $mpdf->setFooter('{PAGENO}');
            //$content=file_get_contents('http://gekkostone/web/orderPdf.php');
            //


         /*   $content='<div class="site-index">
                       <div class="jumbotron">
                        <div class="my_gallery" style="width:20%;float:left;">
                         <div class="page-header" style="float:left;">МОЯ ГАЛЕРЕЯ <span id="<?php echo (Yii::$app->cart->getIsEmpty()?"empty_":"") ?>cart"><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></div>
                      </div></div></div>';

    */
            ob_start();
            include(\Yii::$app->basePath.'/web/orderPdf.php');
            $output = ob_get_contents();
            ob_end_clean();
            
            $html = utf8_encode($content);
            $stylesheet = file_get_contents(\Yii::$app->basePath.'/web/css/mPdf.css'); // external css
            $bill_stylesheet=  file_get_contents(\Yii::$app->basePath.'/web/css/bill.css');
            $bill=file_get_contents('http://gekkostone/web/bill.php');

            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($bill_stylesheet,1);

            $mpdf->WriteHTML($bill,2);
            $mpdf->WriteHTML($output,2);
            //$time_elapsed_secs = microtime(true) - $start;
            //print_r($time_elapsed_secs);die();
            //$mpdf->WriteHTML('Sample Text', 'D');
            $mpdf->Output('Gekkostone-'.$date.'-'.$time.'.pdf','D');
            \Yii::$app->cart->removeAll();
            exit;

        }
    }

}
