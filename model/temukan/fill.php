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
        <h4 class='page-title' style="margin-top: 0px">Hasil dari pencarian <i>"
          <?php
            $temukan = $_POST['temukan'];
            echo $temukan;
          ?>
          "</i> ....</h4>
        <p class="text-muted page-title-alt">Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
		<div class="panel panel-border panel-inverse">
			<div class="panel-heading">
				<h3 class="panel-title">Kelurahan</h3>
			</div>
			<div class="panel-body">
        <?php
        $temukan = $_POST['temukan'];
        $query = mysql_query("SELECT * FROM kelurahan WHERE nama_kelurahan = '".$temukan."'");
        $no = 1;
        while ($data = mysql_fetch_array($query)) {
        ?>
          <?php
          if (mysql_num_rows($query) == 1) {
            ?>
            <div class="col-sm-12">
              <h3 class="panel-title">Ditemukan data kelurahan <?php echo $temukan?>.</h3><br>
              <table class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kelurahan</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                  </tr>
                  </thead>

                  <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_kelurahan']; ?></td>
                        <td><?php echo $data['alamat_kelurahan']; ?></td>
                        <td><?php echo $data['telepon_kelurahan']; ?></td>
                    </tr>
                  </tbody>
              </table>
            </div>
            <?php
          }
          ?>
        <?php
            $no++;
        }
        ?>
			</div>
		</div>
	</div>

  <div class="col-sm-12">
		<div class="panel panel-border panel-inverse">
			<div class="panel-heading">
				<h3 class="panel-title">Kecamatan</h3>
			</div>
			<div class="panel-body">
        <?php
        $temukan = $_POST['temukan'];
        $query = mysql_query("SELECT
                markers.id as id, markers.name as nama_kecamatan, markers.embed as embed, markers.address as alamat, markers.luas_wilayah as luas_wilayah, markers.telepon_kecamatan as telepon_kecamatan,
                camat.nama_camat as nama_camat, camat.nik_camat as nik_camat
                FROM markers JOIN camat
                ON markers.id = camat.id WHERE markers.name = '".$temukan."'");
        $no = 1;
        while ($data = mysql_fetch_array($query)) {
        ?>
          <?php
          if (mysql_num_rows($query) == 1) {
            ?>
            <h3 class="panel-title">Ditemukan data kecamatan <?php echo $temukan?>.</h3><br>
            <div class="col-md-6 col-sm-6">
              <?php echo $data['embed'];?>
              <!-- <iframe src="https://www.google.com/maps/embed?<?php echo $data['embed'];?>" width="100px" height="" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="col-md-12 col-sm-12">
                <center>
                  <h4 class="panel-title">Pimpinan</h4><br>
                  <img style="border:solid #797979 3px;max-width:150px;" class="img-rounded" src="../../assets/images/camat/<?php $temukan = $_POST['temukan']; echo strtoupper($temukan)?>.jpg" width="50%"/><br><br>
                  <h4 class="panel-title"><u><?php echo $data['nama_camat'];?></u><br>NIP: <?php echo $data['nik_camat'];?></h4>
                </center>
              </div>
              <div class="col-md-12 col-sm-12">
                <center>
                  <h4 class="panel-title"><?php echo $data['alamat'];?><br><?php echo $data['telepon_kecamatan'];?></h4><br>
                  <a class="btn btn-info" href="../../view/dashboard_1/index.php?id=<?php echo $data['id'];?>">Dashboard</a>
                </center>
              </div>
            </div>
            <?php
          }
          ?>
        <?php
            $no++;
        }
        ?>

			</div>
		</div>
	</div>
</div>
<!-- end row -->
