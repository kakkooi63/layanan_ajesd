<?php 

class Desa_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'desa';
		$this->data['primary_key']	= 'desa_id';
	}
}