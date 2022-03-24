<?php
defined('BASEPATH') OR exit('No direct script allowed');
class User extends MY_Controller{

	public function __construct(){
		parent::__construct();

		$this->data['token'] = $this->session->userdata('token');
		$this->load->model('akta_cerai_m');
		$this->load->model('audit_m');
		if (!isset($this->data['token'])) {
			$this->session->sess_destroy();
			$this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'warning');
			redirect('login');
			exit;
		}

		if($this->data['token']['role'] != ROLE_AKSES['ADMIN'] && $this->data['token']['role'] != ROLE_AKSES['ADMIN_DUKCAPIL']){
			redirect('404-error');
		}
		$this->load->model('user_m');
	}

	public function index(){
		$this->data['user'] = $this->user_m->get_by_role($this->data['token']['role']);
		$this->data['title']    = 'User';
		$this->data['content']  = 'user';
		$this->template($this->data);
	}

	public function create(){

		if(isset($_POST['save_user'])){
			$username = $this->post('username');
			$nama = $this->post('nama');
			$password = $this->post('password');
			$repassword = $this->post('repassword');
			$role = $this->post('role');

			
			$cekuname=$this->user_m->get(['user_username' => $username]);

			if(count($cekuname)==1){
				$this->flashmsg(MESSAGE_FAIL['USERNAME_USED']['MESSAGE'], MESSAGE_FAIL['USERNAME_USED']['STATUS']);
				redirect($this->agent->referrer());
			}else{
				if($password==$repassword){
					$data = [
						'user_username' => $username,
						'user_password' => md5($password), 
						'user_nama'=>$nama,
						'user_role'=>$role,
						'created_by'=>$this->data['token']['nama']
					];
					$insert = $this->user_m->insert($data);

					if($insert['sts'] == '1'){
						$audit = [
							'audit_by' => $this->data['token']['username'],
							'audit_ip' => $this->input->ip_address(), 
							'audit_action' => 'CREATE',
							'audit_keterangan' => MESSAGE_AUDIT['CREATE'] .' User dengan ID = ' . $insert['id'],
							'audit_link' => $this->agent->referrer(),
						];
						$this->audit_m->insert($audit);
						$this->flashmsg(MESSAGE_SUCCESS['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['STATUS']);
						redirect($this->agent->referrer());
					} else {
						$this->flashmsg(MESSAGE_FAIL['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['MESSAGE']);
						redirect($this->agent->referrer());
					}
				}else {
					$this->flashmsg(MESSAGE_FAIL['PASSWORD_NO_MATCH']['MESSAGE'], MESSAGE_SUCCESS['PASSWORD_NO_MATCH']['MESSAGE']);
					redirect($this->agent->referrer());	
				}
			}
		} 

	}


	public function update(){

		if(isset($_POST['edit_user'])){

			$user_id = $this->post('user_id');
			$username = $this->post('username');
			$nama = $this->post('nama');
			$password = $this->post('password');
			$repassword = $this->post('repassword');
			$role = $this->post('role');


			if($password==$repassword){
				$data = [
					'user_username' => $username,
					'user_password' => md5($password), 
					'user_nama'=>$nama,
					'user_role'=>$role
				];
				$update = $this->user_m->update($user_id,$data);

				if($update == '1'){
					$audit = [
						'audit_by' => $this->data['token']['username'],
						'audit_ip' => $this->input->ip_address(), 
						'audit_action' => 'UPDATE',
						'audit_keterangan' => MESSAGE_AUDIT['UPDATE'] .' User dengan ID = ' . $user_id,
						'audit_link' => $this->agent->referrer(),
					];
					$this->audit_m->insert($audit);
					$this->flashmsg(MESSAGE_SUCCESS['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['STATUS']);
					redirect($this->agent->referrer());
				} else {
					$this->flashmsg(MESSAGE_FAIL['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['MESSAGE']);
					redirect($this->agent->referrer());
				}
			}else {
				$this->flashmsg(MESSAGE_FAIL['PASSWORD_NO_MATCH']['MESSAGE'], MESSAGE_SUCCESS['PASSWORD_NO_MATCH']['MESSAGE']);
				redirect($this->agent->referrer());	
			}
		} 

	}

	public function delete(){

		if(isset($_POST['delete_user'])){
			$user_id = $this->post('user_id');

			$delete = $this->user_m->delete($user_id);

			if($delete == '1'){
				$audit = [
					'audit_by' => $this->data['token']['username'],
					'audit_ip' => $this->input->ip_address(), 
					'audit_action' => 'DELETE',
					'audit_keterangan' => MESSAGE_AUDIT['DELETE'] .' User dengan ID = ' . $user_id,
					'audit_link' => $this->agent->referrer(),
				];
				$this->audit_m->insert($audit);
				$this->flashmsg(MESSAGE_SUCCESS['DELETE']['MESSAGE'], MESSAGE_SUCCESS['DELETE']['STATUS']);
				redirect($this->agent->referrer());
			} else {
				$this->flashmsg(MESSAGE_FAIL['DELETE']['MESSAGE'], MESSAGE_SUCCESS['DELETE']['MESSAGE']);
				redirect($this->agent->referrer());
			}
		} 

	}
}
