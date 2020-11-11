<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GolovnaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golovnas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golovna-index">



    <p>
        <?= Html::a('Create Golovna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'content',
            'content_text',
            'head',
            'head_text',
            //'footer',
            //'footer_text',
            //'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'headerRowOptions' => [
            'class' => 'headerCustomRow'
        ],
        'footerRowOptions' => [
            'style' => 'color: #888;font-style: italic;'
        ],
        'rowOptions' =>[ 'style'=>'color:black'],
    ]); ?>


</div>
<style>
    .empty-cell{
        background: #c12e2a;
    }
    .headerCustomRow, .headerCustomRow th, .headerCustomRow a{
        background: #337ab7;
        color: black;
    }
    .stripShow{
        background: #e9f1ff
    }
</style>
