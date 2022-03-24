<?php

class Akta_cerai_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'akta_cerai';
		$this->data['primary_key']	= 'akta_cerai_id';
	}

	public function get_akta_by()
	{
		$q = $this->db->query("SELECT * FROM akta_cerai a INNER JOIN kecamatan b on a.kecamatan_id=b.kecamatan_id INNER JOIN desa c on a.desa_id=c.desa_id WHERE a.akta_cerai_status = 'Dilihat' || a.akta_cerai_status = 'Belum Dilihat' || a.akta_cerai_status = 'Ditolak' ORDER BY a.akta_cerai_id DESC")->result();
		return $q;
	}
	public function get_by_user($username)
	{
		$q = $this->db->query("SELECT * FROM akta_cerai a INNER JOIN kecamatan b ON a.kecamatan_id=b.kecamatan_id INNER JOIN desa c ON a.desa_id=c.desa_id 
		WHERE a.user_name ='$username' AND a.jenis_layanan ='persidangan' AND a.akta_cerai_status != 'Selesai'
		ORDER BY a.akta_cerai_id DESC
		")->result();
		return $q;
	}
	public function get_by_pendaftaran($username)
	{
		$q = $this->db->query("SELECT * FROM akta_cerai a INNER JOIN kecamatan b ON a.kecamatan_id=b.kecamatan_id INNER JOIN desa c ON a.desa_id=c.desa_id 
		WHERE a.user_name ='$username' AND a.jenis_layanan ='pendaftaran' AND a.akta_cerai_status != 'Selesai'
		ORDER BY a.akta_cerai_id DESC
		")->result();
		return $q;
	}
	public function get_by_produk($username)
	{
		$q = $this->db->query("SELECT * FROM akta_cerai a INNER JOIN kecamatan b ON a.kecamatan_id=b.kecamatan_id INNER JOIN desa c ON a.desa_id=c.desa_id 
		WHERE a.user_name ='$username' AND a.jenis_layanan ='pengambilan produk pengadilan' AND a.akta_cerai_status != 'Selesai'
		ORDER BY a.akta_cerai_id DESC
		")->result();
		return $q;
	}
	public function get_akta_by_fix($role)
	{
		/*$sql  = " SELECT * FROM akta_cerai ";
		$sql .= " WHERE akta_cerai_id IS NOT NULL ";*/
		/*if ($role == ROLE_AKSES['OPERATOR_DUKCAPIL']) {
		}*/
		$q = $this->db->query("SELECT * FROM akta_cerai WHERE akta_cerai_status = 'Selesai' ORDER BY akta_cerai_status ASC, akta_cerai_id DESC ")->result();
		return $q;
	}
	public function get_penjemputan($role)
	{
		/*$sql  = " SELECT * FROM akta_cerai ";
		$sql .= " WHERE akta_cerai_id IS NOT NULL ";*/
		/*if ($role == ROLE_AKSES['OPERATOR_DUKCAPIL']) {
		}*/
		$q = $this->db->query("SELECT * FROM akta_cerai WHERE akta_cerai_status = 'Disetujui Penjemputan' || akta_cerai_status = 'Bersiaplah Petugas Menuju Ke Lokasi' ORDER BY akta_cerai_tanggal ASC, akta_cerai_id DESC ")->result();
		return $q;
	}
	public function get_akta_by_fix_user($username)
	{
		/*$sql  = " SELECT * FROM akta_cerai ";
		$sql .= " WHERE akta_cerai_id IS NOT NULL ";*/
		/*if ($role == ROLE_AKSES['OPERATOR_DUKCAPIL']) {
		}*/
		$q = $this->db->query("SELECT * FROM akta_cerai WHERE user_name='$username' AND
		 akta_cerai_status = 'Selesai' ORDER BY akta_cerai_status ASC, akta_cerai_id DESC ")->result();
		return $q;
	}

	public function get_sum_status()
	{
		$q = $this->db->query("SELECT 
			sum(case when akta_cerai_status = 'Belum Dilihat' then 1 else 0 end) AS belum_dilihat,
			sum(case when akta_cerai_status = 'Dilihat' then 1 else 0 end) AS dilihat,
			sum(case when akta_cerai_status = 'Diproses' then 1 else 0 end) AS diproses,
			sum(case when akta_cerai_status = 'Disetujui Penjemputan' then 1 else 0 end) AS disetujui,
			sum(case when akta_cerai_status = 'Bersiaplah Petugas Menuju Ke Lokasi' then 1 else 0 end) AS bersiap,
			sum(case when akta_cerai_status = 'Selesai' then 1 else 0 end) AS selesai,
			sum(case when akta_cerai_status = 'Diterima' then 1 else 0 end) AS diterima,
			sum(case when akta_cerai_status = 'Dikembalikan' then 1 else 0 end) AS dikembalikan
			FROM akta_cerai")->result();
		return $q;
	}

	public function get_search($status, $awal, $akhir, $kecamatan, $desa)
	{
		$q = " SELECT * FROM akta_cerai ";
		$q .= " WHERE akta_cerai.akta_cerai_id IS NOT NULL ";
		if ($status == 'Diinput') {
			$q .= " AND akta_cerai.akta_cerai_status = 'Dilihat' ||  akta_cerai.akta_cerai_status = 'Belum Dilihat' ";
		} else {
			if ($status != 'All') {
				$q .= " AND akta_cerai.akta_cerai_status = '$status' ";
			}
		}
		if (!empty($awal)) {
			$q .= " AND akta_cerai.created_at > '$awal' ";
		}
		if (!empty($akhir)) {
			$q .= " AND akta_cerai.created_at <= '$akhir' ";
		}
		if (!empty($kecamatan)) {
			$q .= " AND akta_cerai.kecamatan_id = '$kecamatan' ";
		}
		if (!empty($desa)) {
			$q .= " AND akta_cerai.desa_id = '$desa' ";
		}
		$query = $this->db->query($q)->result();
		return $query;
	}
}
