<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServisCatr */

$this->title = 'Update Servis Catr: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Servis Catrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servis-catr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
