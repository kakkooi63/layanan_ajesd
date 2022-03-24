<?php
defined('BASEPATH') or exit('No direct script allowed');

class Audit extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->data['token'] = $this->session->userdata('token');
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
	}

	public function index()
	{
		$this->data['audit'] = $this->audit_m->get_by_order('audit_tanggal','DESC');
		$this->data['title']    = 'Audit';
		$this->data['content']  = 'audit';
		$this->template($this->data);
	}
}