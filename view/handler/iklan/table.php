<?php

	$table=$_GET['table'];
	if($table=='iklan'){
				require_once('../../../controller/connection.php');
				$query = "SELECT id_iklan, nama_iklan, embed_iklan, if(status_iklan=1,'Activated','Deactivated') as status, update_at FROM iklan order by status_iklan asc, update_at desc
								 "; //the query for get all data in tb_student

				$tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Iklan Layanan Masyarakat.</b></h5><hr>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="5">No.</th>
                            <th>URL Youtube</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th width="130">Aksi</th>
						</tr>
					</thead>
					<tbody>';
					$nomor=1;
					$result = mysql_query($query);

					while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
					if($data['status']=="Activated"){$cetakspan="success";}else{$cetakspan="danger";};

                    $tableStructure=$tableStructure.
					'
						<tr>
							<td>
									'.$nomor++.'
							</td>
							<td>'.$data['embed_iklan'].'</td>
                            <td>'.$data['nama_iklan'].'</td>
		                    
		                    <td><span class="label label-table label-'.$cetakspan.'">'.$data['status'].'</span></td>
							<td align="center">
                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id_iklan'].'\');">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-info btn-custom btn-mini btn-xs waves-effect" onclick="DisplayExecutor(\''.$data['id_iklan'].'\');">
                                  Cek
                                </button>
                                <button type="button" class="btn btn-danger btn-custom btn-mini btn-xs waves-effect" onclick="DeleteShow(\''.$data['id_iklan'].'\');">
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