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
										<h2>RESTAURANT BAROKAH</h2>
										<p>Selamat datang di restaurant barokah silahkan pilih makanan</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="container">
    <div id="tampil_masakan"></div>
    </div> <!-- end row -->


<div class="modal fade" id="detail_masakan" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="gambar"></div>
                                            </div>
                                            <div id="deskripsi"></div>
                                                <div id="no_meja"></div>
                                                <div id="jumlah"></div>
                                                <br>
                                                <div id="pesan"></div>
                                            <div class="modal-footer">
                                                <div id="btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<script type="text/javascript">

//menampilkan semua masakan
    $.getJSON("<?=base_url()?>index.php/get_masakan",
        function(data1){
            var datanya="";
            $.each(data1,function(key,dt){
                datanya+=
                '<div class="col-xs-6 col-md-3"><a href="#detail_masakan" '+
                'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id_masakan']+')" style="text-decoration:none">'+
                '<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
                dt['gambar']+'" alt="...">'+dt['nama_masakan']+'<br>'+dt['harga']+
                '</a>'+
                '</div>';
            });
            $("#tampil_masakan").html(datanya);
        });	

//tampilkan detail masakan
function tm_detail(id_masakan){
    $.getJSON("<?=base_url()?>index.php/get_masakan/detail/"+id_masakan,function(data){
        $("#gambar").html(
            '<img src="<?=base_url()?>assets/gambar/'+data['gambar']+'" style="width:100%">'
        );

        $("#deskripsi").html(
            '<table class="table table-hover table-striped">'+
            '<tr><td>Nama Masakan</td><td>'+data['nama_masakan']+'</td></tr>'+
            '<tr><td>Harga Masakan</td><td>'+data['harga']+'</td></tr>'+
            '</table>'
        );

        $('#no_meja').html(
            '<label>Nomor Meja</label>'+
            '<input type="number" id="nomor_meja" value="1" class="form-control">'
            );
        $("#jumlah").html(
            '<label>Jumlah</label>'+
            '<input type="number" id="jumlah_item" value="1" class="form-control">'
        );
        $("#btn").html('<button id="beli" onclick="beli('+data['id_masakan']+')" class="btn btn-info">Beli</button>' +
        '<a href = "<?=base_url()?>index.php/trans" class="btn btn-danger">Check Out</a>');
    });
}

//menambahkan masakan ke keranjang
function beli (id_masakan){
    var jumlah=$("#jumlah_item").val();
    var no_meja=$('#nomor_meja').val();
    $("#pesan").hide();
    $("#pesan").removeClass("alert alert-success");
    $.getJSON("<?=base_url()?>index.php/trans/tambah_cart/"+id_masakan+"/"+jumlah+"/"+no_meja, function(hasil){
        
        $("#cart").html(hasil['total_cart']);
        $("#pesan").html("Item anda telah ditambahkan ke cart");
        $("#pesan").addClass('alert alert-success');
        $("#pesan").show('animate');
        setTimeout(function(){
            $("#pesan").hide('fade');
        }, 3000);

    });
}
</script>