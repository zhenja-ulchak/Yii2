<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golovna".
 *
 * @property int $id
 * @property string|null $content
 * @property string|null $content_text
 * @property string|null $head
 * @property string|null $head_text
 * @property string|null $footer
 * @property string|null $footer_text
 * @property string|null $logo
 */
class Golovna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golovna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'content_text', 'head', 'head_text', 'footer', 'footer_text', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'content_text' => 'Content Text',
            'head' => 'Head',
            'head_text' => 'Head Text',
            'footer' => 'Footer',
            'footer_text' => 'Footer Text',
            'logo' => 'Logo',
        ];
    }
}
