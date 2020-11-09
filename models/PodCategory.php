<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pod_category".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property string|null $imege
 */
class PodCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pod_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text', 'imege'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'imege' => 'Imege',
        ];
    }
}
