<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ActorHasPelicula $model */

$this->title = Yii::t('app', 'Create Actor Has Pelicula');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Actor Has Peliculas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-has-pelicula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
