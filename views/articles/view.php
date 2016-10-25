<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = $model->Tittle;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-view">

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
            //'ID',
             //'ID',
            [ 'label' => 'Автор',
              'attribute' => 'AutorID',
               'value'=> \yii\helpers\ArrayHelper::getValue($model,'autor.Name'),
            ],
            [ 'label' => 'Опубликовано',
              'attribute' => 'Published'
            ],
            [ 'label' => 'Заголовок',
                'attribute' => 'Tittle'
            ],
             [ 'label' => 'Подпись',
              'attribute' => 'PreContent'
            ],
             [ 'label' => 'Новость',
                'attribute' => 'Content'
            ],
           
           
        ],
    ]) ?>

</div>
