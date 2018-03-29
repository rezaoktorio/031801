<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='KoordinatShow'){

	$id=$_GET['id'];

	$query="SELECT name, address, SUBSTRING(telepon_kecamatan, 7, 20) as telepon, lat, lng FROM markers WHERE id='$id'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade" id="myModalKoordinatShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Perbarui Koordinat Kecamatan</h4>
			        </div>
			        <div class="modal-body">
			          <form role="form" data-parsley-validate="">
			          <input type="hidden" value="'.$id.'" id="id">
			          <input type="hidden" value="'.$row['name'].'" id="kecamatan">
			          <input type="hidden" value="'.$row['address'].'" id="alamat">
			          <input type="hidden" value="'.$row['telepon'].'" id="telepon">
		          		  <div class="form-group col-md-12">
			                <label class="control-label" for="nama">Kecamatan</label>
			                <input type="text" class="form-control" value="'.$row['name'].'" readonly="">
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="lat">Latitude</label>
			                <input type="text" class="form-control" id="lat" name="lat" placeholder="Masukkan Latitude" value="'.$row['lat'].'" data-parsley-pattern="^[0-9.-]+$" data-parsley-maxlength="20" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="lat">Longitude</label>
			                <input type="text" class="form-control" id="lng" name="lng" placeholder="Masukkan Latitude" value="'.$row['lng'].'" data-parsley-pattern="^[0-9.-]+$" data-parsley-maxlength="20" required>
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
if($control=='KoordinatCommit'){
	$id=$_GET['id'];
	$lat=$_GET['lat'];
    $lng=$_GET['lng'];
    $kecamatan=$_GET['kecamatan'];
    $alamat=$_GET['alamat'];
    $telepon=$_GET['telepon'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE markers SET lat='$lat', lng='$lng', name='$kecamatan', address='$alamat', telepon_kecamatan='(031) $telepon'
			WHERE id = '$id'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data Koordinat Kecamatan gagal diperbarui.
	          </div>

	         <script language="javascript">
	         $("#myModalKoordinatShow").modal("hide");
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
		              Data Koordinat Kecamatan berhasil diperbarui.
		          </div>

		         <script language="javascript">
		         	$("#myModalKoordinatShow").modal("hide");
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
    $("#myModalKoordinatShow").modal('show');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $("form").parsley();

    $("form").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
            KoordinatExecutor();
        } 
        e.preventDefault();
    });
});
</script>