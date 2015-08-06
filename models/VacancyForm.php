<?php

namespace app\models;

use yii\base\Model;
class VacancyForm extends Model{
	public $employment;
	public $employmenttype;
	public $name;
	public $age;
	public $education;
	public $speciality; 
	public $workhistory;
	public $civilstatus;
	public $personalauto;
	public $driverlicence;
	public $adress;
	public $salary;
	public $smoker;
	public $characteristic;
	public $selfimage;
	public $phonenumber;

	public function rules()
	{
		return[
		[['employment','employmenttype','name','age','education','speciality','civilstatus','personalauto','adress','smoker','phonenumber'],'required','message' => ''],

		];

	}
}
?>