<?php

namespace app\controllers;

use Yii;
use app\models\Photogallery;
use app\models\PhotogallerySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * PhotogalleryController implements the CRUD actions for Photogallery model.
 */
class PhotogalleryController extends Controller
{
    public $enableCsrfValidation = false;
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
     * Lists all Photogallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'photogallery';
        $searchModel = new PhotogallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $photogallery = $dataProvider->getModels();
        $subcategories =$searchModel::find()->select('photo_subcategory')->distinct()->all();
         
        $subcategories = ArrayHelper::map($photogallery,'photo_subcategory','photo_category');
        $images = ArrayHelper::map($photogallery,'photo_image','photo_subcategory');
        
        $params=Yii::$app->request->queryParams;
        /*$params=Yii::$app->request->getQueryParam('photo_category');*/
        $this->view->params['menuselected'] = 'photogallery';

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'photogallery'=>$photogallery,
            'photo_subcategory'=>$subcategories,
            'photo_image'=>$images,
        ]);
    }


    /**
     * Finds the Photogallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Photogallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Photogallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
