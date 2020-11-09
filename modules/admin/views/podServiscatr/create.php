<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PodServiscatr */

$this->title = 'Create Pod Serviscatr';
$this->params['breadcrumbs'][] = ['label' => 'Pod Serviscatrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pod-serviscatr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
