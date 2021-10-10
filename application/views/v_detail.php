<div class="breadcomb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcomb-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcomb-wp">
								<div class="breadcomb-icon">
									<i class="notika-icon notika-windows"></i>
								</div>
								<div class="breadcomb-ctn">
									<h2>Generate Laporan</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
								<th>Nama Masakan</th>
								<th>Tanggal</th>
								<th>No. Meja</th>
								<th>Jumlah</th>
								<th>Total Bayar</th>
							</tr>

							<?php
							$no=0;
							foreach ($data_nota as $dn) 
							{
								$no++;
								echo '<tr>
								<td>'.$no.'</td>
								
								<td>'.$dn->nama.'</td>
								<td>'.$dn->nama_masakan.'</td>
								<td>'.$dn->tanggal.'</td>
								<td>'.$dn->no_meja.'</td>
								<td>'.$dn->jumlah.'</td>
								<td>'.$dn->total_bayar.'</td>
								</tr>';
							}
							?>
						</table>
						<?php 
						if($this->session->flashdata('pesan')!=null){
							echo '<div class="alert alert-danger">'.$this->session->flashdata('pesan').'</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>