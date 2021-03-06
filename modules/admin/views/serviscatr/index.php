<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServisCatrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servis Catrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servis-catr-index">

  

    <p>
        <?= Html::a('Create Servis Catr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
