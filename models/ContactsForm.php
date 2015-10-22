<?php

namespace app\models;

use yii\base\Model;
class ContactsForm extends Model{
	public $organization;
	public $city;
	public $text;
	public $department;
	public $name;
	public $position;
	public $email;
	public $phone;
	
	public function rules()
	{
		return[
		[['text','department','name','email','phone'],'required','message' => ''],
		['phone','string'],
		[['organization','city','position'],'safe'],

		];

	}
}
?>