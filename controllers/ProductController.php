<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ProductCategories;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'products';
        $searchModel = new ProductSearch();
        //$dataProvider = $searchModel->search(['ProductsSearch'=>['product_category_name'=>'Кирпич тонкий']]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $products =$dataProvider->getModels();
        //$products =$searchModel::find()->orderBy('product_product_id')->all();

        $tempmodel=new ProductCategories();
        $categories=$tempmodel::find()->select('product_category_name')->orderBy('product_category_id')->all();
        
        $this->layout='main';

         $this->view->params['nohr'] = 'true';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories'=>$categories,
            'products'=>$products,
        ]);
    }

     /**
         * Lists all Product models.
         * @return mixed
         */
        public function action3ds()
        {
            $this->view->params['menuselected'] = 'info';
            $searchModel = new ProductSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


            $products =$searchModel::find()->orderBy('product_product_id')->all();

            $tempmodel=new ProductCategories();
            $categories=$tempmodel::find()->select('product_category_name')->orderBy('product_category_id')->all();
        
            return $this->render('3ds', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'categories'=>$categories,
                'products'=>$products,
            ]);
        }



    public function actionGetProducts()
    {
        $products=Product::find()->all();
        echo Json::encode($products);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
