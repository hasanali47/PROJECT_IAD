<?php

namespace backend\controllers;

use Yii;
use backend\models\Packs;
use backend\models\PacksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PacksController implements the CRUD actions for Packs model.
 */
class AbController extends Controller
{
    /**
     * @inheritdoc
     */

    public function actionIndex()
    {
        $searchModel = new PacksSearch();
		 $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->orWhere(['blood_group'=>'AB-']);
        $dataProvider->query->orWhere(['blood_group'=>'AB+']);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


}
