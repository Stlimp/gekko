<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Product;
use app\models\ProductSearch;
use app\models\ProductColor;
use app\models\ProductColorSearch;
use app\models\PhotogallerySearch;
use app\models\ProductSeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yz\shoppingcart\ShoppingCart;


/**
 * ProductcolorController implements the CRUD actions for ProductColor model.
 */
class ProductcolorController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function action3ds()
        {
            $this->view->params['menuselected'] = 'info';
            $searchModel = new ProductColorSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


            //$products =$searchModel::find()->orderBy('product_product_id')->all();

            //$tempmodel=new ProductCategories();
           // $categories=$tempmodel::find()->select('product_category_name')->orderBy('product_category_id')->all();
            
            return $this->render('3ds', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
               // 'categories'=>$categories,
               // 'products'=>$products,
            ]);
        }

    /**
     * Lists all ProductColor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'products';
        $searchModel = new ProductColorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $colors=$dataProvider->getModels();
        $itemsCount = \Yii::$app->cart->getCount();

        $modelProduct=new ProductSearch();
        $product_data=$modelProduct::findOne(['product_product_name'=>urldecode(Yii::$app->request->queryParams['ProductColorSearch']['product_subcategory_name'])]);

        $modelSeam=new ProductSeamSearch();
        $dataProviderSeams=$modelSeam->search($colors);
        $seamData=$dataProviderSeams->getModels();


        /*Product photos*/
        $searchModelPhotos = new PhotogallerySearch();
        $paramsPhotos['PhotogallerySearch']['photo_product']=Yii::$app->request->queryParams['ProductColorSearch']['product_subcategory_name'];
        $dataProviderPhotos = $searchModelPhotos->search($paramsPhotos);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderPhotos'=>$dataProviderPhotos,
            'colors'=>$colors,
            'itemsCount'=>$itemsCount,
            'product_data'=>$product_data,
            'seams'=>$seamData,
            'queyP'=>Yii::$app->request->queryParams['ProductColorSearch']['product_subcategory_name'],
        ]);
    }



    public function actionViewProduct()
    {
        $searchModel = new ProductColorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $colors=$dataProvider->getModels();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'colors'=>$colors,
        ]);
    }

    /**
     * Displays a single ProductColor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

 
    public function actionGetProductColor($id)
    {
        $product_color_image=ProductColor::find()->where(['product_color_id'=>$id])->one();
        echo Json::encode($product_color_image);
    }


    public function actionAddToCart($id)
    {
        $cart = new ShoppingCart();
        
        //$model = ProductColor::findOne($id);
        $model =$this->findModel($id);
        
        if ($model) {
            if (!\Yii::$app->cart->hasPosition($model->product_color_id)) {
               \Yii::$app->cart->put($model, 1);
        }
            
            //$itemsCount = \Yii::$app->cart->getCount();
            //\Yii::$app->cart->removeAll();
            //print_r($itemsCount);die();
            //$cart->put($model, 1);
            
            $searchModel = new ProductColorSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $colors=$dataProvider->getModels();

               /*Product photos*/
/*            $searchModelPhotos = new PhotogallerySearch();

            $paramsPhotos['PhotogallerySearch']['photo_product']=Yii::$app->request->queryParams['ProductColorSearch']['product_subcategory_name'];
            $dataProviderPhotos = $searchModelPhotos->search($paramsPhotos);
*/
            return $this->redirect(Yii::$app->request->referrer);


           /* 
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'dataProviderPhotos'=>$dataProviderPhotos,
                'colors'=>$colors,
                'itemsCount'=>$itemsCount,
            ]);*/
        }
        throw new NotFoundHttpException();
    }

   public function actionRemoveFromCart($id)
    {
        \Yii::$app->cart->removeById($id);
         $this->redirect(\Yii::$app->urlManager->createUrl("site/cart"));
    }
    /**
     * Finds the ProductColor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductColor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductColor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
