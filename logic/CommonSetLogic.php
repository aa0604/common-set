<?php

namespace xing\commonSet\yii\logic;

use xing\commonSet\yii\models\CommonSet;

class CommonSetLogic
{

    public static function getVal($key)
    {
        return CommonSet::findOne($key)->value ?? null;
    }
}