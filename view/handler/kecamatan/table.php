<?php

	$table=$_GET['table'];
	if($table=='kecamatan'){
				require_once('../../../controller/connection.php');
				$query = "SELECT * FROM markers
								 "; //the query for get all data in tb_student

				$tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Kecamatan Surabaya</b></h5><hr>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="5">No.</th>
                            <th>Kecamatan</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th width="150">Aksi</th>
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
							<td><button class="btn btn-primary btn-custom waves-effect " onclick="DisplayExecutor(\''.$data['id'].'\');">'.$data['name'].'</button></td>
		                    <td>'.$data['address'].'</td>
		                    <td>'.$data['telepon_kecamatan'].'</td>
							<td align="center">
                                <button type="button" class="btn btn-default btn-custom btn-mini btn-xs waves-effect" onclick="KoordinatShow(\''.$data['id'].'\');">
                                  Koordinat
                                </button>
                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id'].'\');">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-custom btn-mini btn-xs waves-effect" onclick="DeleteShow(\''.$data['id'].'\');">
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