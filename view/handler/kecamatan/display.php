<?php
require_once('../../../controller/connection.php');

$control=$_GET['control'];
if($control=='DisplayShow'){

	$id=$_GET['id'];

	$querytitle="SELECT * FROM markers WHERE id='$id'";

	$tampiltitle=mysql_query($querytitle);

	while($rowtitle=mysql_fetch_array($tampiltitle)) {
		echo '

		<div class="modal fade" id="myModalDisplayShow" tabindex="-1" role="dialog"  aria-labelledby="full-width-modalLabel"">
			    <div class="modal-dialog modal-lg" role="document">
			      <div class="modal-content">
			      	<div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <h4 class="modal-title" id="myModalLabel">Daftar Kelurahan Pada Kecamatan <strong>'.$rowtitle['name'].'</strong></h4>
			        </div>
			        <div class="modal-body" align="center">';
		
			        // isi
			        $query = "SELECT kelurahan.id_kelurahan as id, kelurahan.nama_kelurahan as nama, kelurahan.alamat_kelurahan as alamat, kelurahan.telepon_kelurahan as telepon FROM `markers` JOIN kelurahan ON markers.id = kelurahan.id_kecamatan WHERE kelurahan.id_kecamatan = ".$id."
								 "; //the query for get all data in tb_student

					$tableStructure='
					<table id="datatable-buttons" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
	                            <th width="200">Kelurahan</th>
	                            <th width="350">Alamat</th>
	                            <th width="100">Telepon</th>
							</tr>
						</thead>
						<tbody>';
						$nomor=1;
						$result = mysql_query($query);

						while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
						$tableStructure=$tableStructure.
						'
							<tr>
								<td>
										'.$nomor++.'
								</td>
								<td>'.$data['nama'].'</td>
			                    <td>'.$data['alamat'].'</td>
			                    <td>'.$data['telepon'].'</td>
							</tr>';
					}
					$tableStructure=$tableStructure.'
						<tbody>
					</table>';
					echo $tableStructure;




		echo '
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
	$("#myModalDisplayShow").css('overflow', 'hidden')
    $("#myModalDisplayShow").modal('show');
    });
</script>

<!-- jscript tabel -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "../../../assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>
