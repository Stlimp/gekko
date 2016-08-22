<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use app\models\Press;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use yii\data\ActiveDataProvider;
use yii\web\ForbiddenHttpException;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
           /* 'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],*/
        ];
    }
/*    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            if (!\Yii::$app->user->can($action->id)) {
                throw new ForbiddenHttpException('Access denied');
            }
            return true;
        } else {
            return false;
        }
    }
*/
    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'index';
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setSort([
                    'defaultOrder' => ['date'=>SORT_ASC],]);
        $post = $dataProvider->getModels();

        $tempModel = new News();
        $years = $tempModel::find()->select('date')->all();


        $pressModel = new Press();
        $pressLinks = $pressModel::find()->all();

        $yearFilter = array();
        foreach ($years as $yearItem)
        {
            array_push($yearFilter, date('Y', strtotime($yearItem->date)));
        }

        $yearFilter=array_reverse(array_unique($yearFilter));
        arsort($yearFilter);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'post' =>$post,
            'yearFilter' =>$yearFilter,
            'press' =>$pressLinks,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->view->params['menuselected'] = 'index';        
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {   

        if (!\Yii::$app->user->can('create')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $model = new News();

            $imageName=$model->id;

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $model->image = UploadedFile::getInstance($model,'image');
                $model->post_image = 'images/content/news/thumbnails/news'.$model->image->name;
                $model->save();

                $model->image->saveAs(Yii::getAlias('@webroot') .'/images/content/news/thumbnails/news'.$model->image->name);
                
                Image::thumbnail(Yii::getAlias('@webroot') .'/images/content/news/thumbnails/news'.$model->image->name, 100,75)
        ->save(Yii::getAlias(Yii::getAlias('@webroot') .'/images/content/news/thumbnails/news'.$model->image->name), ['quality' => 100]);
               
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (!\Yii::$app->user->can('update')) {
            throw new ForbiddenHttpException('Access denied');
        }
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
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
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionPress()
    {
             return $this->redirect(array('press/create')   );
    }
}
