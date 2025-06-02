<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ActorHasPelicula $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="actor-has-pelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_idactor')->textInput() ?>

    <?= $form->field($model, 'fk_idpelicula')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
