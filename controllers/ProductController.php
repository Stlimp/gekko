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
        $searchModel = new ProductSearch();
        //$dataProvider = $searchModel->search(['ProductsSearch'=>['product_category_name'=>'Кирпич тонкий']]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $products =$dataProvider->getModels();
        //$products =$searchModel::find()->orderBy('product_product_id')->all();

        $tempmodel=new ProductCategories();
        $categories=$tempmodel::find()->select('product_category_name')->orderBy('product_category_id')->all();
        
        $this->layout='twoFootersLayout';

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
            $searchModel = new ProductSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


            $products =$searchModel::find()->orderBy('product_product_id')->all();

            $tempmodel=new ProductCategories();
            $categories=$tempmodel::find()->select('product_category_name')->orderBy('product_category_id')->all();
            
            $this->layout='twoFootersLayout';
            
            return $this->render('3ds', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'categories'=>$categories,
                'products'=>$products,
            ]);
        }

    /**
     * Displays a single Product model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_product_name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_product_name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
