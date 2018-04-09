
<?php
session_start();
require_once('../../../controller/connection.php');

$statusrole=$_SESSION['statusrole'];
if($statusrole=='1'){
    //role1
    $table=$_GET['table'];
    if($table=='admin'){
                
    $query = "SELECT id_admin, nik_admin, nama_admin, email_admin, tgl_gabung, password, if(role=1,'Advance',if(role=2,'Medium','Low')) as role, if(status=1,'Activated','Deactived') as keaktifan FROM admin order by id_admin desc
                     "; //the query for get all data in tb_student

    $tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Admin </b></h5><hr>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th width="52">Email</th>
                            <th>Bergabung</th>
                            <th>Role</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th width="72">Aksi</th>
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
                            <td><button class="btn btn-primary btn-custom waves-effect btn-mini btn-xs" onclick="DisplayExecutor(\''.$data['id_admin'].'\');">'.$data['nik_admin'].'</button></td>
                            <td>'.$data['nama_admin'].'</td>
                            <td>'.$data['email_admin'].'</td>
                            <td>'.$data['tgl_gabung'].'</td>
                            <td>'.$data['role'].'</td>
                            <td>'.$data['password'].'</td>
                            <td>'.$data['keaktifan'].'</td>
                            <td align="center">
                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id_admin'].'\');">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-custom btn-mini btn-xs waves-effect" onclick="DeleteShow(\''.$data['id_admin'].'\');">
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
} elseif ($statusrole=='2') {
    //role2
    $table=$_GET['table'];
    if($table=='admin'){
                
    $query = "SELECT * FROM admin WHERE status='1' or status='2' or status='3' order by id_admin desc
                     "; //the query for get all data in tb_student

    $tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Admin </b></h5><hr>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th width="50">Email</th>
                            <th>Bergabung</th>
                            <th width="72">Aksi</th>
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
                            <td><button class="btn btn-primary btn-custom waves-effect btn-mini btn-xs" onclick="DisplayExecutor(\''.$data['id_admin'].'\');">'.$data['nik_admin'].'</button></td>
                            <td>'.$data['nama_admin'].'</td>
                            <td>'.$data['email_admin'].'</td>
                            <td>'.$data['tgl_gabung'].'</td>
                            <td align="center">
                                <button type="button" class="btn btn-warning btn-custom btn-mini btn-xs waves-effect" onclick="UpdateShow(\''.$data['id_admin'].'\');">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-custom btn-mini btn-xs waves-effect" onclick="DeleteShow(\''.$data['id_admin'].'\');">
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
} elseif ($statusrole=='3') {
    //role3
    $table=$_GET['table'];
    if($table=='admin'){
                
    $query = "SELECT * FROM admin WHERE status='1' or status='2' or status='3' order by id_admin desc
                     "; //the query for get all data in tb_student

    $tableStructure='
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Admin </b></h5><hr>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th width="50">Email</th>
                            <th>Bergabung</th>
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
                            <td><button class="btn btn-primary btn-custom waves-effect btn-mini btn-xs" onclick="DisplayExecutor(\''.$data['id_admin'].'\');">'.$data['nik_admin'].'</button></td>
                            <td>'.$data['nama_admin'].'</td>
                            <td>'.$data['email_admin'].'</td>
                            <td>'.$data['tgl_gabung'].'</td>
                        </tr>';
                    }
                    $tableStructure=$tableStructure.'
                    <tbody>
                </table>
            </div>
        </div>';
    echo $tableStructure;
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