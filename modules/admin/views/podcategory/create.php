<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PodCategory */

$this->title = 'Create Pod Category';
$this->params['breadcrumbs'][] = ['label' => 'Pod Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pod-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
