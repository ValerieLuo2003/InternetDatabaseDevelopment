<?php
/**
 * Team: 不想重装队
 * Coding By: 罗梓洋
 * 本文件用于案例研究CaseStudy界面
 */
namespace frontend\controllers;

use Yii;    // 引用yii框架
use frontend\models\Casestudy;   // 引用Countriesview模型
use frontend\models\CasestudySearch;  //引用CountriesviewSearch模型
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\data\Sort;
$Casestudy = Casestudy::find() -> orderBy('num_id') -> all();


/**
 * CasestudyController implements the CRUD actions for Casestudy model.
 */
class CasestudyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    // 定义布局文件
    public $layout = "main_layout";

    // 定义 behaviors 方法，用于返回一个数组，数组中包含了应用到该控制器的行为
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],  // 只有post方法才能删除
                ],
            ],
        ];
    }

    /**
     * Lists all Casestudy models.
     * @return mixed
     */
    public function actionIndex()
    {
        //
        $searchModel = new CasestudySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);



        $query = Casestudy::find();
        $pagination = new Pagination([
            'totalCount' =>  $query-> count(),
            'pageSize' =>  10            
          ]);
        $Casestudy = $query-> orderBy('num_id')
        -> offset($pagination-> offset)
        -> limit($pagination-> limit)
        -> all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'Casestudy' => $Casestudy,
            'pagination' => $pagination
        ]);
    }

    /**
     * Displays a single Casestudy model.
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
     * Creates a new Casestudy model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * 如果创建成功，浏览器将被重定向到“view”页面。
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Casestudy();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Casestudy model.
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
     * Deletes an existing Casestudy model.
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
     * Finds the Casestudy model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Casestudy the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Casestudy::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
