<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model xing\commonSet\models\CommonSet */

$this->title = '修改';
$this->params['breadcrumbs'][] = ['label' => '设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key, 'url' => ['view', 'id' => $model->key]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="common-set-update">

    <?= $this->render('_form', [
        'model' => $model,
        'group' => $group,
    ]) ?>

</div>
