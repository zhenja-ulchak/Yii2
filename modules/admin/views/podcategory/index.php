<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PodCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pod Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pod-category-index">

  

    <p>
        <?= Html::a('Create Pod Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'text',
            'imege',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
