$(document).ready(function() {
	$('.mytable').DataTable();
	$('#myprint').DataTable( {
		dom: 'Bfrtip',
		buttons: [
		'excelHtml5',
		'pdfHtml5'
		]
	} );
} );

function view_akta(id,role){
	$.get(base_url + "akta_cerai/get_json", { id: id } )
	.done(function( data ) {
		data = JSON.parse(data);
		
		let dump_identitas,dump_file,dump_identitas_s = '';

		dump_identitas = `
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Tanggal Penjemputan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[1]+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nomor Perkara</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nomor+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nama</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Jenis Kelamin</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_jk+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>No. Handphone</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].no_hp+`</span>
		</div>
		</div>`;
		// if(role == 'Operator Dukcapil'){
		// 	dump_identitas+=`<input type="text" value="`+data[0].akta_cerai_no_kk+`" name="akta_cerai_no_kk" class="form-control">`;
		// 	dump_identitas+=`<input type="hidden" value="`+data[0].akta_cerai_id+`" name="akta_cerai_id" class="form-control">`;
		// } else {
		// 	dump_identitas +=`<span class="text-muted">`+data[0].akta_cerai_no_kk+`</span>`;
		// }
		// dump_identitas += `</div>
		// </div>
		// <div class="row mt-1 pb-1">
		// <div class="col-md-4">
		// <h6><b>KTP</b></h6>
		// </div>
		// <div class="col-md-6">`;
		// if(role == 'Operator Dukcapil'){
		// 	dump_identitas+=`<input type="text" value="`+data[0].akta_cerai_no_ktp+`" name="akta_cerai_no_ktp" class="form-control">`;
		// } else {
		// 	dump_identitas +=`<span class="text-muted">`+data[0].akta_cerai_no_ktp+`</span>`;
		// }
		// dump_identitas += `
		// </div>
		// </div>
		// <div class="row mt-1 pb-1">
		// <div class="col-md-4">
		// <h6><b>Alamat Lama</b></h6>
		// </div>
		// <div class="col-md-6">`;
		// if(role == 'Operator Dukcapil'){
		// 	dump_identitas+=`<textarea name="akta_cerai_alamat_lama" class="form-control">`+data[0].akta_cerai_alamat_lama+`</textarea>`;
		// } else {
		// 	dump_identitas +=`<span class="text-muted">`+data[0].akta_cerai_alamat_lama+`</span>`;
		// }
		// dump_identitas += `
		// </div>
		// </div>
		// <div class="row mt-1 pb-1">
		// <div class="col-md-4">
		// <h6><b>Alamat Baru</b></h6>
		// </div>
		// <div class="col-md-6">`;
		// if(role == 'Operator Dukcapil'){
		// 	dump_identitas+=`<textarea name="akta_cerai_alamat_baru" class="form-control">`+data[0].akta_cerai_alamat_baru+`</textarea>`;
		// } else {
		// 	dump_identitas +=`<span class="text-muted">`+data[0].akta_cerai_alamat_baru+`</span>`;
		// }
		dump_identitas += `
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kecamatan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[2].kecamatan_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kelurahan / Desa</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[3].desa_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Alamat</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_lama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Titik Lokasi Penjemputan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_baru+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Klasifikasi</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_klasifikasi+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
			<div class="col-md-4">
			<h6><b>keterangan</b></h6>
			</div>
			<div class="col-md-6">
			<span class="text-muted">`+data[0].keterangan+`</span>
			</div>
			</div>
		
	
		
		`;
		if(role == 'Operator Dukcapil'){
			dump_identitas+=``;
		}
		// <div class="row mt-1 pb-1">
		// <div class="col-md-4">
		// <h6><b>Status Anak</b></h6>
		// </div>
		// <div class="col-md-6">
		// <span class="text-muted">`+data[0].akta_cerai_status_anak+`</span>
		// </div>
		// </div>

		dump_identitas_s = `
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Tanggal Sidang</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[1]+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nomor Perkara</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nomor+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nama</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Jenis Kelamin</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_jk+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>No. Handphone</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].no_hp+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kecamatan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[2].kecamatan_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kelurahan / Desa</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[3].desa_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Alamat</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_lama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Titik Lokasi Penjemputan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_baru+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Klasifikasi</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_klasifikasi+`</span>
		</div>
		</div>
		
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>keterangan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].keterangan+`</span>
		</div>
		</div>
		`;

// 		let fileakta,filektp,filekk,fileperubahan = '';
// 		if (data[0].akta_cerai_file_akta !== null && data[0].akta_cerai_file_akta != '') {
// 			var exakta = data[0].akta_cerai_file_akta.substr(data[0].akta_cerai_file_akta.lastIndexOf('.') + 1);
// 			if (exakta == 'pdf') {
// 				PDFObject.embed(base_url + 'uploads/akta/' + data[0].akta_cerai_file_akta, "#viewspdf", {height: "40rem"});
// 				fileakta = `<a data-toggle="modal" data-target="#modalViewPdf" target="_blank" href="javascript:;" ><i class="fa fa-download"></i> Download</a>`;
// 			} else {
// 				fileakta =`<a target="_blank" href="`+base_url + 'uploads/akta/' + data[0].akta_cerai_file_akta+`"><i class="fa fa-download"></i> Download</a>`;
// 			}
// 		} else {
// 			fileakta = `<label class="text-danger">File tidak tersedia</label>`;
// 		}

// 		if (data[0].akta_cerai_file_ktp !== null && data[0].akta_cerai_file_ktp != '') {
// 			var exakta = data[0].akta_cerai_file_ktp.substr(data[0].akta_cerai_file_ktp.lastIndexOf('.') + 1);
// 			if (exakta == 'pdf') {
// 				PDFObject.embed(base_url + 'uploads/ktp/' + data[0].akta_cerai_file_ktp, "#viewspdf", {height: "40rem"});
// 				filektp = `<a data-toggle="modal" data-target="#modalViewPdf" target="_blank" href="javascript:;" ><i class="fa fa-download"></i> Download</a>`;
// 			} else {
// 				filektp =`<a target="_blank" href="`+base_url + 'uploads/ktp/' + data[0].akta_cerai_file_ktp+`"><i class="fa fa-download"></i> Download</a>`;
// 			}
// 		} else {
// 			filektp = `<label class="text-danger">File tidak tersedia</label>`;
// 		}

// 		if (data[0].akta_cerai_file_kk !== null && data[0].akta_cerai_file_kk != '') {
// 			var exakta = data[0].akta_cerai_file_kk.substr(data[0].akta_cerai_file_kk.lastIndexOf('.') + 1);
// 			if (exakta == 'pdf') {
// 				PDFObject.embed(base_url + 'uploads/kk/' + data[0].akta_cerai_file_kk, "#viewspdf", {height: "40rem"});
// 				filekk = `<a data-toggle="modal" data-target="#modalViewPdf" target="_blank" href="javascript:;" ><i class="fa fa-download"></i> Download</a>`;
// 			} else {
// 				filekk =`<a target="_blank" href="`+base_url + 'uploads/kk/' + data[0].akta_cerai_file_kk+`"><i class="fa fa-download"></i> Download</a>`;
// 			}
// 		} else {
// 			filekk = `<label class="text-danger">File tidak tersedia</label>`;
// 		}

// 		if (data[0].akta_cerai_form_perubahan !== null && data[0].akta_cerai_form_perubahan != '') {
// 			var exakta = data[0].akta_cerai_form_perubahan.substr(data[0].akta_cerai_form_perubahan.lastIndexOf('.') + 1);
// 			if (exakta == 'pdf') {
// 				PDFObject.embed(base_url + 'uploads/perubahan/' + data[0].akta_cerai_form_perubahan, "#viewspdf", {height: "40rem"});
// 				fileperubahan = `<a data-toggle="modal" data-target="#modalViewPdf" target="_blank" href="javascript:;" ><i class="fa fa-download"></i> Download</a>`;
// 			} else {
// 				fileperubahan =`<a target="_blank" href="`+base_url + 'uploads/perubahan/' + data[0].akta_cerai_form_perubahan+`"><i class="fa fa-download"></i> Download</a>`;
// 			}
// 		} else {
// 			fileperubahan = `<label class="text-danger">File tidak tersedia</label>`;
// 		}

dump_file = `
<div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>File Surat Keterangan Disabilitas</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/akta/' + data[0].akta_cerai_file_akta+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div>
<div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>Foto Keadaan Disabilitas</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/ktp/' + data[0].akta_cerai_file_ktp+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div>

`;

{/* <div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>KK</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/kk/' + data[0].akta_cerai_file_kk+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div>
<div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>Form Perubahan</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/perubahan/' + data[0].akta_cerai_form_perubahan+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div> */}
$('#view_akta_id').val(id);
$('#dump_identitas').html(dump_identitas);
$('#dump_identitas_s').html(dump_identitas_s);
$('#dump_file').html(dump_file);

if (data[0].akta_cerai_status == 'Diambil') {
	$('.cstatus').show();
} else {
	$('.cstatus').hide();
}
if (data[0].akta_cerai_status == 'Ditolak') {
	$('.cditolak').hide();
	
} else {
	$('.cditolak').show();
}
if (data[0].akta_cerai_status == 'Dilihat') {
	$('.cditolak').show();
	
} else {
	$('.cditolak').hide();
}

if (data[0].akta_cerai_status == 'Selesai') {
	$('.cdiambil').show();
} else {
	$('.cdiambil').hide();
}

if (data[0].akta_cerai_status == 'proses') {
	$('.cdiambil').show();
	$('.cditolak').show();
} else {
	$('.cdiambil').hide();
	$('.cditolak').hide();
	
}
});
}



