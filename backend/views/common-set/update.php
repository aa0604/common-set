<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\site\CommonSet */

$this->title = 'Update Common Set: ' . $model->key;
$this->params['breadcrumbs'][] = ['label' => 'Common Sets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key, 'url' => ['view', 'id' => $model->key]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="common-set-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
