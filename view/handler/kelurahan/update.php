<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='UpdateShow'){

	$id_kelurahan=$_GET['id_kelurahan'];

	$query="SELECT id_kecamatan, nama_kelurahan, alamat_kelurahan, SUBSTRING(telepon_kelurahan, 7, 20) as telepon FROM kelurahan WHERE id_kelurahan='$id_kelurahan'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade" id="myModalUpdateShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Perbarui</h4>
			        </div>
			        <div class="modal-body">
			          <form role="form" data-parsley-validate="">
			          <input type="hidden" value="'.$id_kelurahan.'" id="id_kelurahan">
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nik">Kecamatan</label>
			                <select class="form-control selectpicker" data-live-search="true" data-style="btn-white" id="kecamatan" name="kecamatan" required="">
			                	<option value="">Pilih Kecamatan</option>';

			                	$queryselect="SELECT id, name FROM markers";
                            	$resultselect = mysql_query($queryselect);

                            	while ($dataselect = mysql_fetch_array($resultselect)){
								echo'
									<option value='.$dataselect['id'];

										if($dataselect['id']==$row['id_kecamatan'])
											{
												echo ' selected ';
											}
									echo '> '.$dataselect['name'].'
									</option>';
								}

			                echo '</select>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nik">Kecamatan</label>
			                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukkan Nama Kelurahan" value="'.$row['nama_kelurahan'].'" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="60" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nama">Alamat</label>
			                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="'.$row['alamat_kelurahan'].'" data-parsley-pattern="^[a-zA-Z ,.]+$" data-parsley-maxlength="80" required >
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="telepon">Telepon</label>
			                <div class="input-group">
				                <span class="input-group-addon">(031)</span>
			                	<input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan No Telepon" value="'.$row['telepon'].'" data-parsley-type="number" data-parsley-maxlength="14" required>
			                </div>
			              </div>
			              <div align="center">
					          <button type="button" class="btn btn-default btn-custom" data-dismiss="modal">Batal</button>
					          <button type="submit" class="btn btn-warning btn-custom waves-effect"  ><strong>Perbarui!</strong></button>
				          </div>
			          </form>
			        </div>
			        
			      </div>
			    </div>
			  </div>
		';
	}
}
?>

<?php
$control=$_GET['control'];
if($control=='UpdateCommit'){
	$id_kelurahan=$_GET['id_kelurahan'];
	$kelurahan=$_GET['kelurahan'];
	$kecamatan=$_GET['kecamatan'];
    $alamat=$_GET['alamat'];
    $telepon=$_GET['telepon'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE kelurahan SET id_kecamatan='$kecamatan', nama_kelurahan=UPPER('$kelurahan'), alamat_kelurahan=UPPER('$alamat'), telepon_kelurahan='(031) $telepon'
			WHERE id_kelurahan = '$id_kelurahan'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data Kelurahan gagal diperbarui.
	          </div>

	         <script language="javascript">
	         $("#myModalUpdateShow").modal("hide");
	          $("#danger-alert").fadeTo(4000, 500).slideUp(500, function(){
	              $("#danger-alert").slideUp(1000);
	          });
	        </script>
	        ';
		} 
		else {
			echo  '
		          <div class="alert alert-success" id="success-alert">
		              <button type="button" class="close" data-dismiss="alert">x</button>
		              <strong>Sukses! </strong>
		              Data Kelurahan berhasil diperbarui.
		          </div>

		         <script language="javascript">
		         	$("#myModalUpdateShow").modal("hide");
		          	$("#success-alert").fadeTo(3500, 500).slideUp(500, function(){
		              	$("#success-alert").slideUp(800);
		          	});
		        </script>
		        ';
			exit();
		}
	}
?>


<!-- jscript tabel -->
<script type="text/javascript">
	$(document).ready(function(){
    $("#myModalUpdateShow").modal('show');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $("form").parsley();

    $("form").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
            UpdateExecutor();
        } 
        e.preventDefault();
    });
});
</script>

<script>
    $('#kecamatan').selectpicker();
 </script>