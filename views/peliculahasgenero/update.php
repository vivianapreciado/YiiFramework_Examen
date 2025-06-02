<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */

$this->title = Yii::t('app', 'Update Pelicula Has Genero: {name}', [
    'name' => $model->fk_idpelicula,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pelicula Has Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fk_idpelicula, 'url' => ['view', 'fk_idpelicula' => $model->fk_idpelicula, 'fk_idcategoria' => $model->fk_idcategoria]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pelicula-has-genero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
