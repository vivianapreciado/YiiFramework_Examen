<?php

namespace app\controllers;

use app\models\ActorHasPelicula;
use app\models\ActorHasPeliculaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ActorHasPeliculaController implements the CRUD actions for ActorHasPelicula model.
 */
class ActorHasPeliculaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ActorHasPelicula models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ActorHasPeliculaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ActorHasPelicula model.
     * @param int $fk_idactor Fk Idactor
     * @param int $fk_idpelicula Fk Idpelicula
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($fk_idactor, $fk_idpelicula)
    {
        return $this->render('view', [
            'model' => $this->findModel($fk_idactor, $fk_idpelicula),
        ]);
    }

    /**
     * Creates a new ActorHasPelicula model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ActorHasPelicula();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ActorHasPelicula model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $fk_idactor Fk Idactor
     * @param int $fk_idpelicula Fk Idpelicula
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($fk_idactor, $fk_idpelicula)
    {
        $model = $this->findModel($fk_idactor, $fk_idpelicula);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ActorHasPelicula model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $fk_idactor Fk Idactor
     * @param int $fk_idpelicula Fk Idpelicula
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($fk_idactor, $fk_idpelicula)
    {
        $this->findModel($fk_idactor, $fk_idpelicula)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ActorHasPelicula model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $fk_idactor Fk Idactor
     * @param int $fk_idpelicula Fk Idpelicula
     * @return ActorHasPelicula the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fk_idactor, $fk_idpelicula)
    {
        if (($model = ActorHasPelicula::findOne(['fk_idactor' => $fk_idactor, 'fk_idpelicula' => $fk_idpelicula])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
