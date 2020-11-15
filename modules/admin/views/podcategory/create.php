<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Podcategory */

$this->title = 'Create Podcategory';
$this->params['breadcrumbs'][] = ['label' => 'Podcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="podcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
