<?php 

class Slide_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'slide';
		$this->data['primary_key']	= 'slide_id';
	}
}