<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Golovna */

$this->title = 'Create Golovna';
$this->params['breadcrumbs'][] = ['label' => 'Golovnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golovna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
