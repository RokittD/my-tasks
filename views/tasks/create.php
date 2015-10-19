<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model rokittd\tasks\models\TaskRecord */

$this->title = Yii::t('app', 'Create Task Record');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Task Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
