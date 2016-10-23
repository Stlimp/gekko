<?php

namespace app\controllers;

use Yii;
use app\models\Stores;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StoresController implements the CRUD actions for Stores model.
 */
class StoresController extends Controller
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
     * Lists all Stores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->view->params['menuselected'] = 'stores';
        $dataProvider = new ActiveDataProvider([
            'query' => Stores::find(),
        ]);

        $tempModel = new Stores();

        $country = $tempModel::find()->all();
        $countryArray = array();

        foreach ($country as $countryItem)
        {
            array_push($countryArray,$countryItem->country);
        }

        $countryArray=array_unique($countryArray);
        $stores = $dataProvider->getModels();





        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'country' => $countryArray,
            'stores'=>$stores,

        ]);
    }


    /**
     * Finds the Stores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Stores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Stores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
