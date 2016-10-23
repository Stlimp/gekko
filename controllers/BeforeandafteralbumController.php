<?php

namespace app\controllers;

use Yii;
use app\models\BeforeandafterAlbum;
use app\models\BeforeandafterPhoto;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
/**
 * BeforeandafteralbumController implements the CRUD actions for BeforeandafterAlbum model.
 */
class BeforeandafteralbumController extends Controller
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
     * Lists all BeforeandafterAlbum models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'photogallery';
        $dataProvider = new ActiveDataProvider([
            'query' => BeforeandafterAlbum::find(),
        ]);

        $dataProviderPhotos = new ActiveDataProvider([
            'query' => BeforeandafterPhoto::find(),
        ]);

        $this->layout='main';
        return $this->render('developement', [
            'dataProvider' => $dataProvider,
            'dataProviderPhotos' => $dataProviderPhotos,
        ]);
    }

    /**
     * Finds the BeforeandafterAlbum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BeforeandafterAlbum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BeforeandafterAlbum::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
