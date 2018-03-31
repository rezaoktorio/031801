<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='UpdateShow'){

	$id=$_GET['id'];

	$query="SELECT name, embed, lat, lng FROM markers WHERE id='$id'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade" id="myModalKoordinatShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Perbarui Koordinat Kecamatan <strong>'.$row['name'].'</strong></h4>
			        </div>
			        <div class="modal-body">
			          <form role="form" data-parsley-validate="">
			          <input type="hidden" value="'.$id.'" id="id">
			              <div class="form-group col-md-12">
			                <label class="control-label" for="lat">Latitude</label>
			                <input type="text" class="form-control" id="lat" name="lat" placeholder="Masukkan Latitude" value="'.$row['lat'].'" data-parsley-pattern="^[0-9.-]+$" data-parsley-maxlength="20" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="lat">Longitude</label>
			                <input type="text" class="form-control" id="lng" name="lng" placeholder="Masukkan Latitude" value="'.$row['lng'].'" data-parsley-pattern="^[0-9.-]+$" data-parsley-maxlength="20" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="embed">Koordinat</label>
			                <textarea class="form-control" id="embed" name="embed" placeholder="Masukkan Sematan Peta Google" >'.$row['embed'].'</textarea>
			                <h6>Tips :</h6>
			                <h6>*Lihat contoh di ("https://goo.gl/maps/4ANtAjLUwyG2") > Bagikan > Sematkan Peta > Salin HTML</h6>
			                <h6>*Anda dapat memulai keyword pencarian dengan kata ("Kec.") lalu nama kecamatan</h6>
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
	$lat=$_GET['lat'];
    $lng=$_GET['lng'];
    $embed=$_GET['embed'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE markers SET lat='$lat', lng='$lng', embed='$embed'
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
            UpdateExecutor();
        } 
        e.preventDefault();
    });
});
</script>