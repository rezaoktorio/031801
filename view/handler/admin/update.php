<?php

require_once('../../../controller/header.php');

$control=$_GET['control'];
if($control=='UpdateShow'){

	$id_admin=$_GET['id_admin'];

	$query="SELECT * FROM admin WHERE id_admin='$id_admin'";

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
			          <input type="hidden" value="'.$id_admin.'" id="id_admin">
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nik">NIK</label>
			                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="'.$row['nik_admin'].'" data-parsley-type="number" data-parsley-maxlength="20" required  >
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="nama">Nama</label>
			                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="'.$row['nama_admin'].'" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="50" required >
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="email">Email address</label>
			                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="'.$row['email_admin'].'" parsley-type="email" required>
			              </div>
			              <div class="form-group col-md-12">
			                <label class="control-label" for="password">Password</label>
			                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="'.$row['password'].'" data-parsley-length="[6,10]" data-parsley-type="alphanum" required>
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
	$id_admin=$_GET['id_admin'];
	$nik=$_GET['nik'];
    $nama=$_GET['nama'];
    $email=$_GET['email'];
    $pass=$_GET['password'];

// echo $id_admin.'-'.$nik.'-'.$nama.'-'.$email.'-'.$pass  ;


	// //query for update data in database
	$query = "UPDATE admin SET nik_admin='$nik', nama_admin='$nama', email_admin='$email', password='$pass'
			WHERE id_admin = '$id_admin'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data admin gagal diperbarui.
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
		              Data admin berhasil diperbarui.
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