<?php

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
			          	<form role="form" data-parsley-validate="">
			          		<div class="form-group col-md-12" align="center">';

				        	$namafile = ''.$rowtitle['name'].'';
				        	$pathjpg = "../../../assets/images/camat/".$namafile.".jpg";
				        	$pathjpeg = "../../../assets/images/camat/".$namafile.".jpeg";
				        	$pathpng = "../../../assets/images/camat/".$namafile.".png";
				        	if (file_exists($pathjpg)) {
				        		echo '<img src="../../assets/images/camat/'.$namafile.'.jpg" alt="image" class="img-responsive img-rounded" width="200"/>';
				        	} elseif (file_exists($pathjpeg)) {
				        		echo '<img src="../../assets/images/camat/'.$namafile.'.jpeg" alt="image" class="img-responsive img-rounded" width="200"/>';
				        	} elseif (file_exists($pathpng)) {
				        		echo '<img src="../../assets/images/camat/'.$namafile.'.png" alt="image" class="img-responsive img-rounded" width="200"/>';
				        	} else {
				        		echo '<img src="../../assets/images/camat/profile.png" alt="image" class="img-responsive img-rounded" width="200"/>';
				        	}

							$executenama = mysql_query("SELECT nama_camat FROM camat WHERE id='$id'");
							while($rownama = mysql_fetch_array($executenama)) {
								$namacamat = $rownama['nama_camat'];
							}

				        	echo '
				        	<strong>'.$namacamat.'</strong>
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



<!-- jscript tabel -->
<script type="text/javascript">
	$(document).ready(function(){
    $("#myModalFotoShow").modal('show');
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