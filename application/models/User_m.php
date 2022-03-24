<?php 

class User_m extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'user';
		$this->data['primary_key']	= 'user_id';
	}


	public function get_by_role($role){
		$sql = " SELECT * FROM user ";
		$sql .= " WHERE user.user_id IS NOT NULL ";

		if ($role == 'Admin Dukcapil') {
			$sql .= " AND (user.user_role = 'Admin Dukcapil' || user.user_role = 'Operator Dukcapil') ";
		}
		$sql .= " ORDER BY user.user_id DESC ";
		$q = $this->db->query($sql)->result();

		return $q;
	}
}