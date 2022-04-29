<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "call".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $created
 * @property string|null $email
 * @property string|null $text
 */
class Call extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'call';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created'], 'safe'],
            [['text'], 'string'],
            [['email'], 'email'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'created' => 'Дата создания',
            'email' => 'Email',
            'text' => 'Текст сообщения',
        ];
    }

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom('maksakow28@yandex.ru')
                ->setReplyTo([$this->email => $this->name])
                ->setSubject('Заявка с сайта от ' . $this->email)
                ->setTextBody($this->text)
                ->send();

            return true;
        }
        return false;
    }
}
