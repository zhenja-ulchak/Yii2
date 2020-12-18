<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servis_catr".
 *
 * @property int $id
 * @property int|null $title
 * @property int $category_id
 */
class ServisCatr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servis_catr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id'], 'integer'],
            [['category_id'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
        ];
    }
    public function getPserwiscart()
    {
        return $this->hasOne(PodServiscatr::className(), ['id' => 'category_id']);
    }

// public function getImg($id)
// {
//     $mmod=PodServiscatr::find()->where('id='.$id)->one()->imege;
//     if ($mmod!='') {$img='/web/uploadsc/' . $mmod;}else{
//      $img='/web/uploadsc/no-image.png';
//     }
//     return $img;

// }
}
