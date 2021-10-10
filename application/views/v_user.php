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
          <h2>Data User</h2>
          <p>Selamat datang di data user</p>
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
             <th>NO</th><th>ID USER</th><th>NAMA ADMIN</th><th>USERNAME</th><th>PASSWORD</th><th>user</th><th>AKSI</th>
           </tr>
           <?php 
           $no=0;
           foreach ($data_user as $dt_user) {
             $no++;
             echo '<tr>
             <td>'.$no.'</td>
             <td>'.$dt_user->id_user.'</td>
             <td>'.$dt_user->nama_user.'</td>
             <td>'.$dt_user->username.'</td>
             <td>'.$dt_user->password.'</td>
             <td>'.$dt_user->nama_level.'</td>
             <td><a href="#update_user" class="btn btn-warning" data-toggle="modal" onclick="tm_detail('.$dt_user->id_user.')">Update</a> <a href="'.base_url('index.php/user/hapus_u/'.$dt_user->id_user).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
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
        <h4 class="modal-title">Tambah User</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/user/simpan_u')?>" method="post" enctype="multipart/form-data">
          Nama user
          <input type="text" class="form-control" name="nama_user">
          <br>
          Username 
          <input type="text" class="form-control" name="username">
          <br>
          Password
          <input type="text" class="form-control" name="password">
          <br>
          Level 
          <select name="id_level" class="form-control">
            <option></option>
            <?php foreach ($data_level as $level): ?>
              <option value="<?=$level->id_level?>"><?=$level->nama_level?></option>
            <?php endforeach ?>
          </select>
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

<div class="modal fade" id="update_user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update User</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/user/update_u')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_user" id="id_user">
          Nama User
          <input id="nama_user" type="text" name="nama_user" class="form-control"><br>
          Username
          <input id="username" type="text" name="username" class="form-control"><br>
          Password
          <input id="password" type="text" name="password" class="form-control"><br>
          Id_level
          <select class="form-control" name="id_level" id="id_level">
            <option></option>
            <?php foreach ($data_level as $level): ?>
              <option value="<?=$level->id_level?>"><?=$level->nama_level?></option>
            <?php endforeach ?>
          </select><br>
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
  
  function tm_detail(id_user) {
    $.getJSON("<?=base_url()?>index.php/user/get_detail_u/"+id_user,function(data){
      $("#id_user").val(data['id_user']);
      $("#nama_user").val(data['nama_user']);
      $("#username").val(data['username']);
      $("#password").val(data['password']);
      $("#id_level").val(data['id_level']);
    });
  }

</script>