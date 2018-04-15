<?php
require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DeleteModal'){
	echo '
		<script type="text/javascript">
			$(document).ready(function(){
		    $("#myModalHapus").modal("show");
		    });
		</script>

		<div id="myModalHapus" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalHapus">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Hapus Data Dokumen</h4>
		      </div>
		      <form role="form" data-parsley-validate="">
		      <div class="modal-body">
		        
		          <div class="form-group">
		            <label for="kecamatan">Periode Data</label>
		            <select class="form-control selectpicker" data-live-search="true" data-style="btn-white" id="tglperiodeDel" name="tglperiodeDel" required="">
                		<option value=""></option>';
                            $queryselect="SELECT DISTINCT tglupdate, DATE_FORMAT(tglupdate,'%M %Y') as TGL FROM dokumen ORDER BY tglupdate ASC";
                            $resultselect = mysql_query($queryselect);

                            while ($dataselect = mysql_fetch_array($resultselect)){
                            echo'
                                <option value='.$dataselect['tglupdate'].' data-subtext="Periode Data Dokumen Untuk '.$dataselect['TGL'].'"> '.$dataselect['TGL'].' </option>
                                ';
                            }

			                echo '</select>
		        </div>
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Hapus Data</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
	';
}
?>

<?php

$control=$_GET['control'];
if($control=='DeleteShow'){

	$tglperiodeDel=$_GET['tglperiodeDel'];

	$query="SELECT DISTINCT tglupdate, DATE_FORMAT(tglupdate,'%M %Y') as TGL FROM dokumen WHERE tglupdate='$tglperiodeDel'";

	$tampil=mysql_query($query);

	while($row=mysql_fetch_array($tampil)) {
		echo '
		<script type="text/javascript">
		    $(document).ready(function(){
		    $("#myModalDeleteShow").modal("show");
		    });
		</script>

		<div class="modal fade bs-example-modal-sm" id="myModalDeleteShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog modal-sm" role="document">
			      <div class="modal-content">
			        <div class="modal-body" align="center">
			        	<input type="hidden" value="'.$tglperiodeDel.'" id="tglupdate">
			        	<img src="../handler/kecamatan/warningIcon.png" style="width:65%"><br><br>
			        	<strong>Apakah anda yakin hapus semua data dokumen untuk <br><font color="red">"Periode '.$row['TGL'].'"</font>?</strong>
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

	$tglupdate=$_GET['tglupdate'];

	// //query for update data in database
	$query = "DELETE FROM dokumen WHERE tglupdate='$tglupdate'" ;
	 $hasil = mysql_query($query);
	 
	//  //see the result
		if (!$hasil){
			echo  '
	          <div class="alert alert-danger" id="danger-alert">
	              <button type="button" class="close" data-dismiss="alert">x</button>
	              <strong>Kesalahan! </strong>
	              Data Dokumen gagal dihapus.
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
		              Data Dokumen berhasil dihapus.
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

<script>
  $('.selectpicker').selectpicker();
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $("form").parsley();

    $("form").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
        	$(document).ready(function(){
		    $("#myModalHapus").modal('hide');
		    });
            DeleteShow();
        } 
        e.preventDefault();
    });
});
</script>

