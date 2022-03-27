<?php
defined('BASEPATH') or exit('No direct script allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('akta_cerai_m');
		$this->data['token'] = $this->session->userdata('token');
		if (!isset($this->data['token'])) {
			$this->session->sess_destroy();
			$this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'warning');
			redirect('login');
			exit;
		}
		$username = $this->data['token']['username'];
		$this->data['sum'] = $this->akta_cerai_m->get_sum_status();
		$this->data['sum_one'] = $this->akta_cerai_m->get_sum_status_one($username);
	}

	public function index()
	{
		$this->data['title']    = 'Dashboard';
		$this->data['content']  = 'home';
		$this->template($this->data);
	}
	public function panduan()
	{
		$this->data['title']    = 'Panduan Pengguna';
		$this->data['content']  = 'panduan';
		$this->template($this->data);
	}
}
