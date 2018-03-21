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
        <h4 class='page-title' style="margin-top: 0px">Menu Kordinat</h4>
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
            <li class="active">
                <i class="fa fa-arrow-circle-right"></i> Menu Kordinat
            </li>
        </ol>
			</div>
			<div class="panel-body">
        <div class="col-sm-12">
          <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Daftar Data Kordinat Kecamatan.</b></h5>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Kecamatan</th>
                              <th>Latitude</th>
                              <th>Longitude</th>
                              <th>Kordinat</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>

                            <?php
                            $query = mysql_query("SELECT * FROM `markers`");
                            $no = 1;
                            while ($data = mysql_fetch_array($query)) {
                            ?>
                            <tr class="gradeX">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['lat']; ?></td>
                                <td><?php echo $data['lng']; ?></td>
                                <td><?php echo substr($data['embed'], 0, 40); ?></td>
                                <td>-</td>
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
