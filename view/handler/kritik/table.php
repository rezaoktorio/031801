
<?php

	$table=$_GET['table'];
	if($table=='kritik'){
				require_once('../../../controller/connection.php');
				$query = "SELECT * FROM kritik order by tgl_kritik desc
								 "; //the query for get all data in tb_student

				$tableStructure='

        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Riwayat Kritik dan Saran</b></h5><hr>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="5">No.</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Subjek</th>
                            <th>Kritik dan Saran</th>
						</tr>
					</thead>
					<tbody>';
					$nomor=1;
					$result = mysql_query($query);

					while ($data = mysql_fetch_array($result)){ 

					$tableStructure=$tableStructure.
					'
						<tr>
							<td>
									'.$nomor++.'
							</td>
							<td>'.$data['tgl_kritik'].'</td>
		                    <td>'.$data['nama_kritik'].'</td>
		                    <td>'.$data['subjek_kritik'].'</td>
                            <td>'.$data['isi_kritik'].'</td>
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