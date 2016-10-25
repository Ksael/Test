<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Connect */

$this->title = 'Create Connect';
$this->params['breadcrumbs'][] = ['label' => 'Connects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="connect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