function selesai_view_akta(id){
	$.get(base_url + "akta_cerai/get_json", { id: id } )
	.done(function( data ) {
		data = JSON.parse(data);
		
		let dump_identitas,dump_file,dump_identitas_s = '';

		dump_identitas = `
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Tanggal Sidang</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[1]+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nomor Perkara</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nomor+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nama</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Jenis Kelamin</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_jk+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>No. Handphone</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].no_hp+`</span>
		</div>
		</div>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kecamatan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[2].kecamatan_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kelurahan / Desa</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[3].desa_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Alamat</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_lama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Titik Lokasi Penjemputan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_baru+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Klasifikasi</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_klasifikasi+`</span>
		</div>
		</div>
		
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>keterangan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].keterangan+`</span>
		</div>
		</div>`;

		dump_identitas_s = `
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Tanggal Sidang</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[1]+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nomor Perkara</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nomor+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Nama</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Jenis Kelamin</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_jk+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>No. Handphone</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].no_hp+`</span>
		</div>
		</div>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kecamatan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[2].kecamatan_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Kelurahan / Desa</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[3].desa_nama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Alamat</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_lama+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Titik Lokasi Penjemputan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_alamat_baru+`</span>
		</div>
		</div>
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>Klasifikasi</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].akta_cerai_klasifikasi+`</span>
		</div>
		</div>
		
		<div class="row mt-1 pb-1">
		<div class="col-md-4">
		<h6><b>keterangan</b></h6>
		</div>
		<div class="col-md-6">
		<span class="text-muted">`+data[0].keterangan+`</span>
		</div>
		</div>
		`;

		dump_file = `
		<div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>File Surat Keterangan Disabilitas</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/akta/' + data[0].akta_cerai_file_akta+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div>
<div class="row mt-1 pb-1">
<div class="col-md-4">
<h6><b>Foto Keadaan Disabilitas</b></h6>
</div>
<div class="col-md-6">
<span class="text-muted"><a target="_blank" href="`+base_url + 'uploads/ktp/' + data[0].akta_cerai_file_ktp+`"><i class="fa fa-download"></i> Download</a></span>
</div>
</div>
		`;
		$('#selesai_view_akta_id').val(id);
		$('#dump_identitas').html(dump_identitas);
		$('#dump_identitas_s').html(dump_identitas_s);
		$('#dump_file').html(dump_file);

		if (data[0].akta_cerai_status == 'Diterima' || data[0].akta_cerai_status == 'Dikembalikan') {
			$('.cstatus').hide();
		} else {
			$('.cstatus').show();
		}
	});
}

