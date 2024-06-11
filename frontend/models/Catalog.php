<?php

namespace frontend\models;
use yii\db\ActiveRecord;

/**
 *
 */
class Catalog extends ActiveRecord
{

	public static function tableName()
    {
        return 'catalog';
    }

}