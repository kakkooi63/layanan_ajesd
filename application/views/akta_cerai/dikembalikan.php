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

<body>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="10%" style="vertical-align:middle;text-align: center;">
					<img src="<?= $_SERVER["DOCUMENT_ROOT"] . '/assets/logo/sekayu.png' ?>" style="max-width: 2.19cm;max-height: 150px">
				</td>
				<td width="90%" style="vertical-align:middle;text-align: center;font-size: 15pt;">
					<h3 style="font-size: 15pt;">
						PENGADILAN AGAMA SEKAYU
					</h3>
					<p style="font-size: 10pt;font-family: Arial;font-weight: normal !important">Wilayah Hukum Kabupaten Musi Banyuasin<br>
						Jalan Merdeka Lingkungan I Nomor 497 Telepon/Faksimili (0714) 321170 SEKAYU 30711<br>
						Website : www.pa-sekayu.go.id Email : pa.sekayu@gmail.com
					</p>
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
			<tr>
				<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 20px;  text-align:justify;">
				Telah dikembalikan dari Pengadilan Agama Sekayu kepada Operator Dukcapil Kabupaten Musi Banyuasin pada tanggal <strong> <?= date('d F Y') ?> </strong> berupa dokumen KTP No <strong> <?= $akta->akta_cerai_no_ktp ?> </strong> dan KK No <strong> <?= $akta->akta_cerai_no_kk ?> </strong>, Atas nama <strong> <?= $akta->akta_cerai_nama ?></strong> di Dinas Kependudukan dan Catatan Sipil Kabupaten Musi Banyuasin
				</td>
			</tr>
		</table>
	</div>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 20px;padding-left: 360px;line-height: 1.7">
				<p>Sekayu, <?=  date('d F Y'); ?></p>
					<p>Penerima</p> <br> <br> <br>


					------------ <br> <br><br> <br><br>
				</td>
			</tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="background:#fff">

			<tr>
				<td width="100%" style="vertical-align:middle;text-align: center;border-bottom: 1px solid;padding-top: 2px">
				</td>
			</tr>
		</table>
	</div>
	<br> <br><br> <br>

	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="10%" style="vertical-align:middle;text-align: center;">
					<img src="<?= $_SERVER["DOCUMENT_ROOT"] . '/assets/logo/sekayu.png' ?>" style="max-width: 2.19cm;max-height: 150px">
				</td>
				<td width="90%" style="vertical-align:middle;text-align: center;font-size: 15pt;">
					<h3 style="font-size: 15pt;">
						PENGADILAN AGAMA SEKAYU
					</h3>
					<p style="font-size: 10pt;font-family: Arial;font-weight: normal !important">Wilayah Hukum Kabupaten Musi Banyuasin<br>
						Jalan Merdeka Lingkungan I Nomor 497 Telepon/Faksimili (0714) 321170 SEKAYU 30711<br>
						Website : www.pa-sekayu.go.id Email : pa.sekayu@gmail.com
					</p>
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
			<tr>
				<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 20px;  text-align:justify;">
					Telah dikembalikan dari Pengadilan Agama Sekayu kepada Operator Dukcapil Kabupaten Musi Banyuasin pada tanggal <strong> <?= date('d F Y') ?> </strong> berupa dokumen KTP No <strong> <?= $akta->akta_cerai_no_ktp ?> </strong> dan KK No <strong> <?= $akta->akta_cerai_no_kk ?> </strong>, Atas nama <strong> <?= $akta->akta_cerai_nama ?></strong> di Dinas Kependudukan dan Catatan Sipil Kabupaten Musi Banyuasin
				</td>
			</tr>
		</table>
	</div>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="100%" style="vertical-align:middle;font-size: 12pt;padding-top: 20px;padding-left: 360px;line-height: 1.7">
				<p>Sekayu, <?=  date('d F Y'); ?></p>
					<p>Penerima</p> <br> <br> <br>


					------------
				</td>
			</tr>
		</table>
	</div>
</body>