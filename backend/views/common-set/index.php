<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel xing\commonSet\models\CommonSetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-set-index form-inline">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增加', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 不显示搜索框 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'label',
            'key',
            'describe',
            'value',
            'updateTime',
            //'userId',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],
        ],
    ]); ?>
</div>
