<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DeleteShow'){

	$id_admin=$_GET['id_admin'];

	$query="SELECT * FROM admin WHERE id_admin='$id_admin'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '

		<div class="modal fade bs-example-modal-sm" id="myModalDeleteShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog modal-sm" role="document">
			      <div class="modal-content">
			        <div class="modal-body" align="center">
			        	<input type="hidden" value="'.$id_admin.'" id="id_admin">
			        	<img src="../handler/admin/warningIcon.png" style="width:65%"><br><br>
			        	<strong><h3>Apakah anda yakin?</h3></strong>'.$row['nik_admin'].' / '.$row['nama_admin'].'
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
	$id_admin=$_GET['id_admin'];

	// //query for update data in database
	$query = "UPDATE admin SET status='0'
			WHERE id_admin = '$id_admin'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data admin gagal dihapus.
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
		              Data admin berhasil dihapus.
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

    $('#myForm').validator()
</script>

