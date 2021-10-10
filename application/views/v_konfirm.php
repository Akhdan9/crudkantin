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
									<h2>Konfirmasi Pemesanan</h2>
									
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
					<div class="basic-tb-hd">
						<div class="row">
							<form action="<?=base_url()?>index.php/Dashboard/Search" method="post">
								<div class="col-lg12 col-md-2 col-sm-12 col-xs-12">
									<div class="form-example-int form example-st">
										<div class="form-group">
											<div class="nk-int-st">
												<input type="date" name="tanggal" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
									<div class = "form-example-int">
										<button class = "btn btn-success notika-btn-success" >Search</button>
									</div>	
								</div>
							</form>							
						</div>
					</div>
					<div class="bsc-tbl-st">
						<table class="table table-striped">
							<tr>
								<th>NO</th>
								<th>ID Order</th>
								<th>Tanggal</th>
								<th>Nama Pelanggan</th>
								<th>Username</th>
								<th>Total Bayar</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
							<?php
							$no=0;
							foreach ($data_pel as $dt_p) {
								$no++;
								echo '<tr>
								<td>'.$no.'</td>
								<td>'.$dt_p->id_order.'</td>
								<td>'.$dt_p->tanggal.'</td>
								<td>'.$dt_p->nama.'</td>
								<td>'.$dt_p->username.'</td>
								<td>'.$dt_p->total_bayar.'</td>
								<td>'.$dt_p->status_order	.'</td>
								<td><a href="#update" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_p->id_order.')">Update</a>
								<a href='.base_url('index.php/dashboard/cetak/'.$dt_p->id_order).' class="btn btn-success">Cetak</a>
								</td>
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

<div class="modal fade" id="update">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Update status</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('index.php/Verif/update')?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id_order" id="id_order">
					<label>Status</label>
					<select class="form-control" name="ubah_status" id="ubah_status">
						<option value="proses">proses</option>
						<option value="lunas">lunas</option>
					</select>
					<button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
			<div class="modal-footer">
				
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>

<script type="text/javascript">
	function tm_detail(id_order)
	{
		$.getJSON("<?= base_url()?>index.php/Verif/get_detail_order/"+id_order,function(data)
		{
			$('#id_order').val(data['id_order']);
			$('#ubah_status').val(data['status_order']);
		});
	}
</script>		