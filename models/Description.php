<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "description".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 */
class Description extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'description';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Заголовок',
            'text' => 'Текст',
        ];
    }
}
