<?php

namespace app\models;

use yii\base\Model;
class PartnershipForm extends Model{
	public $companytype;
	public $location;
	public $timeperiod;
	public $mainactivity;
	public $typeofpartnership;
	public $info; 
	public $contactperson;
	public $position;
	public $email;
	public $phone;
	
	public function rules()
	{
		return[
		[['companytype','location','timeperiod','mainactivity','typeofpartnership','contactperson','position','email','phone'],'required','message' => ''],

		];

	}
}
?>