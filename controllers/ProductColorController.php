<?php

namespace app\controllers;

use Yii;
use app\models\ProductColor;
use app\models\ProductColorSearch;
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

    /**
     * Lists all ProductColor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductColorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $colors=$dataProvider->getModels();
        $itemsCount = \Yii::$app->cart->getCount();

        $this->layout='twoFootersLayout';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'colors'=>$colors,
            'itemsCount'=>$itemsCount,
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

    /**
     * Creates a new ProductColor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductColor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_color_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProductColor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_color_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProductColor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
            

            $this->layout='twoFootersLayout';
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'colors'=>$colors,
                'itemsCount'=>$itemsCount,
            ]);
        }
        throw new NotFoundHttpException();
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
