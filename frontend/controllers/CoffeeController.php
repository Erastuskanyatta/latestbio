<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Coffee;
use frontend\models\Searchcoffee;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoffeeController implements the CRUD actions for Coffee model.
 */
class CoffeeController extends Controller
{
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
     * Lists all Coffee models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Searchcoffee();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Coffee model.
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
     * Creates a new Coffee model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Coffee();
       // $model = new CoffeeForm();
        $coffee= new \frontend\models\Coffee();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $coffee->name = $model['name'];
            $coffee->amount = $model['amount'];
            $coffee->send = $model['send'];
            $coffee->pin = $model['pin'];
        
        if ($coffee->save(true)) {
            Yii::$app->session->setFlash('success', 'Thank you for the cup of coffee. Kindly Proceed to your phone M-pesa and complete the transaction.  <br> <a');
           // return $this->redirect(['site/thanksnote']);
        } else {
            return $this->refresh();
            Yii::$app->session->setFlash('error', 'There was an error with ua payments.');
        }
         }
       
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Coffee model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Coffee model.
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
     * Finds the Coffee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Coffee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Coffee::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
