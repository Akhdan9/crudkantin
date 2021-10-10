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
          <h1>Pesanan</h1>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="breadcomb-area">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <a href="<?=base_url('index.php/dashboard_pelanggan')?>" class="btn btn-primary">Belanja Lagi</a>
     <a href="#bayar" data-toggle="modal" onclick="simpan_list_db()" class="btn btn-warning">Bayar</a>
     <table class="table table-hover table-striped">
       <thead>
         <tr>
           <th>NO</th><th>Nama Masakan</th><th>Nomor Meja</th><th>QTY</th><th>Subtotal</th><th>Aksi</th>
         </tr>
       </thead>
       <tbody id="tm_pesanan">
       </tbody>
     </table>
     <div id="pesan"></div>
   </div>
 </div>
</div>
</div>

<div class="modal fade" id="bayar" role="dialog">
  <div class="modal-dialog modals-default">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Terimakasih anda telah memesan produk kami</h3>
        <p>untuk melanjutkan pembelian, silahkan transfer sejumlah Rp. <span id="totalnya">0</span>
         <form method="post" id="upload_bukti" enctype="multipart/form-data">
          <input type="hidden" name="id_order" id="id_order">             
          
        </form>
        <span id="pesan"></span>    
      </div>
      <div class="modal-footer">                                                
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function load_cart(){
   $("#tm_pesanan").html('');
   $.getJSON("<?=base_url()?>index.php/trans/tm_pesanan", function(hasil){
    var no=0;
    $.each(hasil['data_cart'],function (key, obj){
      no++;
      $("#tm_pesanan").append(
       '<tr>'+
       '<td>'+no+'</td>'+
       '<td>'+obj['name']+'</td>'+
       '<td>'+obj['no_meja']+'</td>'+
       '<td>'+obj['qty']+'</td>'+
       '<td align="right">'+obj['subtotal']+'</td>'+
       '<td><a href="#" onclick="if(confirm(\'Apakah Yakin?\')){ hapus_cart(\''+obj['rowid']+'\')}"><i class ="material-icons">delete</i></a></td>'+
       '</tr>'    
       );
    });
    $("#tm_pesanan").append(
      '<tr>'+
      '<td colspan="4">Total keseluruhan</td><td align="right">'+hasil['total_seluruh']+'</td><td><a href="#" onclick="if(confirm(\'Apakah Anda Yakin Menghapus Data Ini?\')){hapus_all()}"><i class="material-icons">delete</i></a></td>'+
      '</tr>'
      );
  });
 }
 load_cart();

 function hapus_cart(id){
  $.getJSON("<?=base_url()?>index.php/trans/hapus_cart/"+id,function(hasil){
    if(hasil['status']==1){
      load_cart();
      load_total_cart();
      $("#pesan").html('Sukses Menghapus Item');
      $("#pesan").show('animate');
      $("#pesan").addClass("alert alert-success");
    } else {
      $("#pesan").html('Gagal Menghapus Item');
      $("#pesan").show('animate');
      $("#pesan").addClass("alert alert-danger");
    }
    setTimeout(function(){
      $("#pesan").hide('animate');
      $("#pesan").removeClass("alert alert-danger");
    }, 3000);
  });
}

function simpan_list_db() {
  $.getJSON("<?=base_url()?>index.php/trans/simpan_bayar", function(hasil){
    if(hasil['status']==1){
      $("#pesan").html('Anda sukses menyimpan ke nota');
      $("#pesan").show('animate');
      $("#pesan").addClass("alert alert-success");
      setTimeout(function(){
        $("#pesan").hide('animate');
        $("#pesan").removeClass("alert alert-success");
        setTimeout(function(){
          $("#totalnya").html(hasil['total']);
          $("#bayar").modal("show");
          $("#id_order").val(hasil['id_order']);
          load_total_cart();
          load_cart();
        },500);
      }, 3000);
    }
  });
}

function hapus_all(){
  $.getJSON("<?=base_url()?>index.php/trans/hapus_semua", function(hasil){
    load_total_cart();
    load_cart();
    $("#pesan").html('Sukses Menghapus Item');
    $("#pesan").show('animate');
    $("#pesan").addClass("alert alert-success");
    setTimeout(function(){
      $("#pesan").hide('animate');
      $("#pesan").removeClass("alert alert-success");
    }, 3000);
  });
}
</script>
