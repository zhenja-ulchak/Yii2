<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

   

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
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
