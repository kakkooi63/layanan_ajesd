 </div>
 <footer class="bg-white iq-footer">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-6">
 				<!-- <ul class="list-inline mb-0">
 					<li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
 					<li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
 				</ul> -->
 			</div>
 			<div class="col-lg-6 text-right" style="font-family: Raleway, sans-serif" ;>
 				Copyright 2022 IT PA Sekayu.
 			</div>
 		</div>
 </footer>
 <script src="<?= assets_backend() ?>js/jquery.min.js"></script>
 <script src="<?= assets_backend() ?>js/popper.min.js"></script>
 <script src="<?= assets_backend() ?>js/bootstrap.min.js"></script>
 <script src="<?= assets_backend() ?>js/jquery.appear.js"></script>
 <script src="<?= assets_backend() ?>js/countdown.min.js"></script>
 <script src="<?= assets_backend() ?>js/waypoints.min.js"></script>
 <script src="<?= assets_backend() ?>js/jquery.counterup.min.js"></script>
 <script src="<?= assets_backend() ?>js/wow.min.js"></script>
 <script src="<?= assets_backend() ?>js/apexcharts.js"></script>
 <script src="<?= assets_backend() ?>js/slick.min.js"></script>
 <script src="<?= assets_backend() ?>js/select2.min.js"></script>
 <script src="<?= assets_backend() ?>js/owl.carousel.min.js"></script>
 <script src="<?= assets_backend() ?>js/jquery.magnific-popup.min.js"></script>
 <script src="<?= assets_backend() ?>js/smooth-scrollbar.js"></script>
 <script src="<?= assets_backend() ?>js/lottie.js"></script>
 <script src="<?= assets_backend() ?>js/chart-custom.js"></script>
 <script src="<?= assets_backend() ?>js/custom.js"></script>
 <script src="<?= assets_backend() ?>js/ext/jquery.dataTables.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/dataTables.bootstrap4.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/dataTables.buttons.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/buttons.bootstrap4.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/jszip.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/pdfmake.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/vfs_fonts.js"></script>
 <script src="<?= assets_backend() ?>js/ext/buttons.html5.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/buttons.print.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/buttons.colVis.min.js"></script>
 <script src="<?= assets_backend() ?>js/ext/pdfobject.min.js"></script>
 <script type="text/javascript">
 	const base_url = '<?= base_url() ?>';
 </script>
 <script src="<?= assets_backend() ?>js/mycustom.js"></script>


 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/map/jquery.addressPickerByGiro.css" media="screen">
 <script src="<?php echo base_url() ?>assets_adit/map/jquery.addressPickerByGiro.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAogXD-AHrsmnWinZIyhRORJ84bgLwDPpg"></script>
 <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>

 <script type="text/javascript">
 	$(document).ready(function() {
 		$('.angka').mask('0.000.000.000', {
 			reverse: true
 		});
 	})
 </script>

 <script>
 	$('.inputAddress').addressPickerByGiro({
 		distanceWidget: true,
 		boundElements: {
 			'latitude': '.latitude',
 			'longitude': '.longitude',
 			'formatted_address': '.formatted_address'
 		}
 	});
 </script>
 </body>

 </html>



 <div class="modal fade" id="modalViewPdf" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
 	<div class="modal-dialog modal-lg" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="modalAdd">Preview</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<div class="iq-card-body">
 					<div id="viewspdf"></div>
 				</div>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 	</div>
 </div>