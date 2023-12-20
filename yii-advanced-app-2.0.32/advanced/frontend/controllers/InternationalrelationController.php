<?php
/**
 * Team: NKU-不想重装
 * Coding By: 师雅卉
 * 本文件用于Internationalrelation界面
 */
namespace frontend\controllers;

use Yii;
use frontend\models\Internationalrelation;
use frontend\models\InternationalrelationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\data\Sort;
$Internationalrelation = Internationalrelation::find() -> orderBy('num_id') -> all();


/**
 * InternationalrelationController implements the CRUD actions for Internationalrelation model.
 */
class InternationalrelationController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "main_layout";//here

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
     * Lists all Internationalrelation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InternationalrelationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Internationalrelation::find();
        $pagination = new Pagination([
            'totalCount' =>  $query-> count(),
            'pageSize' =>  10            
          ]);
        $Internationalrelation = $query-> orderBy('num_id')
        -> offset($pagination-> offset)
        -> limit($pagination-> limit)
        -> all();//here

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'Internationalrelation' => $Internationalrelation,
            'pagination' => $pagination
        ]);
    }

    /**
     * Displays a single Internationalrelation model.
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
     * Creates a new Internationalrelation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Internationalrelation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Internationalrelation model.
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
     * Deletes an existing Internationalrelation model.
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
     * Finds the Internationalrelation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Internationalrelation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Internationalrelation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
