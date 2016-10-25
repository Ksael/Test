<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Connect */

$this->title = $model->AtricleID." / ".$model->TagID;
$this->params['breadcrumbs'][] = ['label' => 'Connects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="connect-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы серьезно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            [ 'label' => 'Статья',
              'attribute' => 'AtricleID'
            ],
            [ 'label' => 'Тег',
              'attribute' => 'TagID'
            ],
            
        ],
    ]) ?>

</div>
