<!-- Page-Title -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <h4 class='page-title' style="margin-top: 0px">Menu Detil Kecamatan</h4>
        <p class="text-muted page-title-alt">Backend | Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
		<div class="panel panel-border panel-inverse">
			<div class="panel-heading">
        <ol class="breadcrumb">
            <li>
                <a href="../../view/admin/"><i class="fa fa-home"></i> Menu Utama </a>
            </li>
            <li>
                <a href="../../view/kecamatan/"><i class="fa fa-arrow-circle-right"></i> Menu Kecamatan </a>
            </li>
            <li class="active">
                <i class="fa fa-arrow-circle-right"></i> Menu Detil Kecamatan
            </li>
        </ol>
			</div>
			<div class="panel-body">
        <div class="col-sm-12">
          <div class="col-sm-12">
              <div class="card-box table-responsive">
                <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT * FROM `markers` WHERE id = ".$id."");
                $no = 1;
                while ($data = mysql_fetch_array($query)) {
                ?>
                  <h5 class="m-t-0 header-title"><b>Daftar Kelurahan Pada Kecamatan <?php echo $data['name'];?>.</b></h5>
                <?php
                    $no++;
                }
                ?>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>Kelurahan</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                      </tr>
                      </thead>

                      <tbody>
                        <?php
                        $id = $_GET['id'];
                        $query = mysql_query("SELECT kelurahan.id_kelurahan as id, kelurahan.nama_kelurahan as nama, kelurahan.alamat_kelurahan as alamat, kelurahan.telepon_kelurahan as telepon FROM `markers` JOIN kelurahan ON markers.id = kelurahan.id_kecamatan WHERE kelurahan.id_kecamatan = ".$id."");
                        $no = 1;
                        while ($data = mysql_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['telepon']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
			</div>
		</div>
	</div>
</div>
<!-- end row -->
