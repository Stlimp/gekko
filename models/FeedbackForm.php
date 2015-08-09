<?php

namespace app\models;

use yii\base\Model;
class FeedbackForm extends Model{
	public $name;
	public $text;
	public $department;
	public $email;
	public $phone;
	
	public function rules()
	{
		return[
		[['name','text','department'],'required','message' => ''],

		];

	}
}
?>