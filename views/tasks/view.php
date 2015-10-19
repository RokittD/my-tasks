<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model rokittd\tasks\models\TaskRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Task Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Html::tag('span', Yii::t('app', 'Update')), ['update', 'id' => $model->id], ['class' => 'btn-rd btn-rd-primary']) ?>
        <?= Html::a(Html::tag('span', Yii::t('app', 'Delete')), ['delete', 'id' => $model->id], [
            'class' => 'btn-rd btn-rd-error',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'user_id',
            'description:ntext',
            'status',
            'closed_at',
            'estimate',
        ],
    ]) ?>

</div>
