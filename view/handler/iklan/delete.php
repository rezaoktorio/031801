<?php
require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DeleteShow'){

	$id_iklan=$_GET['id_iklan'];

	$query="SELECT * FROM iklan WHERE id_iklan='$id_iklan'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade bs-example-modal-sm" id="myModalDeleteShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog modal-sm" role="document">
			      <div class="modal-content">
			        <div class="modal-body" align="center">
			        	<input type="hidden" value="'.$id_iklan.'" id="id_iklan">
			        	<img src="../handler/iklan/warningIcon.png" style="width:65%"><br><br>
			        	<strong>Apakah anda yakin akan menghapus "'.$row['nama_iklan'].'" ?</strong>
			        </div>
			        <div align="center">
			          <button type="button" class="btn btn-default btn-custom" data-dismiss="modal">Batal</button>
			          <button type="button" class="btn btn-danger btn-custom waves-effect" onclick="DeleteExecutor()"><strong>Ya, Hapus!</strong></button>
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
if($control=='DeleteCommit'){
	$id_iklan=$_GET['id_iklan'];

	//cari embed gambar
	$cari=mysql_query("SELECT embed_iklan, tipe_iklan from iklan WHERE id_iklan='$id_iklan' ");
	while($datacari=mysql_fetch_array($cari)) {
		$linkgambar = $datacari['embed_iklan'];
		

		if($datacari['tipe_iklan']==1){
			// //query for update data in database
			$query = "DELETE FROM iklan WHERE id_iklan='$id_iklan'" ;
			$hasil = mysql_query($query);
		} elseif($datacari['tipe_iklan']==2){
			// //query for update data in database
			unlink('../../'.$linkgambar);
			$query = "DELETE FROM iklan WHERE id_iklan='$id_iklan'" ;
			$hasil = mysql_query($query);
			
		} 
	}

	
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data iklan masyarakat gagal dihapus.
	          </div>

	         <script language="javascript">
	         $("#myModalDeleteShow").modal("hide");
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
		              Data iklan masyarakat berhasil dihapus.
		          </div>

		         <script language="javascript">
		         	$("#myModalDeleteShow").modal("hide");
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
    $("#myModalDeleteShow").modal('show');
    });

</script>

