<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'AutorID')->dropDownList(\app\models\Autors::find()->select(['name','id'])->indexBy('id')->column())->label('Автор') ?>
    <?= $form->field($model, 'Published')->textInput(['type'=>'date'])->label('Опубликовано') ?>

    <?= $form->field($model, 'Tittle')->textInput(['maxlength' => true])->label('Заголовок') ?>
    <?= $form->field($model, 'PreContent')->textarea(['rows' => 6])->label('Подпись') ?>
    <?= $form->field($model, 'Content')->textarea(['rows' => 6])->label('Новость') ?>
   <?=$form->field($model, 'ID')->checkboxList($model->itemsList)  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
