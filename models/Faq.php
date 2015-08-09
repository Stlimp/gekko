<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_q_and_a".
 *
 * @property integer $id
 * @property string $chapter
 * @property string $question
 * @property string $answer
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_q_and_a';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chapter', 'question', 'answer'], 'required'],
            [['question', 'answer'], 'string'],
            [['chapter'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chapter' => 'Chapter',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }
}
