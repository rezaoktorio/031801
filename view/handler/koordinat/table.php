
<?php
	session_start();
	require_once('../../../controller/connection.php');
	$sesi = $_SESSION['username'];
	$cek = mysql_query("SELECT role as role FROM admin WHERE nik_admin = '$sesi'");
	while ($row = mysql_fetch_array($cek)) {
		if ($row['role'] == '1') {
			$table=$_GET['table'];
			if($table=='koordinat'){

						$query = "SELECT * FROM markers
										 "; //the query for get all data in tb_student

						$tableStructure='

		        <div class="col-sm-12">
		            <div class="card-box table-responsive">
		                <h5 class="m-t-0 header-title"><b>Daftar Data Koordinat Kecamatan</b></h5><hr>
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="5">No.</th>
		                            <th>Kecamatan</th>
		                            <th>Latitude</th>
		                            <th>Longitude</th>
		                            <th width="10">Kordinat</th>
		                            <th width="10">Aksi</th>
								</tr>
							</thead>
							<tbody>';
							$nomor=1;
							$result = mysql_query($query);

							while ($data = mysql_fetch_array($result)){

		                    if($data['embed']!=""){$cetak="active";}else{$cetak="disabled";};

							$tableStructure=$tableStructure.
							'
								<tr>
									<td>
											'.$nomor++.'
									</td>
									<td>'.$data['name'].'</td>
				                    <td>'.$data['lat'].'</td>
				                    <td>'.$data['lng'].'</td>
		                            <td align="center"><button type="button" class="btn btn-inverse btn-custom btn-mini btn-xs waves-effect" data-style="expand-left" onclick="DisplayExecutor(\''.$data['id'].'\');" '.$cetak.'>
		                                  Check
		                                </button></td>
									<td align="center">
		                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id'].'\');">
		                                  Edit
		                                </button>
									</td>
								</tr>';
						}
						$tableStructure=$tableStructure.'
							<tbody>
						</table>
		            </div>
		        </div>';
						echo $tableStructure;
						}
		}if ($row['role'] == '2') {
			echo "Maaf anda tidak memiliki hak akses untuk mengubah menu kordinat";
		}if ($row['role'] == '3') {
			echo "Maaf anda tidak memiliki hak akses untuk mengubah menu kordinat";
		}
	}

		?>

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
