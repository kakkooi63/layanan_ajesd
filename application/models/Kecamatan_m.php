<?php 

class Kecamatan_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'kecamatan';
		$this->data['primary_key']	= 'kecamatan_id';
	}
}