<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pod_serviscatr".
 *
 * @property int $id
 * @property string|null $text
 * @property string|null $imege
 */
class PodServiscatr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pod_serviscatr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'imege'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'imege' => 'Imege',
        ];
    }
}
