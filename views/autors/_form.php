<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Autors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true])->label('Email') ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6])->label('Описание') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
