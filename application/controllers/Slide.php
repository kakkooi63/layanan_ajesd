<?php
defined('BASEPATH') or exit('No direct script allowed');

class Slide extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->data['token'] = $this->session->userdata('token');
		$this->load->model('slide_m');
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
		$this->data['slide'] = $this->slide_m->get_by_order('slide_id','DESC');
		$this->data['title']    = 'Galeri';
		$this->data['content']  = 'slide';
		$this->template($this->data);
	}

	public function create()
	{

		$slide_judul = $this->post('judul');
		$slide_isi = $this->post('isi');

		$path = 'uploads/';
		if (!empty($_FILES['image']['name'])) {
			$up = $this->go_upload('image', $path.'slide/', 'png|jpg|jpeg');
			if ($up['status'] == 'success') {
				$slide_gambar = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		}

		$data = [
			'slide_judul' => $slide_judul,
			'slide_isi' => $slide_isi,
			'slide_gambar' => isset($slide_gambar) ? $slide_gambar : null,

		];
		$ins = $this->slide_m->insert($data);
		$audit = [
			'audit_by' => $this->data['token']['username'],
			'audit_ip' => $this->input->ip_address(), 
			'audit_action' => 'CREATE',
			'audit_keterangan' => MESSAGE_AUDIT['CREATE'] .' Slide dengan ID = ' . $ins['id'],
			'audit_link' => $this->agent->referrer(),
		];
		$this->audit_m->insert($audit);
		if ($ins) {
			$this->flashmsg(MESSAGE_SUCCESS['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['STATUS']);
			redirect($this->agent->referrer());
		} else {
			$this->flashmsg(MESSAGE_FAIL['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['MESSAGE']);
			redirect($this->agent->referrer());
		}
	}

	public function update()
	{

		$slide_judul = $this->post('slide_judul');
		$slide_isi = $this->post('slide_isi');
		$slide_id = $this->post('slide_id');
		$old_img = $this->post('slide_gambar');

		$path = 'uploads/';
		if (!empty($_FILES['image']['name'])) {
			$up = $this->go_upload('image', $path.'slide/', 'png|jpg|jpeg');
			if ($up['status'] == 'success') {
				$slide_gambar = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		} else {
			$slide_gambar = $old_img;
		}

		$data = [
			'slide_judul' => $slide_judul,
			'slide_isi' => $slide_isi,
			'slide_gambar' => isset($slide_gambar) ? $slide_gambar : null,

		];
		$ins = $this->slide_m->update($slide_id,$data);
		if ($ins) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(), 
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['UPDATE'] .' Slide dengan ID = ' . $slide_id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$this->flashmsg(MESSAGE_SUCCESS['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['STATUS']);
			redirect($this->agent->referrer());
		} else {
			$this->flashmsg(MESSAGE_FAIL['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['MESSAGE']);
			redirect($this->agent->referrer());
		}
	}


	public function delete(){

		if(isset($_POST['delete_slide'])){
			$slide_id = $this->post('slide_id');

			$delete = $this->slide_m->delete($slide_id);

			if($delete == '1'){
				$audit = [
					'audit_by' => $this->data['token']['username'],
					'audit_ip' => $this->input->ip_address(), 
					'audit_action' => 'DELETE',
					'audit_keterangan' => MESSAGE_AUDIT['DELETE'] .' Slide dengan ID = ' . $slide_id,
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