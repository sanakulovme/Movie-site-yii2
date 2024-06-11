<?php

namespace frontend\models;
use yii\db\ActiveRecord;

/**
 *
 */
class Kinolar extends ActiveRecord
{

	public static function tableName()
    {
        return 'movies';
    }

    public function getGenre()
    {
        return $this->hasOne(Janr::class, ['id' => 'janr_id']);
    }

    public function getCountry()
    {
        return $this->hasOne(Country::class, ['id' => 'country_id']);
    }

    public function getCatalog()
    {
        return $this->hasOne(Catalog::class, ['id' => 'catalog_id']);
    }

    public function getImg()
    {
        return $this->hasOne(Paths::class, ['movie_id' => 'id']);
    }

}