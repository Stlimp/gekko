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
	public $workhistory_years;
	public $workhistory_second;
	public $workhistory_years_second;
	public $workhistory_third;
	public $workhistory_years_third;
	public $workhistory_fourth;
	public $workhistory_years_fourth;
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
		[['employment','employmenttype','name','age','education','speciality','civilstatus','personalauto','adress','smoker','phonenumber','workhistory','workhistory_years'],'required','message' => ''],
		['phonenumber','string'],
		[['workhistory_second','workhistory_third','workhistory_fourth','workhistory_years_second','workhistory_years_third','workhistory_years_fourth','driverlicence','characteristic','selfimage'],'safe']

		];

	}
}
?>