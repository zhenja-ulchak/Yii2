<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServisCatr */

$this->title = 'Create Servis Catr';
$this->params['breadcrumbs'][] = ['label' => 'Servis Catrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-catr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
