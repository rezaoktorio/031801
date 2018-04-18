<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DisplayShow'){

	$id_iklan=$_GET['id_iklan'];
	$pilihan=0;

	$querytitle="SELECT nama_iklan, tipe_iklan, embed_iklan, SUBSTRING(embed_iklan, 18) as embed FROM iklan WHERE id_iklan='$id_iklan'";

	$tampiltitle=mysql_query($querytitle);

	while($rowtitle=mysql_fetch_array($tampiltitle)) {

		if($rowtitle['tipe_iklan']==1){
			echo '
			<script type="text/javascript">
				$(document).ready(function(){
			    $("#myModalDisplayShow").modal("show");
			    });

			    $("#myModalDisplayShow").on("hidden.bs.modal", function (e) {
			    $("#myModalDisplayShow iframe").attr("src", $("#myModalDisplayShow iframe").attr("src"));
				});
			</script>

			<div class="modal fade" id="myModalDisplayShow" tabindex="-1" role="dialog"  aria-labelledby="full-width-modalLabel"">
				    <div class="modal-dialog modal-lg" role="document">
				      	<div class="modal-content">
					      	<div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					          <h4 class="modal-title" id="myModalLabel">'.$rowtitle['nama_iklan'].'</h4>
					        </div>
					        <div class="modal-body" align="center" >
					        	<form  id="playerYT">
					        		<iframe width="800" height="450" src="https://www.youtube.com/embed/'.$rowtitle['embed'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					        	</form>			        
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-danger btn-custom" data-dismiss="modal">Tutup</button>
					        </div>
					     </div>
					</div>
			</div>
			';
		} elseif ($rowtitle['tipe_iklan']==2){

			$src='../../'.$rowtitle['embed_iklan'];

			echo '
			<script type="text/javascript">
				$(document).ready(function(){
			    $("#myModalDisplayShowGB").modal("show");
			    });
			</script>

				<div class="modal fade" id="myModalDisplayShowGB" tabindex="-1" role="dialog"  aria-labelledby="full-width-modalLabel"">
				    <div class="modal-dialog modal-lg" role="document">
				      	<div class="modal-content">
					      	<div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					          <h4 class="modal-title" id="myModalLabel">'.$rowtitle['nama_iklan'].' </h4>
					        </div>
					        <div class="modal-body" align="center" >
					        	<form  id="playerGB">
					        		<img  src="'.$src.'" alt="image" class="img-responsive img-thumbnail" width="800" height="450"/>
					        	</form>			        
					        </div>
					        <div class="modal-footer">
					          	<button type="button" class="btn btn-danger btn-custom" data-dismiss="modal">Tutup</button>
					        </div>
					     </div>
					</div>
			</div>

			';
		}


			
		
		
	}
}
?>




