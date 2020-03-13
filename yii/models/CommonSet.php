<?php

namespace xing\commonSet\yii\models;

use Yii;

/**
 * This is the model class for table "common_set".
 *
 * @property string $key 键名
 * @property string $label 名称
 * @property string|null $describe 描述
 * @property string|null $value 值
 * @property string|null $updateTime 修改时间
 * @property int|null $userId 操作用户
 */
class CommonSet extends \xing\helper\yii\BaseActiveModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'common_set';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'label'], 'required'],
            [['updateTime'], 'safe'],
            [['userId'], 'integer'],
            [['key'], 'string', 'max' => 100],
            [['label'], 'string', 'max' => 1000],
            [['describe', 'value'], 'string', 'max' => 5000],
            [['key'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'key' => '键名',
            'label' => '名称',
            'describe' => '描述',
            'value' => '值',
            'updateTime' => '修改时间',
            'userId' => '操作用户',
        ];
    }
}