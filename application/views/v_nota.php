<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dashboard One | Notika - Notika Admin Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    	============================================ -->
    	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/favicon.ico">
    <!-- Google Fonts
    	============================================ -->
    	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- normalize CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/wave/waves.min.css">
    <!-- main CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- style CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <!-- responsive CSS
    	============================================ -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    	<script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    </head>
    <div class="normal-table-area">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="normal-table-list mg-t-30">
    					<div class="bsc-tbl-st">
    						<table class="table table-striped">
    							<tr>
    								<th>NO</th>
    								<th>Nama Pelanggan</th>
    								<th>Masakan</th>
    								<th>Harga</th>
    								<th>Jumlah</th>
    							</tr>
    							<?php
    							$no=0;
    							foreach ($nota as $note) {
    								$no++;
    								echo '<tr>
    								<td>'.$no.'</td>
    								<td>'.$note->nama.'</td>
    								<td>'.$note->nama_masakan.'</td>
    								<td>'.$note->harga.'</td>
    								<td>'.$note->jumlah	.'</td>
    								</tr>';
    							}
    							echo '<tr>
    							<td colspan="4">Total Bayar</td>
    							<td>'.$note->total_bayar.'</td>
    							</tr>
    							<tr>
    							<td colspan="4">Keterangan</td>
    							<td>'.$note->status_order.'</td>
    							</tr>
    							<tr>
    							<td colspan="4">No Meja</td>
    							<td>'.$note->no_meja.'</td>
    							</tr>
    							<tr>
    							<tr>
    							<td colspan="4">Kasir</td>
    							<td>'.$this->session->userdata('username').'</td>
    							</tr>';

    							?>
    						</table>
    						<button type="button" class="btn btn-success notika-btn-success waves-effect" onclick="window.print()"><i class="notika-icon notika-right-arrow">Print</i></button>
    						<?php if($this->session->flashdata('pesan')!=null) : ?>
    							<div><?= $this->session->flashdata('pesan');?></div>
    						<?php endif?>	
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    	<script src="<?=base_url()?>assets/js/counterup/waypoints.min.js"></script>
    	<script src="<?=base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    	<script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    	<script src="<?=base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    	<script src="<?=base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/flot/jquery.flot.js"></script>
    	<script src="<?=base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
    	<script src="<?=base_url()?>assets/js/flot/curvedLines.js"></script>
    	<script src="<?=base_url()?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/knob/jquery.knob.js"></script>
    	<script src="<?=base_url()?>assets/js/knob/jquery.appear.js"></script>
    	<script src="<?=base_url()?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/wave/waves.min.js"></script>
    	<script src="<?=base_url()?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
		<script src="<?=base_url()?>assets/js/chat/moment.min.js"></script>
		<script src="<?=base_url()?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
    	============================================ -->
    	<script src="<?=base_url()?>assets/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
		<script src="<?=base_url()?>assets/js/tawk-chat.js"></script>