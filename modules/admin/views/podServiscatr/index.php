<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PodServiscatrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pod Serviscatrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pod-serviscatr-index">

  

    <p>
        <?= Html::a('Create Pod Serviscatr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text',
            'imege',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
