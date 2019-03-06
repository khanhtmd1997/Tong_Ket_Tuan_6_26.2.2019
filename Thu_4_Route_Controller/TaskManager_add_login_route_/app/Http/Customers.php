<?php
namespace App\Http;

class Customers {

	public $id;
	public $name;
	public $sdt;
	public $email; 


	function __construct($_id,$_name,$_sdt,$_email){
			$this->id = $_id;
			$this->name = $_name;
			$this->sdt = $_sdt;
			$this->email = $_email;
	}


}
