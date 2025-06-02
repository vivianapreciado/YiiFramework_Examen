<?php

namespace app\controllers;

use app\models\PeliculaHasGenero;
use app\models\PeliculaHasGeneroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeliculaHasGeneroController implements the CRUD actions for PeliculaHasGenero model.
 */
class PeliculaHasGeneroController extends Controller
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
     * Lists all PeliculaHasGenero models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeliculaHasGeneroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PeliculaHasGenero model.
     * @param int $fk_idpelicula Fk Idpelicula
     * @param int $fk_idcategoria Fk Idcategoria
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($fk_idpelicula, $fk_idcategoria)
    {
        return $this->render('view', [
            'model' => $this->findModel($fk_idpelicula, $fk_idcategoria),
        ]);
    }

    /**
     * Creates a new PeliculaHasGenero model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PeliculaHasGenero();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'fk_idpelicula' => $model->fk_idpelicula, 'fk_idcategoria' => $model->fk_idcategoria]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PeliculaHasGenero model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $fk_idpelicula Fk Idpelicula
     * @param int $fk_idcategoria Fk Idcategoria
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($fk_idpelicula, $fk_idcategoria)
    {
        $model = $this->findModel($fk_idpelicula, $fk_idcategoria);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fk_idpelicula' => $model->fk_idpelicula, 'fk_idcategoria' => $model->fk_idcategoria]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PeliculaHasGenero model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $fk_idpelicula Fk Idpelicula
     * @param int $fk_idcategoria Fk Idcategoria
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($fk_idpelicula, $fk_idcategoria)
    {
        $this->findModel($fk_idpelicula, $fk_idcategoria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PeliculaHasGenero model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $fk_idpelicula Fk Idpelicula
     * @param int $fk_idcategoria Fk Idcategoria
     * @return PeliculaHasGenero the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fk_idpelicula, $fk_idcategoria)
    {
        if (($model = PeliculaHasGenero::findOne(['fk_idpelicula' => $fk_idpelicula, 'fk_idcategoria' => $fk_idcategoria])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
