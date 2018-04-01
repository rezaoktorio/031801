<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='UpdateShow'){

	$id=$_GET['id'];

	$query="SELECT name, address, SUBSTRING(telepon_kecamatan, 7, 20) as telepon FROM markers WHERE id='$id'";

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
			          <input type="hidden" value="'.$id.'" id="id">
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nik">Kecamatan</label>
			                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukkan Nama Kecamatan" value="'.$row['name'].'" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="60" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nama">Alamat</label>
			                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="'.$row['address'].'" data-parsley-pattern="^[a-zA-Z ,.]+$" data-parsley-maxlength="80" required >
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
	$id=$_GET['id'];
	$kecamatan=$_GET['kecamatan'];
    $alamat=$_GET['alamat'];
    $telepon=$_GET['telepon'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE markers SET name=UPPER('$kecamatan'), address=UPPER('$alamat'), telepon_kecamatan='(031) $telepon'
			WHERE id = '$id'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data Kecamatan gagal diperbarui.
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
		              Data Kecamatan berhasil diperbarui.
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