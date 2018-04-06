<?php
session_start();
require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='FotoShow'){

	$id=$_GET['id'];

	$query="SELECT name FROM markers WHERE id='$id'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade" id="myModalFotoShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Perbarui Foto Camat <strong>'.$row['name'].'</strong></h4>
			        </div>
			        <div class="modal-body">
			          	<form role="form" method="post" enctype="multipart/form-data" action="../handler/kecamatan/uploadfoto.php">
			          		<div class="form-group col-md-12" align="center">';

							$executenama = mysql_query("SELECT nama_camat FROM camat WHERE id='$id'");
							while($rownama = mysql_fetch_array($executenama)) {
								$namacamat = $rownama['nama_camat'];
							}

				        	echo '
				        	<strong>'.$namacamat.'</strong><hr>
			          		</div>
			          		<input type="hidden" value="'.$row['name'].'" id="namafoto" name="namafoto">
			          		<div class="form-group col-md-12"	>
				          		<label class="control-label">Default file input</label>
								<input type="file" class="filestyle" data-buttonname="btn-white" name="picture">
							</div>
			              	<div align="center">
					          <button type="button" class="btn btn-default btn-custom" data-dismiss="modal">Batal</button>
					          <button type="submit" class="btn btn-warning btn-custom waves-effect"><strong>Perbarui Foto!</strong></button>
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



<!-- jscript tabel -->
<script type="text/javascript">
	$(document).ready(function(){
    $("#myModalFotoShow").modal('show');
    });

    $(":file").filestyle({placeholder: "Hanya File Gambar Tipe .jpg/.jpeg/.png"});
</script>
