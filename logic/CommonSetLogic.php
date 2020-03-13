<?php

namespace xing\commonSet\logic;

use xing\commonSet\models\CommonSet;

class CommonSetLogic
{

    public static function getVal($key)
    {
        return CommonSet::findOne($key)->value ?? null;
    }
}