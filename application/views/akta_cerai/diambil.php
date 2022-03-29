<title><?= $title ?></title>
<style type="text/css">
	.wrapper {
		height: auto;
	}

	#container {
		display: table;
	}

	#row {
		display: table-row;
	}

	#left,
	#right,
	#middle {
		display: table-cell;
	}

	body {
		font-size: 11pt;
	}

	footer {
		position: fixed;
		bottom: -10px;
		right: 0px;
		height: 70px;
		width: 100%;
		text-align: left;
	}

	p.solid {
		border-style: 30px solid;
	}
</style>
<?php
function tgl_indo($tanggal)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>

<body>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="10%" style="vertical-align:middle;text-align: center;">

				</td>
				<td width="90%" style="vertical-align:middle;text-align: center;font-size: 15pt;">
					<h3 style="font-size: 15pt;">
						SURAT PERMOHONAN
					</h3>
				</td>
			</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="background:#fff">
			<tr>
				<td width="100%" style="vertical-align:middle;text-align: center;border: 3px solid">
				</td>
			</tr>
			<tr>
				<td width="100%" style="vertical-align:middle;text-align: center;border-bottom: 1px solid;padding-top: 2px">
				</td>
			</tr>
		</table>
	</div>
	<div class="wrapper">
		<table width="100%">
			<tbody>

				<tr>
					<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 30px;  text-align:justify;">
						Hal : Permohonan Layanan Antar Jemput Sidang Difabel (AJESD) <br><br>
						Kepada Yth : <br>
						Sekretaris Pengadilan Agama Sekayu<br>
						Di - Jln. Merdeka Lk. I Nomor 497 Sekayu<br><br><br>
						Assalamualikum Wr Wb.<br><br>
						Dengan Hormat, <br><br>
						Saya yang bertanda tangan dibawah ini : <br><br>
						Nama : <?= $akta->akta_cerai_nama ?><br><br>
						No Perkara : <?= @$akta->akta_cerai_nomor ?> <br><br>
						Jenis Kelamin : <?= @$akta->akta_cerai_jk ?> <br><br>
						No HP : <?= @$akta->no_hp ?><br><br>
						Alamat : <?= @$akta->akta_cerai_alamat_lama ?> <br><br>

						Mengajukan Permohonan Layanan Antar Jemput Sidang Difabel, untuk memudahkan saya dalam melaksanakan persidangan ataupun layanan persidangan lainnya.<br>
						Demikian permohonan ini saya buat, besar harapan untuk saya dapat dibantu, Atas perhatiannya diucapkan terima kasih.

					</td>

				</tr>

			</tbody>
		</table>
	</div>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 30px;padding-left: 360px;line-height: 1.7">
					<p>Sekayu, <?= tgl_indo(date('Y-m-d')); ?></p>
					<p> Wassalam</p>
					<p>Pemohon</p>
					<p>ttd</p>
					<p><?= $akta->akta_cerai_nama ?></p><br>
				</td>
			</tr>
		</table>

		<table border="3" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="background:#fff">

			<tr>
				<td width="100%" style="vertical-align:middle;text-align: justify;border-bottom: 1px solid;padding-top: 2px">
					Catatan Keputusan
				</td>
			</tr>
		</table>
	</div>

</body>