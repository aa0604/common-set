<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model xing\commonSet\models\CommonSet */

$this->title = '增加配置';
$this->params['breadcrumbs'][] = ['label' => '设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-set-create">


    <?= $this->render('_form', [
        'model' => $model,
        'group' => $group,
    ]) ?>

</div>
