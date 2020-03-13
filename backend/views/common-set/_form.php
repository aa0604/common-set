<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model xing\commonSet\models\CommonSet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="common-set-form">

    <?php $form = ActiveForm::begin([
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
    'template' => '<label class="col-sm-2 control-label">{label}</label><div class="col-sm-5">{input}{error}{hint}</div>',
    ],
    ]); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
             </div>
    <div class="panel-body">
        <?= $form->field($model, 'label')->textInput(['maxlength' => true, 'placeholder' => '最好是中文名']) ?>

            <?= $form->field($model, 'key')->textInput(['maxlength' => true, 'placeholder' => '请输入英文键名']) ?>


    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>
        
        <?= $form->field($model, 'group')->dropDownList($group) ?>

        <?= $form->field($model, 'describe')->textInput(['maxlength' => true, 'placeholder' => '备注/说明']) ?>


        <div class="form-group text-center">
            <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>

    <?php ActiveForm::end(); ?>

</div>
