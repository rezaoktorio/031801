
<?php

	$table=$_GET['table'];
	if($table=='kelurahan'){
				require_once('../../../controller/connection.php');
				$query = "SELECT * FROM kelurahan
								 "; //the query for get all data in tb_student

				$tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Kelurahan</b></h5><hr>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="5">No.</th>
                            <th >Kelurahan</th>
                            <th width="200">Alamat</th>
                            <th>Telepon</th>
                            <th width="80">Aksi</th>
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
							<td>'.$data['nama_kelurahan'].'</td>
		                    <td>'.$data['alamat_kelurahan'].'</td>
		                    <td>'.$data['telepon_kelurahan'].'</td>
							<td align="center">
                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id_kelurahan'].'\');">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-custom btn-mini btn-xs waves-effect" onclick="DeleteShow(\''.$data['id_kelurahan'].'\');">
                                  Hapus
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