<?php

use app\models\ActorHasPelicula;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ActorHasPeliculaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Actor Has Peliculas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-has-pelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Actor Has Pelicula'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fk_idactor',
            'fk_idpelicula',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ActorHasPelicula $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
