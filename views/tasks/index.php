<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel rokittd\tasks\models\TaskModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Task Records');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<span>'.Yii::t('app', 'Create Task Record').'</span>', ['create'], ['class' => 'btn-rd btn-rd-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'updated_at',
            'user_id',
            'description:ntext',
            // 'status',
            // 'closed_at',
            // 'estimate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
