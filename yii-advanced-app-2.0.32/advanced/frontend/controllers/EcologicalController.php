<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于核污染对生态环境影响界面
 */
namespace frontend\controllers;

use Yii;
use frontend\models\Energy;
use frontend\models\EnergySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\data\Sort;
$Energy = Energy::find() -> orderBy('num_id') -> all();


/**
 * EnergyController implements the CRUD actions for Energy model.
 */
class EnergyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "main_layout";

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Energy models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnergySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Energy::find();
        $pagination = new Pagination([
            'totalCount' =>  $query-> count(),
            'pageSize' =>  10            
          ]);
        $Energy = $query-> orderBy('num_id')
        -> offset($pagination-> offset)
        -> limit($pagination-> limit)
        -> all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'Energy' => $Energy,
            'pagination' => $pagination
        ]);
    }

    /**
     * Displays a single Energy model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Energy model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Energy();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Energy model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Energy model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Energy model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Energy the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Energy::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
