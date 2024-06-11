<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $desc
 * @property int|null $country_id
 * @property int|null $catalog_id
 * @property int|null $janr_id
 * @property string|null $star
 * @property string|null $format
 * @property int|null $age
 * @property string|null $created_at
 * @property string|null $year
 */
class movies extends ActiveRecord
{

    public $videoFile;
    public $photoFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'desc', 'country_id', 'janr_id', 'star', 'format', 'age','year', 'catalog_id'], 'required'],
            [['desc'], 'string'],
            [['videoFile'], 'file', 'skipOnEmpty' => true],
            [['photoFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png, gif', 'maxSize' => 1024 * 1024 * 5],
            [['country_id', 'catalog_id', 'janr_id', 'age'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['star', 'format'], 'string', 'max' => 50],
        ];
    }
}
