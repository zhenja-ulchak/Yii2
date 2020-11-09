<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PodServiscatr */

$this->title = 'Update Pod Serviscatr: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pod Serviscatrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pod-serviscatr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
