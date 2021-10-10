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
										<h2>Data Masakan</h2>
										<p>Selamat datang di data masakan</p>
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
                            <a href="#tambah" class="btn btn-primary notika-btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <tr>
                        			<th>NO</th><th>Nama Masakan</th><th>Harga</th><th>Status Masakan</th><th>Gambar</th><th>AKSI</th>
                    			</tr>
                    			<?php 
					                    $no=0;
					                    foreach ($data_masakan as $dt_masak) {
					                        $no++;
					                        echo '<tr>
					                                <td>'.$no.'</td>
					                                <td>'.$dt_masak->nama_masakan.'</td>
					                                <td>'.$dt_masak->harga.'</td>
					                                <td>'.$dt_masak->status_masakan.'</td>
					                                <td><img src='.base_url("assets/gambar/$dt_masak->gambar").' width="120" height="100"</td>
					                                <td><a href="#update_masakan" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_masak->id_masakan.')">Update</a> <a href="'.base_url('index.php/masakan/hapus_m/'.$dt_masak->id_masakan).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
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

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Masakan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/masakan/simpan_m')?>" method="post" enctype="multipart/form-data">
          Nama Masakan
          <input type="text" class="form-control" name="nama_masakan">
          <br>
          Harga
          <input type="text" class="form-control" name="harga">
          <br>
          Status Masakan
          <input type="text" class="form-control" name="status_masakan">
          <br>
          Upload Gambar
            <input type="file" name="gambar" class="form-control">
         <button class="btn btn-success notika-btn-success" type="submit" name="simpan" value="Simpan">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_masakan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Masakan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/masakan/update_m')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_masakan" id="id_masakan">
          Nama Masakan
          <input id="nama_masakan" type="text" name="nama_masakan" class="form-control"><br>
          Harga 
          <input id="harga" type="text" name="harga" class="form-control"><br>
          Status Masakan
          <input id="status_masakan" type="text" name="status_masakan" class="form-control"><br>
          Upload Gambar
        <input type="file" name="gambar" class="form-control">
        <button class="btn btn-success notika-btn-success" type="submit" name="simpan" value="Simpan">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  
  function tm_detail(id_masakan) {
    $.getJSON("<?=base_url()?>index.php/masakan/get_detail_m/"+id_masakan,function(data){
        $("#id_masakan").val(data['id_masakan']);
         $("#nama_masakan").val(data['nama_masakan']);
        $("#harga").val(data['harga']);
        $("#status_masakan").val(data['status_masakan']);
    });
  }

</script>	