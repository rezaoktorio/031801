<?php

	$table=$_GET['table'];
	if($table=='dokumen'){
				require_once('../../../controller/connection.php');
				$query = "SELECT dokumen.id_dokumen AS id,
                                  markers.name as kecamatan,
                                  kelurahan.nama_kelurahan as kelurahan,
                                  dokumen.cerai_p+dokumen.cerai_l AS CERAI,
                                  dokumen.kk AS KK,
                                  dokumen.ktp_l+dokumen.ktp_p AS KTP,
                                  dokumen.lahir_p+dokumen.lahir_l AS LAHIR,
                                  dokumen.mati_l+dokumen.mati_p AS MATI,
                                  dokumen.nikah_l+dokumen.nikah_p AS NIKAH,
                                  DATE_FORMAT(dokumen.tglupdate,'%M %Y') as TGL
                                  FROM dokumen
                                  JOIN kelurahan ON dokumen.id_kelurahan = kelurahan.id_kelurahan
                                  JOIN markers ON kelurahan.id_kecamatan = markers.id
                                  ORDER BY dokumen.tglupdate desc, kelurahan.id_kelurahan asc"; //the query for get all data in tb_student

				$tableStructure='   
                <div class="card-box table-responsive">
                    <h5 class="m-t-0 header-title"><b>Daftar Data Dokumen.</b></h5>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>KK</th>
                                <th>KTP</th>
                                <th>Lahir</th>
                                <th>Mati</th>
                                <th>Nikah</th>
                                <th>Cerai</th>
                                <th>Periode Data</th>
                            </tr>
                        </thead>';
					$nomor=1;
					$result = mysql_query($query);

					while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
					$tableStructure=$tableStructure.
					'
						<tr align="center">
							<td>
									'.$nomor++.'
							</td>
							<td align="left">'.$data['kecamatan'].'</td>
                            <td align="left">'.$data['kelurahan'].'</td>
		                    <td>'.$data['KK'].'</td>
		                    <td>'.$data['KTP'].'</td>
                            <td>'.$data['LAHIR'].'</td>
                            <td>'.$data['MATI'].'</td>
                            <td>'.$data['NIKAH'].'</td>
                            <td>'.$data['CERAI'].'</td>
                            <td>'.$data['TGL'].'</td>
						</tr>';
				}
				$tableStructure=$tableStructure.'
					<tbody>
				</table>
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