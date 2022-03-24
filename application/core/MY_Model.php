<?php

class MY_Model extends CI_Model
{
	protected $data = [];

	public function __construct()
	{
		parent::__construct();
	}

	public function affected_rows()
	{
		return $this->db->affected_rows();
	}

	public function get($cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);
		if (is_string($cond) && strlen($cond) > 3)
			$this->db->where($cond);

		/*$this->db->order_by($this->data['primary_key'], 'desc');*/
		$query = $this->db->get($this->data['table_name']);

		return $query->result();
	}

	public function select($fields = ['*'], $cond = '')
	{
		$this->db->select($fields);
		$this->db->from($this->data['table_name']);
		if (is_array($cond))
			$this->db->where($cond);
		if (is_string($cond) && strlen($cond) > 3)
			$this->db->where($cond);
		
		$query = $this->db->get();

		return $query->result();
	}

	public function select_row($fields = ['*'], $cond = '')
	{
		$this->db->select($fields);
		$this->db->from($this->data['table_name']);
		if (is_array($cond))
			$this->db->where($cond);
		if (is_string($cond) && strlen($cond) > 3)
			$this->db->where($cond);
		
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_order($ref, $order, $cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);
		if (is_string($cond) && strlen($cond) > 3)
			$this->db->where($cond);

		$this->db->order_by($ref, $order);
		$query = $this->db->get($this->data['table_name']);

		return $query->result();
	}

	public function get_last_row($cond = '', $order_by = null)
	{
		if (is_array($cond))
			$this->db->where($cond);
		if (is_string($cond) && strlen($cond) > 3)
			$this->db->where($cond);

		if ($order_by != null)
			$this->db->order_by($order_by, 'DESC');
		
		$this->db->order_by($this->data['primary_key'], 'DESC');
		$this->db->limit(1);
		$query = $this->db->get($this->data['table_name']);

		return $query->row();
	}	

	public function get_by_order_limit($ref, $order, $cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);

		$this->db->order_by($ref, $order);
		$this->db->limit(1);
		$query = $this->db->get($this->data['table_name']);

		return $query->row();
	}

	public function get_by_order_any_limit($ref, $order, $number, $cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);

		$this->db->order_by($ref, $order);
		if (!empty($number))
		$this->db->limit($number);
		$query = $this->db->get($this->data['table_name']);

		return $query->result();
	}

	public function order_limit_page($oby, $sort, $offset, $number, $cond = '')
	{
		if (is_array($cond))
			$this->db->where($cond);

		$this->db->order_by($oby, $sort);
		$this->db->limit($number,$offset);
		$query = $this->db->get($this->data['table_name']);

		return $query->result();
	}

	public function get_row($cond)
	{
		$this->db->where($cond);
		$query = $this->db->get($this->data['table_name']);

		return $query->row();
	}

	public function insert($data)
	{
		$query = $this->db->insert($this->data['table_name'], $data);
		$result = [
			'sts'	=> $query,
			'id'	=> $this->db->insert_id()
		];
		return $result;  
	}


	public function update($pk, $data)
	{
		$this->db->where($this->data['primary_key'], $pk);
		return $this->db->update($this->data['table_name'], $data);
	}

	public function update_where($cond, $data)
	{
		$this->db->where($cond);
		return $this->db->update($this->data['table_name'], $data);
	}

	public function delete($pk)
	{
		$this->db->where($this->data['primary_key'], $pk);
		return $this->db->delete($this->data['table_name']);
	}

	public function delete_by($cond)
	{
		$this->db->where($cond);
		return $this->db->delete($this->data['table_name']);
	}

	public function getOrdered($order = 'ASC')
	{
		$query = $this->db->query('SELECT * FROM ' . $this->data['table_name'] . ' ORDER BY ' . $this->data['primary_key'] . ' ' . $order);
		return $query->result();
	}

	public function getDataLike($like)
	{
		$this->db->select('*');
		$this->db->like($like);
		$query = $this->db->get($this->data['table_name']);
		return $query->result();
	}

	public function getDataJoin($tables, $jcond)
	{
		$this->db->select('*');
		for ($i = 0; $i < count($tables); $i++)
			$this->db->join($tables[$i], $jcond[$i]);
		return $this->db->get($this->data['table_name'])->result();
	} // ['table1','table2'],['table1.field1 = table1.field1','table1.field2=table2.field2'],"table1.keywhere='$id'"

	public function GetDataJoinNW($table,$type, $cond = ''){
		$i=1;
		foreach($table as $table_name=>$table_id){ 
			${'table'.$i}=$table_name;
			${'t'.$i.'id'}=$table_id;
			$i++;
		}

		$this->db->select('*');
		$this->db->from(''.$table1.' t1');
		$this->db->join(''.$table2.' t2','t1.'.$t1id.'=t2.'.$t2id,$type);
		$this->db->where($cond);
		$res = $this->db->get();
		return $res->result();
	} //  tabel sejenis pilih tipe join where
	
	public function GetDataJoinArr($table,$where){
		$i=1;
		foreach($table as $table_name=>$table_id){ 
			${'table'.$i}=$table_name;
			${'t'.$i.'id'}=$table_id;
			$i++;
		}

		$this->db->select('*');
		$j=1;
		foreach($table as $table_name=>$table_id){ 
			if($j==1){$this->db->from(''.$table1.' t1');} else {
				$this->db->join(''.${'table'.$j}.' t'.$j,'t1.'.${'t'.$j.'id'}.'=t'.$j.'.'.${'t'.$j.'id'});
			}
			$j++;
		}
		$this->db->where($where);
		$res = $this->db->get();
		return $res;
	}

	public function getJSON($url)
	{
		$content = file_get_contents($url);
		$data = json_decode($content);
		return $data;
	}

	public function validate($conf)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules($conf);
		return $this->form_validation->run();
	}

	public function required_input($input_names)
	{
		$rules = [];
		foreach ($input_names as $input)
		{
			$rules []= [
				'field'		=> $input,
				'label'		=> ucfirst($input),
				'rules'		=> 'required'
			];
		}

		return $this->validate($rules);
	}

	public function flashmsg($msg, $type = 'success',$name='msg')
	{
		return $this->session->set_flashdata($name, '<div class="alert alert-'.$type.' alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$msg.'</div>');
	}

	public function get_col($col)
	{
		$query = $this->db->query('SELECT '.$col.' FROM ' . $this->data['table_name']);
		return $query->result();
	}

}
