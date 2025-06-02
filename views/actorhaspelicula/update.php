<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ActorHasPelicula $model */

$this->title = Yii::t('app', 'Update Actor Has Pelicula: {name}', [
    'name' => $model->fk_idactor,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actor Has Peliculas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fk_idactor, 'url' => ['view', 'fk_idactor' => $model->fk_idactor, 'fk_idpelicula' => $model->fk_idpelicula]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="actor-has-pelicula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
