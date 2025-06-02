<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */

$this->title = $model->fk_idpelicula;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pelicula Has Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pelicula-has-genero-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'fk_idpelicula' => $model->fk_idpelicula, 'fk_idcategoria' => $model->fk_idcategoria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'fk_idpelicula' => $model->fk_idpelicula, 'fk_idcategoria' => $model->fk_idcategoria], [
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
            'fk_idpelicula',
            'fk_idcategoria',
        ],
    ]) ?>

</div>
