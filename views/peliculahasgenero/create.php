<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */

$this->title = Yii::t('app', 'Create Pelicula Has Genero');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pelicula Has Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-has-genero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
