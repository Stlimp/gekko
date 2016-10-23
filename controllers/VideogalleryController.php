<?php

namespace app\controllers;

use Yii;
use app\models\Videogallery;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VideogalleryController implements the CRUD actions for Videogallery model.
 */
class VideogalleryController extends Controller
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
     * Lists all Videogallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Videogallery::find(),
        ]);

        $videos = $dataProvider->getModels();
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'videos' =>$videos,
        ]);
    }


    
    public function getYouTubeIdFromURL($url)
    {
      $url_string = parse_url($url, PHP_URL_QUERY);
      parse_str($url_string, $args);
      return isset($args['v']) ? $args['v'] : false;
    }

    /**
     * Creates a new Videogallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    
    /**
     * Finds the Videogallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Videogallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Videogallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
