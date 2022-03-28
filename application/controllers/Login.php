<?php
defined('BASEPATH') or exit('No direct script allowed');
class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$token = $this->session->userdata('token');
		$this->load->model('akta_cerai_m');
		$this->load->model('user_m');
		$this->load->model('slide_m');
		if (isset($token)) {
			redirect('');
		}
		$this->data['sum'] = $this->akta_cerai_m->get_sum_status();
	}

	public function index()
	{
		$this->data['title']    = 'AJESD';
		if (isset($_POST['login'])) {

			$username = $this->input->post('username');
			$cek_user = $this->user_m->get(['user_username' => $username]);
			if (count($cek_user) == 0) {
				$this->flashmsg('Tidak ada data', 'danger');
				redirect(site_url(), 'refresh');
			} else {
				if ($cek_user[0]->user_role == ROLE_AKSES['ADMIN'] || $cek_user[0]->user_role == ROLE_AKSES['ADMIN_DUKCAPIL'] || $cek_user[0]->user_role == ROLE_AKSES['OPERATOR_PENGADILAN'] || $cek_user[0]->user_role == ROLE_AKSES['OPERATOR_DUKCAPIL']) {

					$data = [
						'user_username'	=>	$username,
						'user_password'	=>	md5($this->post('password')),
					];

					$user = $this->user_m->get_row($data);

					if (isset($user)) {
						$resource = [
							'user_id'	=> $user->user_id,
							'username'	=> $user->user_username,
							'nama'	=> $user->user_nama,
							'role' 		=> $user->user_role,
						];

						$this->data['resess'] 	= $resource;
						$this->data['message'] 	= 'Auth success';
						$this->data['info'] 	= [
							'status' 	=> 'ok',
							'response'	=> 200
						];
						$update = $this->user_m->update($user->user_id, ['last_login' => date("Y-m-d H:i:s")]);
					} else {
						$this->data['message'] 	= 'Wrong username or password';
						$this->data['info'] 	= [
							'status'	=> 'fail',
							'response'	=> 502
						];
					}

					if ($this->data['info']['status'] === 'ok') {
						$this->flashmsg($this->data['message'], 'success');
						$this->session->set_userdata(['token' => $this->data['resess']]);
						redirect('');
					} else {
						$this->flashmsg($this->data['message'], 'danger');
						redirect('');
					}
				} else {
					$this->flashmsg('Forbidden Access', 'danger');
				}
			}
		}
		$this->data['slide'] = $this->slide_m->get_by_order('slide_id', 'DESC');
		$this->load->view('beranda', $this->data);
	}

	public function daftar()
	{
		$valid = $this->form_validation->set_rules('nama', 'nama', 'required', array('required' => 'Anda belum mengisikan Nama lengkap'));
		$valid = $this->form_validation->set_rules('jk_user', 'jk_user', 'required', array('required' => 'Anda belum mengisikan Jenis Kelamin'));
		$valid = $this->form_validation->set_rules('no_hp', 'no_hp', 'required', array('required' => 'Anda belum mengisikan No Handphone'));
		$valid = $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.user_username]', [
			'required' => 'Anda belum mengisikan Email',
			'is_unique' => 'Email anda sudah terdaftar'
		]);
		$valid = $this->form_validation->set_rules('password', 'password', 'required|min_length[6]', array(
			'required' => 'Anda belum mengisikan Password',
			'min_length' => 'Password minimal 6 karakter '
		));

		if ($valid->run() === false) {
			redirect($this->agent->referrer());
		} else {
			$i  = $this->input;
			$data = array(
				'user_username'   =>  htmlspecialchars($i->post('email')),
				'user_nama'       => htmlspecialchars($i->post('nama')),
				'user_password'           =>  md5($i->post('password')),
				'no_hp'          =>  htmlspecialchars($i->post('no_hp')),
				'jenis_kelamin'            =>  htmlspecialchars($i->post('jk_user')),
				'user_role'        =>  'Operator Pengadilan',
			);

			$this->user_m->insert($data);

			redirect($this->agent->referrer());
		}
	}
}
