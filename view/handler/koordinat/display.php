<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DisplayShow'){

	$id=$_GET['id'];

	$querytitle="SELECT name, embed, lat, lng FROM markers WHERE id='$id'";

	$tampiltitle=mysql_query($querytitle);

	while($rowtitle=mysql_fetch_array($tampiltitle)) {
		echo '

		<div class="modal fade" id="myModalDisplayShow" tabindex="-1" role="dialog"  aria-labelledby="full-width-modalLabel"">
			    <div class="modal-dialog modal-lg" role="document">
			      <div class="modal-content">
			      	<div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Peta Koordinat Kecamatan <strong>'.$rowtitle['name'].'</strong></h4>
			        </div>
			        <div class="modal-body" align="center">
			        	<form class="form-inline">
			        		<div class="form-group">
			        			<label for="exampleInputName2">Latitude</label>
	                            <input type="text" class="form-control" readonly="" value="'.$rowtitle['lat'].'">
	                        </div>
	                        <div class="form-group">
	                        	<label for="exampleInputName2">Longitude</label>
	                            <input type="text" class="form-control" readonly="" value="'.$rowtitle['lng'].'">
	                        </div>
			        	</form><br>
			        	'.$rowtitle['embed'].'
			        </div>
			        <div align="center">
			          <button type="button" class="btn btn-danger btn-custom" data-dismiss="modal">Tutup</button>
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
    $("#myModalDisplayShow").modal('show');
    });
</script>

