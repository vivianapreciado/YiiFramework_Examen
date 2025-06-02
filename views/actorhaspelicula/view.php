<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ActorHasPelicula $model */

$this->title = $model->fk_idactor;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actor Has Peliculas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="actor-has-pelicula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fk_idactor',
            'fk_idpelicula',
        ],
    ]) ?>

</div>
