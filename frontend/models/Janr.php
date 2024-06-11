<?php

namespace frontend\models;
use \yii\db\ActiveRecord;

class Janr extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'janr';
    }
}
