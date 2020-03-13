<?php

namespace xing\commonSet\backend\controllers;


use xing\commonSet\models\CommonSet;
use xing\commonSet\models\CommonSetSearch;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use Yii;

trait CommonSetTrait
{

    public $viewPath = '@vendor/xing.chen/yii-common-set/backend/views/common-set/';
    
    public $group = ['sys' => '系统', 'common' => '普通', 'user' => '用户'];
    /**
     * {@inheritdoc}
     */
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
     * Lists all CommonSet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CommonSetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render($this->viewPath . 'index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'group' => $this->group,
        ]);
    }

    /**
     * Displays a single CommonSet model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render($this->viewPath . 'view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CommonSet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CommonSet();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render($this->viewPath . 'create', [
            'model' => $model,
            'group' => $this->group,
        ]);
    }

    /**
     * Updates an existing CommonSet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->key]);
        }

        return $this->render($this->viewPath . 'update', [
            'model' => $model,
            'group' => $this->group,
        ]);
    }

    /**
     * Deletes an existing CommonSet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CommonSet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return CommonSet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CommonSet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}