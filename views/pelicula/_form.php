<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pelicula $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pelicula-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>


    <?php if($model->portada): ?>
        <div class="from-group">
            <?= Html::label('Imagen Actual') ?>
            <div>
                <?= Html::img(Yii::getAlias('@web') . '/portadas/' . $model->portada, ['style' => 'width: 200px']); ?>
            </div>
        </div>
    <?php endif; ?>


    <?php // $form->field($model, 'portada')->textInput(['maxlength' => true]) ?> 

    <?= $form->field($model, 'imageFile')->fileInput()->label('Seleccionar Portada') ?>




    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estudio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinopsis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anio')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <?= $form->field($model, 'fk_iddirector')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
