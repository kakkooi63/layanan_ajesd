<?php
defined('BASEPATH') or exit('No direct script allowed');

class Report extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->data['token'] = $this->session->userdata('token');
		$this->load->model('akta_cerai_m');
		$this->load->model('kecamatan_m');
		$this->load->model('desa_m');
		$this->load->model('akta_cerai_m');
		if (!isset($this->data['token'])) {
			$this->session->sess_destroy();
			$this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'warning');
			redirect('login');
			exit;
		}

		$this->data['sum'] = $this->akta_cerai_m->get_sum_status();
	}

	public function index()
	{
		$this->data['akta'] = $this->akta_cerai_m->get_by_order('akta_cerai_tanggal_proses','DESC');
		$this->data['kecamatan'] = $this->kecamatan_m->get();
		$this->data['desa'] = $this->desa_m->get();

		if ($this->post('search')) {
			$awal = $this->post('awal');
			$akhir = $this->post('akhir');
			$status = $this->post('status');
			$kecamatan = $this->post('kecamatan');
			$desa = $this->post('desa');

			$this->data['akta'] = $this->akta_cerai_m->get_search($status,$awal,$akhir,$kecamatan,$desa);
		}

		$this->data['title']    = 'Report';
		$this->data['content']  = 'report/view';
		$this->template($this->data);
	}
}