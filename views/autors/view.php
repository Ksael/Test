<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Autors */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Autors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autors-view">

    <h1><?= Html::encode($this->title) ?></h1>

 
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->ID], [
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
             [ 'label' => 'ID',
              'attribute' => 'ID'
            ],
            [ 'label' => 'Имя',
              'attribute' => 'Name'
            ],
            [ 'label' => 'Email',
              'attribute' => 'Email'
            ],
            [ 'label' => 'Автор',
              'attribute' => 'about'
            ],
        ],
    ]) ?>

</div>
