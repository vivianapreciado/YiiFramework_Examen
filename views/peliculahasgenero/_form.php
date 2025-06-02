<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pelicula-has-genero-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_idpelicula')->textInput() ?>

    <?= $form->field($model, 'fk_idcategoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
