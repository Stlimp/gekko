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
        $dataProvider = new ActiveDataProvider([
            'query' => BeforeandafterAlbum::find(),
        ]);

        $dataProviderPhotos = new ActiveDataProvider([
            'query' => BeforeandafterPhoto::find(),
        ]);

        $this->layout='twoFootersLayout';
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProviderPhotos' => $dataProviderPhotos,
        ]);
    }

    /**
     * Displays a single BeforeandafterAlbum model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (!\Yii::$app->user->can('view')) {
            throw new ForbiddenHttpException('Access denied');
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BeforeandafterAlbum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (!\Yii::$app->user->can('create')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $model = new BeforeandafterAlbum();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->album_name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BeforeandafterAlbum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (!\Yii::$app->user->can('update')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->album_name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BeforeandafterAlbum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (!\Yii::$app->user->can('delete')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
