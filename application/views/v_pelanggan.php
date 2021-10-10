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
          <h2>Data Pelanggan</h2>
          <p>Selamat datang di data pelanggan</p>
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
             <th>NO</th><th>ID</th><th>Nama Pelanggan</th><th>Alamat</th><th>No Telp</th><th>Username</th><th>Password</th><th colspan="2">Aksi</th>
           </tr>
           <?php 
           $no=0;
           foreach ($data_pelanggan as $dt_p) {
            $no++;
            echo '<tr>
            <td>'.$no.'</td>
            <td>'.$dt_p->id_pelanggan.'</td>
            <td>'.$dt_p->nama.'</td>
            <td>'.$dt_p->alamat.'</td>
            <td>'.$dt_p->telp.'</td>
            <td>'.$dt_p->username.'</td>
            <td>'.$dt_p->password.'</td>
            <td><a href="#update_pelanggan" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_p->id_pelanggan.')">Update</a>
            <a href ='.base_url('index.php/pelanggan/hapus_p/'.$dt_p->id_pelanggan).' class="btn btn-success" onclick="return confirm(\'Anda yakin\')">Delete</a></td>
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
        <h4 class="modal-title">Tambah Pelanggan</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/simpan_p')?>" method="post">
          Nama pelanggan
          <input type="text" name="nama" class="form-control"><br>
          Alamat
          <input type="text" name="alamat" class="form-control"><br>
          No telp
          <input type="text" name="telp" class="form-control"><br>
          Username
          <input type="text" name="username" class="form-control"><br>
          Password
          <input type="password" name="password" class="form-control"><br>
          <button class="btn btn-success notika-btn-success" type="submit" name="simpan" value="Simpan">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_pelanggan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Pembeli</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/pelanggan/update_p')?>" method="post">
          <input type="hidden" name="id_pelanggan" id="id_pelanggan">
          Nama Pelanggan
          <input id="nama" type="text" name="nama" class="form-control"><br>
          Alamat
          <input id="alamat" type="text" name="alamat" class="form-control"><br>
          No telp
          <input id="telp" type="text" name="telp" class="form-control"><br>
          Username
          <input id="username" type="text" name="username" class="form-control"><br>
          Password
          <input id="password" type="text" name="password" class="form-control"><br>
          <br>
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

  function tm_detail(id_pelanggan){
    $.getJSON("<?=base_url()?>index.php/pelanggan/get_detail_p/" + id_pelanggan,function(data)
    {
      $("#id_pelanggan").val(data['id_pelanggan']);
      $("#nama").val(data['nama']);
      $("#alamat").val(data['alamat']);
      $("#telp").val(data['telp']);
      $("#username").val(data['username']);
      $("#password").val(data['password']);
    });
  }

</script>