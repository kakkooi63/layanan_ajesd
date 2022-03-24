<?php 

class Audit_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'audit';
		$this->data['primary_key']	= 'audit_id';
	}
}