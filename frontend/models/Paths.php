<?php

namespace frontend\models;
use \yii\db\ActiveRecord;

class Paths extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paths';
    }
}