function edit_akta(id){
	let kecamatan_id = $('#edit_kecamatan_id').val();
	get_desa(kecamatan_id);

	$.get(base_url + "akta_cerai/get_json", { id: id } )
	.done(function( data ) {
		data = JSON.parse(data);
		
		$('#edit_akta_cerai_id').val(data[0].akta_cerai_id);
		$('#edit_akta_cerai_nomor').val(data[0].akta_cerai_nomor);
		$('#edit_no_hp').val(data[0].no_hp);
		$('#edit_akta_cerai_nama').val(data[0].akta_cerai_nama);
		$('#edit_akta_cerai_no_kk').val(data[0].akta_cerai_no_kk);
		$('#edit_akta_cerai_no_ktp').val(data[0].akta_cerai_no_ktp);
		$('#edit_akta_cerai_alamat_lama').val(data[0].akta_cerai_alamat_lama);
		$('#titik_lokasi').val(data[0].akta_cerai_alamat_baru);
		$('#keterangan').val(data[0].keterangan);
		if (data[0].akta_cerai_jk == 'Laki - Laki') {
			$('#edit_jkl').prop('checked',true);
		} else {
			$('#edit_jkp').prop('checked',true);
		}
		$('#edit_akta_cerai_file_akta').val(data[0].akta_cerai_file_akta);
		$('#edit_akta_cerai_file_ktp').val(data[0].akta_cerai_file_ktp);
		$('#edit_akta_cerai_file_kk').val(data[0].akta_cerai_file_kk);
		$('#edit_akta_cerai_form_perubahan').val(data[0].akta_cerai_form_perubahan);
		$('#edit_kecamatan_id').val(data[0].kecamatan_id);
		$('#edit_desa_id').val(data[0].desa_id);
		$('#edit_akta_cerai_klasifikasi').val(data[0].akta_cerai_klasifikasi);
		$('#edit_akta_cerai_tanggal').val(data[0].akta_cerai_tanggal);
		$('#longitude').val(data[0].longitude);
	});
}


function edit_user(id,nama,username,role){
	$('#edit_id').val(id);
	$('#edit_nama').val(nama);
	$('#edit_username').val(username);
	$('#edit_role').val(role);
}
function edit_slide(id,judul,isi,gambar){
	$('#edit_slide_id').val(id);
	$('#edit_slide_judul').val(judul);
	$('#edit_slide_isi').val(isi);
	$('#edit_slide_gambar').val(gambar);
}


$('.custom-file-input').on('change',function(e){
	var fileName = e.target.files[0].name;
	$(this).next('.custom-file-label').html(fileName);
});


function get_desa(kecamatan_id){
	$.get( base_url + "akta_cerai/get_desa", { kecamatan_id: kecamatan_id } )
	.done(function( data ) {
		data = JSON.parse(data);
		let htm = '';
		for(var i=0;i<data.length;i++){
			htm+=`<option value="`+data[i].desa_id+`">`+data[i].desa_nama+`</option>`;
		}
		$('.set_desa_id').html(htm);
	});
}


$('.set_kecamatan_id').on('change',function(e){
	let kecamatan_id = $(this).val();
	get_desa(kecamatan_id);
});