<?php

require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='UpdateShow'){

	$id_iklan=$_GET['id_iklan'];

	$query="SELECT id_iklan, nama_iklan, embed_iklan, status_iklan FROM iklan WHERE id_iklan='$id_iklan'";

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
			          <form role="form" id="formUpdDisp" data-parsley-validate="">
			          <input type="hidden" value="'.$id_iklan.'" id="id_iklan">	
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nik">Nama / Judul</label>
			                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama/Judul" value="'.$row['nama_iklan'].'" data-parsley-maxlength="255" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="status">Status</label>
			                <select class="form-control selectpicker" data-style="btn-white" id="status" name="status" required="">
			                	<option value="1" '; if($row['status_iklan'] == "1"){echo "selected";} echo'>Activated</option>
		                        <option value="0" '; if($row['status_iklan'] == "0"){echo "selected";} echo'>Deactivated</option>
			                </select>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="embed">URL Youtube</label>
			                <textarea class="form-control" id="embed" name="embed" placeholder="Masukkan URL Youtube Video" data-parsley-pattern="/https://youtu.be//" required>'.$row['embed_iklan'].'</textarea>
			                <h6>Tips :</h6>
			                <h6>Klik tombol "Petunjuk Pengisian" untuk mengetahui cara mengisi sematan URL Youtube Video</h6>
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
	$id_iklan=$_GET['id_iklan'];
	$nama_iklan=$_GET['nama'];
	$embed_iklan=$_GET['embed'];
    $status_iklan=$_GET['status'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE iklan SET nama_iklan='$nama_iklan', embed_iklan='$embed_iklan', status_iklan='$status_iklan'
			WHERE id_iklan = '$id_iklan'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data iklan masyarakat gagal diperbarui.
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
		              Data iklan masyarakat berhasil diperbarui.
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
    $("#formUpdDisp").parsley();

    $("#formUpdDisp").on('submit', function(e) {
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
    $('.selectpicker').selectpicker();
 </script>