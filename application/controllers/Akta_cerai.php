<?php
defined('BASEPATH') or exit('No direct script allowed');

class Akta_cerai extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->data['token'] = $this->session->userdata('token');
		$this->load->model('akta_cerai_m');
		$this->load->model('kecamatan_m');
		$this->load->model('desa_m');
		$this->load->model('audit_m');
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

		$username = $this->data['token']['username'];
		$x = $this->data['token']['role'];
		$akta = $this->akta_cerai_m->get_by_user($username);
		foreach ($akta as $v => $i) :
			$i->akta_cerai_tanggal;
		endforeach;
		$tanggal_sekarang = date('Y-m-d');
		$tanggal_sidang = @$i->akta_cerai_tanggal;
		$id = @$i->akta_cerai_id;

		// var_dump($id);
		if ($this->data['token']['role'] == 'Operator Pengadilan') {
			$this->data['akta'] = $this->akta_cerai_m->get_by_user($username);
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Sidang Difabel';
			$this->data['content']  = 'akta_cerai/akta_cerai';
			$this->template($this->data);
			if ($tanggal_sekarang > $tanggal_sidang) {
				// var_dump($tanggal_sidang);
				$akta_cerai_status = "Selesai";
				$data = ['akta_cerai_status' => $akta_cerai_status,];
				$this->akta_cerai_m->update($id, $data);
			}
		} else {
			$this->data['akta'] = $this->akta_cerai_m->get_akta_by();
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Sidang Difabel';
			$this->data['content']  = 'akta_cerai/akta_cerai';
			$this->template($this->data);
		}
	}

	public function permohonan()
	{

		$username = $this->data['token']['username'];
		$x = $this->data['token']['role'];
		$akta = $this->akta_cerai_m->get_by_user($username);
		foreach ($akta as $v => $i) :
			$i->akta_cerai_tanggal;
		endforeach;
		$tanggal_sekarang = date('Y-m-d');
		$tanggal_sidang = @$i->akta_cerai_tanggal;
		$id = @$i->akta_cerai_id;

		// var_dump($id);
		if ($this->data['token']['role'] == 'Operator Pengadilan') {
			$this->data['akta'] = $this->akta_cerai_m->get_by_user($username);
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Data permohonan';
			$this->data['content']  = 'akta_cerai/akta_cerai';
			$this->template($this->data);
			if ($tanggal_sekarang > $tanggal_sidang) {
				// var_dump($tanggal_sidang);
				$akta_cerai_status = "Selesai";
				$data = ['akta_cerai_status' => $akta_cerai_status,];
				$this->akta_cerai_m->update($id, $data);
			}
		} else {
			$this->data['akta'] = $this->akta_cerai_m->get_akta_by();
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Data permohonan';
			$this->data['content']  = 'akta_cerai/permohonan';
			$this->template($this->data);
		}
	}

	public function pendaftaran()
	{

		$username = $this->data['token']['username'];
		$x = $this->data['token']['role'];
		$akta = $this->akta_cerai_m->get_by_pendaftaran($username);
		foreach ($akta as $v => $i) :
			$i->akta_cerai_tanggal;
		endforeach;
		$tanggal_sekarang = date('Y-m-d');
		$tanggal_sidang = @$i->akta_cerai_tanggal;
		@$id = @$i->akta_cerai_id;

		var_dump($tanggal_sidang);
		if ($this->data['token']['role'] == 'Operator Pengadilan') {
			$this->data['akta'] = $this->akta_cerai_m->get_by_pendaftaran($username);
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Pendaftaran Perkara';
			$this->data['content']  = 'akta_cerai/pendaftaran';
			$this->template($this->data);
			if ($tanggal_sekarang > $tanggal_sidang) {
				// var_dump($tanggal_sidang);
				$akta_cerai_status = "Selesai";
				$data = ['akta_cerai_status' => $akta_cerai_status,];
				$this->akta_cerai_m->update($id, $data);
			}
			if ($tanggal_sekarang == $tanggal_sidang) {
				// var_dump($tanggal_sidang);
				$akta_cerai_status = "Bersiaplah Petugas Menuju Ke Lokasi";
				$data = ['akta_cerai_status' => $akta_cerai_status,];
				$this->akta_cerai_m->update($id, $data);
			}
		} else {
			$this->data['akta'] = $this->akta_cerai_m->get_akta_by();
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Pendaftaran Perkara';
			$this->data['content']  = 'akta_cerai/pendaftaran';
			$this->template($this->data);
		}
	}
	public function produk()
	{

		$username = $this->data['token']['username'];
		$x = $this->data['token']['role'];
		$akta = $this->akta_cerai_m->get_by_produk($username);
		foreach ($akta as $v => $i) :
			$i->akta_cerai_tanggal;
		endforeach;
		$tanggal_sekarang = date('Y-m-d');
		$tanggal_sidang = @$i->akta_cerai_tanggal;
		$id = @$i->akta_cerai_id;

		// var_dump($id);
		if ($this->data['token']['role'] == 'Operator Pengadilan') {
			$this->data['akta'] = $this->akta_cerai_m->get_by_produk($username);
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Pengambilan Produk Pengadilan';
			$this->data['content']  = 'akta_cerai/produk';
			$this->template($this->data);
			if ($tanggal_sekarang > $tanggal_sidang) {
				// var_dump($tanggal_sidang);
				$akta_cerai_status = "Selesai";
				$data = ['akta_cerai_status' => $akta_cerai_status,];
				$this->akta_cerai_m->update($id, $data);
			}
		} else {
			$this->data['akta'] = $this->akta_cerai_m->get_akta_by();
			$this->data['kecamatan'] = $this->kecamatan_m->get();
			$this->data['title']    = 'Permohonan Antar Jemput Pengambilan Produk Pengadilan';
			$this->data['content']  = 'akta_cerai/produk';
			$this->template($this->data);
		}
	}

	public function proses()
	{
		$this->data['akta_proses'] = $this->akta_cerai_m->get_by_order('akta_cerai_tanggal_proses', 'DESC', ['akta_cerai_status' => 'Diproses']);
		$this->data['kecamatan'] = $this->kecamatan_m->get();

		$this->data['title']    = 'Proses Validasi';
		$this->data['content']  = 'akta_cerai/proses';
		$this->template($this->data);
	}
	public function selesai()
	{

		$this->data['akta_fix'] = $this->akta_cerai_m->get_akta_by_fix($this->data['token']['role']);
		$this->data['title']    = 'Selesai';
		$this->data['content']  = 'akta_cerai/selesai';
		$this->template($this->data);
	}
	public function penjemputan()
	{

		$this->data['akta_fix'] = $this->akta_cerai_m->get_penjemputan($this->data['token']['role']);
		$this->data['title']    = 'Proses Penjemputan';
		$this->data['content']  = 'akta_cerai/penjemputan';
		$this->template($this->data);
	}

	public function get_desa()
	{
		$kecamatan_id = $this->get('kecamatan_id');

		$data = $this->desa_m->get(['kecamatan_id' => $kecamatan_id]);

		echo json_encode($data);
	}

	public function get_json()
	{
		$id = $this->get('id');
		$data = $this->akta_cerai_m->get_row(['akta_cerai_id' => $id]);
		if ($this->data['token']['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) {
			if ($data->akta_cerai_status == AKTA_STATUS['BELUM_DILIHAT']) {
				$this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Dilihat']);
				$audit = [
					'audit_by' => $this->data['token']['username'],
					'audit_ip' => $this->input->ip_address(),
					'audit_action' => 'UPDATE',
					'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Dilihat dengan ID = ' . $id,
					'audit_link' => $this->agent->referrer(),
				];
				$this->audit_m->insert($audit);
			}
		}
		$desa = $this->desa_m->get_row(['desa_id' => $data->desa_id]);
		$kecamatan = $this->kecamatan_m->get_row(['kecamatan_id' => $data->kecamatan_id]);
		echo json_encode([$data, date('d-m-Y', strtotime($data->akta_cerai_tanggal)), $kecamatan, $desa]);
	}

	public function create()
	{
		$jenis_layanan = $this->post('jenis_layanan');
		$klasifikasi = $this->post('akta_cerai_klasifikasi');
		$tanggal_sidang = $this->post('akta_cerai_tanggal');
		$no_perkara = $this->post('akta_cerai_nomor');
		$no_ktp = $this->post('akta_cerai_no_ktp');
		$nama = $this->post('akta_cerai_nama');
		$no_hp = $this->post('no_hp');
		$jenis_kelamin = $this->post('akta_cerai_jk');
		$kecamatan_id = $this->post('kecamatan_id');
		$desa_id = $this->post('desa_id');
		$alamat = $this->post('akta_cerai_alamat');
		$titik_lokasi = $this->post('inputAddress');
		$latitude = $this->post('latitude');
		$longitude = $this->post('longitude');
		$keterangan = "";

		$path = 'uploads/';
		if (!empty($_FILES['akta_cerai_file_akta']['name'])) {
			$up = $this->go_upload('akta_cerai_file_akta', $path . 'akta/', 'pdf|jpg|jpeg|png|doc|docx');
			if ($up['status'] == 'success') {
				$akta_cerai_file_akta = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		}
		if (!empty($_FILES['akta_cerai_file_ktp']['name'])) {
			$up = $this->go_upload('akta_cerai_file_ktp', $path . 'ktp/', 'pdf|jpg|jpeg|png|doc|docx');
			if ($up['status'] == 'success') {
				$akta_cerai_file_ktp = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		}
		// if (!empty($_FILES['akta_cerai_form_perubahan']['name'])) {
		// 	$up = $this->go_upload('akta_cerai_form_perubahan', $path . 'perubahan/', 'pdf|jpg|jpeg|png|doc|docx');
		// 	if ($up['status'] == 'success') {
		// 		$akta_cerai_form_perubahan = $up['filename'];
		// 	} else {
		// 		$this->flashmsg($up['response'], $up['status']);
		// 		redirect($this->agent->referrer());
		// 	}
		// }
		// if (!empty($_FILES['akta_cerai_file_kk']['name'])) {
		// 	$up = $this->go_upload('akta_cerai_file_kk', $path . 'kk/', 'pdf|jpg|jpeg|png|doc|docx');
		// 	if ($up['status'] == 'success') {
		// 		$akta_cerai_file_kk = $up['filename'];
		// 	} else {
		// 		$this->flashmsg($up['response'], $up['status']);
		// 		redirect($this->agent->referrer());
		// 	}
		// }

		$data = [
			'user_name' => $this->data['token']['username'],
			'desa_id' => $desa_id,
			'kecamatan_id' => $kecamatan_id,
			'jenis_layanan' => $jenis_layanan,
			'akta_cerai_nomor' => $no_perkara,
			'akta_cerai_nama' => $nama,
			'akta_cerai_jk' => $jenis_kelamin,
			'akta_cerai_no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
			'akta_cerai_alamat_lama' => $alamat,
			'akta_cerai_alamat_baru' => $titik_lokasi,
			'akta_cerai_klasifikasi' => $klasifikasi,
			'akta_cerai_tanggal' => $tanggal_sidang,
			'akta_cerai_no_kk' => $latitude,
			'longitude' => $longitude,
			'keterangan' => $keterangan,
			'akta_cerai_file_akta' => isset($akta_cerai_file_akta) ? $akta_cerai_file_akta : null,
			'akta_cerai_file_ktp' => isset($akta_cerai_file_ktp) ? $akta_cerai_file_ktp : null,
			// 'akta_cerai_file_kk' => isset($akta_cerai_file_kk) ? $akta_cerai_file_kk : null,
			// 'akta_cerai_form_perubahan' => isset($akta_cerai_form_perubahan) ? $akta_cerai_form_perubahan : null,

		];
		$ins = $this->akta_cerai_m->insert($data);
		if ($ins) {

			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'CREATE',
				'audit_keterangan' => MESSAGE_AUDIT['CREATE'] . ' Data Permohonan dengan ID = ' . $ins['id'],
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$this->flashmsg(MESSAGE_SUCCESS['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['STATUS']);
			redirect($this->agent->referrer());
		} else {
			$this->flashmsg(MESSAGE_FAIL['INSERT']['MESSAGE'], MESSAGE_SUCCESS['INSERT']['MESSAGE']);
			redirect($this->agent->referrer());
		}
	}


	public function update()
	{
		$akta_cerai_id = $this->post('akta_cerai_id');
		$klasifikasi = $this->post('akta_cerai_klasifikasi');
		$tanggal_sidang = $this->post('akta_cerai_tanggal');
		$no_perkara = $this->post('akta_cerai_nomor');
		$no_ktp = $this->post('akta_cerai_no_ktp');
		$nama = $this->post('akta_cerai_nama');
		$no_hp = $this->post('no_hp');
		$jenis_kelamin = $this->post('akta_cerai_jk');
		$kecamatan_id = $this->post('kecamatan_id');
		$desa_id = $this->post('desa_id');
		$alamat = $this->post('akta_cerai_alamat');
		$titik_lokasi = $this->post('inputAddress');
		$latitude = $this->post('latitude');
		$longitude = $this->post('longitude');
		$keterangan = "";

		$old_akta_cerai_file_akta = $this->post('old_akta_cerai_file_akta');
		$old_akta_cerai_file_ktp = $this->post('old_akta_cerai_file_ktp');
		// $old_akta_cerai_file_kk = $this->post('old_akta_cerai_file_kk');
		// $old_akta_cerai_form_perubahan = $this->post('old_akta_cerai_form_perubahan');

		$path = 'uploads/';
		if (!empty($_FILES['akta_cerai_file_akta']['name'])) {
			$up = $this->go_upload('akta_cerai_file_akta', $path . 'akta/', 'pdf|jpg|jpeg|png|doc|docx');
			if ($up['status'] == 'success') {
				$akta_cerai_file_akta = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		} else {
			$akta_cerai_file_akta = $old_akta_cerai_file_akta;
		}
		if (!empty($_FILES['akta_cerai_file_ktp']['name'])) {
			$up = $this->go_upload('akta_cerai_file_ktp', $path . 'ktp/', 'pdf|jpg|jpeg|png|doc|docx');
			if ($up['status'] == 'success') {
				$akta_cerai_file_ktp = $up['filename'];
			} else {
				$this->flashmsg($up['response'], $up['status']);
				redirect($this->agent->referrer());
			}
		} else {
			$akta_cerai_file_ktp = $old_akta_cerai_file_ktp;
		}
		// if (!empty($_FILES['akta_cerai_form_perubahan']['name'])) {
		// 	$up = $this->go_upload('akta_cerai_form_perubahan', $path . 'perubahan/', 'pdf|jpg|jpeg|png|doc|docx');
		// 	if ($up['status'] == 'success') {
		// 		$akta_cerai_form_perubahan = $up['filename'];
		// 	} else {
		// 		$this->flashmsg($up['response'], $up['status']);
		// 		redirect($this->agent->referrer());
		// 	}
		// } else {
		// 	$akta_cerai_form_perubahan = $old_akta_cerai_form_perubahan;
		// }
		// if (!empty($_FILES['akta_cerai_file_kk']['name'])) {
		// 	$up = $this->go_upload('akta_cerai_file_kk', $path . 'kk/', 'pdf|jpg|jpeg|png|doc|docx');
		// 	if ($up['status'] == 'success') {
		// 		$akta_cerai_file_kk = $up['filename'];
		// 	} else {
		// 		$this->flashmsg($up['response'], $up['status']);
		// 		redirect($this->agent->referrer());
		// 	}
		// } else {
		// 	$akta_cerai_file_kk = $old_akta_cerai_file_kk;
		// }
		$akta_cerai_status = "Belum Dilihat";
		$data = [
			'user_name' => $this->data['token']['username'],
			'desa_id' => $desa_id,
			'kecamatan_id' => $kecamatan_id,
			'akta_cerai_nomor' => $no_perkara,
			'akta_cerai_nama' => $nama,
			'akta_cerai_jk' => $jenis_kelamin,
			'akta_cerai_no_ktp' => $no_ktp,
			'akta_cerai_alamat_lama' => $alamat,
			'akta_cerai_klasifikasi' => $klasifikasi,
			'akta_cerai_tanggal' => $tanggal_sidang,
			'akta_cerai_alamat_baru' => $titik_lokasi,
			'akta_cerai_no_kk' => $latitude,
			'akta_cerai_status' => $akta_cerai_status,
			'no_hp' => $no_hp,
			'longitude' => $longitude,
			'keterangan' => $keterangan,
			'akta_cerai_file_akta' => isset($akta_cerai_file_akta) ? $akta_cerai_file_akta : null,
			'akta_cerai_file_ktp' => isset($akta_cerai_file_ktp) ? $akta_cerai_file_ktp : null,
			'updated_at' => date('Y-m-d H:i:s'),

		];
		$up = $this->akta_cerai_m->update($akta_cerai_id, $data);
		if ($up) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['UPDATE'] . ' Data Permohonan dengan ID = ' . $akta_cerai_id,
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

	public function delete()
	{
		$id = $this->post('id');

		$del = $this->akta_cerai_m->delete($id);
		if ($del) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'DELETE',
				'audit_keterangan' => MESSAGE_AUDIT['DELETE'] . ' Data Permohonan dengan ID = ' . $id,
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

	public function do_proses()
	{
		$id = $this->post('id');
		$keterangan = $this->post('keterangan');
		$up = $this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Diproses', 'akta_cerai_tanggal_proses' => date('Y-m-d H:i:s'), 'keterangan' => $keterangan]);
		if ($this->post('ditolak')) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Ditolak dengan ID = ' . $id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$data = [
				'akta_cerai_status' => 'Ditolak',
				'keterangan' => $keterangan,

			];
			$this->akta_cerai_m->update($id, $data);
			// $this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Ditolak', 'keterangan' => $keterangan,]);
			redirect($this->agent->referrer());
		} else if ($up) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Diproses dengan ID = ' . $id,
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
	public function do_selesai()
	{
		$id = $this->post('id');

		$up = $this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Disetujui Penjemputan', 'akta_cerai_tanggal_selesai' => date('Y-m-d H:i:s')]);
		if ($up) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Selesai dengan ID = ' . $id,
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

	public function do_save()
	{
		$id = $this->post('id');
		$keterangan = $this->post('keterangan');
		$akta_cerai_id = $this->post('akta_cerai_id');
		$akta_cerai_no_kk = $this->post('akta_cerai_no_kk');
		$akta_cerai_no_ktp = $this->post('akta_cerai_no_ktp');
		$akta_cerai_alamat_lama = $this->post('akta_cerai_alamat_lama');
		$akta_cerai_alamat_baru = $this->post('akta_cerai_alamat_baru');

		$data = [
			'akta_cerai_no_kk' => $akta_cerai_no_kk,
			'akta_cerai_no_ktp' => $akta_cerai_no_ktp,
			'akta_cerai_alamat_lama' => $akta_cerai_alamat_lama,
			'akta_cerai_alamat_baru' => $akta_cerai_alamat_baru,
			'updated_at' => date('Y-m-d H:i:s'),
		];
		$up = $this->akta_cerai_m->update($akta_cerai_id, $data);
		if ($this->post('ditolak')) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Ditolak dengan ID = ' . $id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$data = [
				'akta_cerai_status' => 'Ditolak',
				'keterangan' => $keterangan,

			];
			$this->akta_cerai_m->update($id, $data);
			// $this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Ditolak', 'keterangan' => $keterangan,]);
			redirect($this->agent->referrer());
		} else if ($up) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['UPDATE'] . ' Data Permohonan dengan ID = ' . $akta_cerai_id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$data = [
				'akta_cerai_status' => 'Ditolak',
				'keterangan' => $keterangan,

			];
			$this->akta_cerai_m->update($id, $data);
			$this->flashmsg(MESSAGE_SUCCESS['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['STATUS']);
			redirect($this->agent->referrer());
		} else {
			$this->flashmsg(MESSAGE_FAIL['UPDATE']['MESSAGE'], MESSAGE_SUCCESS['UPDATE']['MESSAGE']);
			redirect($this->agent->referrer());
		}
	}



	public function do_cetak()
	{
		$id = $this->post('id');
		$this->data['akta'] = $this->akta_cerai_m->get_row(['akta_cerai_id' => $id]);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'margin_left' => 24,
			'margin_right' => 24,
			'margin_header' => 0,
			'margin_footer' => 0,
			'margin-bottom'	=> 20,
			'margin-top'	=> 20,
			'orientation' => 'P',
			'default_font_size' => 11,
			'default_font' => 'Arial'
		]);
		if ($this->post('diterima')) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Diterima dengan ID = ' . $id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$this->data['title'] = 'Cetak Dokumen Diterima';
			$this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Diterima', 'updated_at' => date('Y-m-d H:i:s')]);
			$data = $this->load->view('akta_cerai/diterima', $this->data, TRUE);
			$mpdf->WriteHTML($data);
			$mpdf->Output('Diterima.pdf', \Mpdf\Output\Destination::INLINE);
			redirect($this->agent->referrer());
		} else if ($this->post('dikembalikan')) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi Dikembalikan dengan ID = ' . $id,
				'audit_link' => $this->agent->referrer(),
			];
			$this->audit_m->insert($audit);
			$this->data['title'] = 'Cetak Dokumen Dikembalikan Pengadilan';
			$this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Dikembalikan', 'updated_at' => date('Y-m-d H:i:s')]);
			$data = $this->load->view('akta_cerai/dikembalikan', $this->data, TRUE);
			$mpdf->WriteHTML($data);
			$mpdf->Output('Dikembalikan.pdf', \Mpdf\Output\Destination::INLINE);
			redirect($this->agent->referrer());
		} else if ($this->post('diambil')) {
			$this->data['title'] = 'Cetak Surat Permohonan';
			$this->akta_cerai_m->update($id, ['akta_cerai_status' => 'Diproses']);
			$data = $this->load->view('akta_cerai/diambil', $this->data, TRUE);
			$mpdf->WriteHTML($data);
			$mpdf->Output('Surat Permohonan.pdf', \Mpdf\Output\Destination::INLINE);
			redirect($this->agent->referrer());
		} else {
			redirect($this->agent->referrer());
		}
	}

	public function change_status()
	{
		$id = $this->post('id');
		$status = $this->post('status');
		$up = $this->akta_cerai_m->update($id, ['akta_cerai_status' => $status]);
		if ($up) {
			$audit = [
				'audit_by' => $this->data['token']['username'],
				'audit_ip' => $this->input->ip_address(),
				'audit_action' => 'UPDATE',
				'audit_keterangan' => MESSAGE_AUDIT['STATUS'] . ' Data Permohonan menjadi ' . ucfirst($status) . ' dengan ID = ' . $id,
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
}
