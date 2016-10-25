<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Connect */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="connect-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ArticleID')->dropDownList(\app\models\Articles::find()->select(['Tittle','id'])->indexBy('id')->column())->label('Статья') ?>

     <?= $form->field($model, 'ArticleID')->dropDownList(\app\models\Tags::find()->select(['Tag','id'])->indexBy('id')->column())->label('Тег') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
