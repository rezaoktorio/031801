<!-- Page-Title -->


<!-- <script language='javascript' type='text/text/javascript'>
var data2 = {
  labels: ['pns'],
  series: [
    ['5', 4, 3, 7, 5, 10, 3, 4, 8, 10, 6],

  ]
};

var options2 = {
  seriesBarDistance:10
};

var responsiveOptions2 = [
  ['screen and (max-width: 640px)', {
    seriesBarDistance: 0,
    axisX: {
      labelInterpolationFnc: function (value) {
        return value[0];
      }
    }
  }]
];

new Chartist.Bar('#overlapping-bars2', data2, options2, responsiveOptions);

</script> -->



<script type="text/javascript">
$(document).ready(function(){
  alert('test');

});
</script>






<div class="row">
    <div class="col-sm-1 col-sm-offset-1" style="margin-bottom:2%;">
      <?php
        $id = $_GET['id'];
        $query = mysql_query("SELECT * FROM `markers` where id = ".$id."");
        $no = 1;
        while ($data = mysql_fetch_array($query)) {
        ?>
            <img style="border:solid #797979 2px;" class="img-rounded" src="../../assets/images/logo/Surabaya.png" width="100%"/>
        <?php
            $no++;
        }
      ?>
    </div>
    <div class="col-sm-9">
        <!-- <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div> -->
        <?php
          $id = $_GET['id'];
          $query = mysql_query("SELECT * FROM `markers` where id = ".$id."");
          $no = 1;
          while ($data = mysql_fetch_array($query)) {
          ?>
              <h4 class='page-title' style="margin-top: 0px">Dashboard Kecamatan <?php echo $data['name'];?></h4>
              <p class="text-muted page-title-alt"><?php echo $data['address'];?><br><?php echo $data['telepon_kecamatan'];?></p>
          <?php
              $no++;
          }
        ?>
    </div>
</div>
<div class="row">
  <div class = "col-md-12">
    <div class="card-box">
      <h4 class="text-dark header-title m-t-0">Daftar Kecamatan</h4>
      <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
        <thead>
          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">No.</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 259px;">Kelurahan</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117px;">Alamat</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Telepon</th>
            <th style="width: 60px;">Details Dashboard</th>
          </tr>
        </thead>
        <tbody>

            <?php
              $no=1;
              $id = $_GET['id'];
              $query = mysql_query("SELECT kl.id_kelurahan as id2, mk.id as id, mk.name as kecamatan, kl.nama_kelurahan as kelurahan, kl.id_kelurahan  , kl.alamat_kelurahan, kl.telepon_kelurahan from kelurahan kl left join markers mk on kl.id_kecamatan = mk.id   where id_kecamatan = ".$id."");
              while($data = mysql_fetch_array($query))
              {
              ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $no;?></td>
                <td><?php echo $data['kelurahan'];?></td>
                <td><?php echo $data['alamat_kelurahan'];?></td>
                <td><?php echo $data['telepon_kelurahan'];?></td>
                <td><a type="button" href="../dashboard_2/index.php?id=<?php echo $data['id'];?>&id2=<?php echo $data['id2'];?>" target="_" id="<?php echo $data['kelurahan']; ?>" class="btn btn-default">info</a></td>
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

<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="widget-bg-color-icon card-box fadeInDown animated">
            <div class="bg-icon bg-icon-info pull-left">
                <i class="fa fa-venus-mars text-info"></i>
            </div>
            <div class="text-right">
                <!-- <h3 class="text-dark"><b class="counter">Gatau Rumusnya</b></h3> -->
                <?php
                  $id = $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan,
                                    SUM(dg.ktp_p) as ktp_p,
                                    SUM(dg.ktp_l) as ktp_l,
                                    SUM(dg.ktp_p)+SUM(dg.ktp_l) as total
                                    FROM kelurahan kl
                                    JOIN markers mk ON kl.id_kecamatan = mk.id
                                    JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                    WHERE mk.id='".$id."' AND dg.tglupdate =
                                    	(
                                        SELECT MAX(dg.tglupdate)
                                            FROM kelurahan kl
                                            JOIN markers mk ON kl.id_kecamatan = mk.id
                                            JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                            WHERE mk.id = '".$id."'
                                        )
                                    GROUP BY mk.id");
                  $no = 1;
                  while ($data = mysql_fetch_array($query)) {
                    $rasiol = ($data['ktp_l']/$data['ktp_p']*100);
                    $rasiop = ($data['ktp_p']/$data['ktp_l']*100);
                  ?>
                      <h3 class="text-dark" style="font-size:20px">
                        <b> <?php echo round($rasiol,0)?> <span class="fa fa-male"></span>
                          &nbsp;:&nbsp;
                        <span class="fa fa-female"></span> <?php echo round($rasiop,0)?> </b>
                      </h3>
                  <?php
                      $no++;
                  }
                ?>
                <p class="text-muted">Rasio Jenis Kelamin</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-pink pull-left">
                <i class="typcn typcn-credit-card text-pink"></i>
            </div>
            <div class="text-right">
              <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT mk.name as kecamatan,
                                    SUM(dg.ktp_p) as ktp_p,
                                    SUM(dg.ktp_l) as ktp_l,
                                    SUM(dg.ktp_p)+SUM(dg.ktp_l) as total
                                    FROM kelurahan kl
                                    JOIN markers mk ON kl.id_kecamatan = mk.id
                                    JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                    WHERE mk.id='".$id."'  AND dg.tglupdate =
                                    (
                                      SELECT MAX(dg.tglupdate)
                                          FROM kelurahan kl
                                          JOIN markers mk ON kl.id_kecamatan = mk.id
                                          JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                          WHERE mk.id = '".$id."'
                                      )  GROUP BY mk.id");
                $no = 1;
                while ($data = mysql_fetch_array($query)) {
                ?>
                    <h3 class="text-dark"><b class="counter"> <?php echo $data['total'];?></b></h3>
                <?php
                    $no++;
                }
              ?>
                <p class="text-muted">Jumlah Kepemilikan KTP</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-purple pull-left">
                <i class="fa fa-file-text  text-purple"></i>
            </div>
            <div class="text-right">
              <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT mk.name as kecamatan,
                                    SUM(dg.kk) as total
                                    FROM kelurahan kl
                                    JOIN markers mk ON kl.id_kecamatan = mk.id
                                    JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                    WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                    (
                                      SELECT MAX(dg.tglupdate)
                                          FROM kelurahan kl
                                          JOIN markers mk ON kl.id_kecamatan = mk.id
                                          JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                          WHERE mk.id = '".$id."'
                                      )");
                $no = 1;
                while ($data = mysql_fetch_array($query)) {
                ?>
                    <h3 class="text-dark"><b class="counter"> <?php echo $data['total'];?></b></h3>
                <?php
                    $no++;
                 };
              ?>
                <p class="text-muted">Jumlah Kepemilikan KK</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-3">
    <div class="card-box">
      <h4 class="text-dark header-title m-t-0 m-b-30">Kepemilikan<br>Akta Kelahiran</h4>

      <div class="widget-chart text-center">
                <div id="sparkline3"></div>
                <ul class="list-inline m-t-15">
                    <?php
                    $id= $_GET['id'];
                    $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.lahir_p) as lahir_p, SUM(dg.lahir_l) as lahir_l, SUM(dg.lahir_p)+SUM(dg.lahir_l) as total
                                          FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan WHERE mk.id = '".$id."'
                                          AND dg.tglupdate =
                                           (
                                             SELECT MAX(dg.tglupdate)
                                                 FROM kelurahan kl
                                                 JOIN markers mk ON kl.id_kecamatan = mk.id
                                                 JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                 WHERE mk.id = '".$id."'
                                             ) GROUP BY mk.id");
                    while($data = mysql_fetch_array($query))
                    {
                    ?>
                    <li>
                    <h5 class="text-muted m-t-20">Laki-laki</h5>
                    <h4 class="m-b-0"><?php echo $data['lahir_l'];?></h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Perempuan</h5>
                       <h4 class="m-b-0"><?php echo $data['lahir_p']; ?></h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Total</h5>
                        <h4 class="m-b-0"><?php echo $data['total']; ?></h4>
                    </li>
                    <?php
                  }; ?>
                </ul>
          </div>
    </div>

    </div>

    <div class="col-md-3">
    <div class="card-box">
      <h4 class="text-dark  header-title m-t-0 m-b-30">Kepemilikan<br>Akta Kematian</h4>

      <div class="widget-chart text-center">
                <div id="sparkline2"></div>
            <ul class="list-inline m-t-15">
                <?php
                $id= $_GET['id'];
                $query = mysql_query("SELECT mk.name as kecamatan,SUM(dg.mati_p) as mati_p, SUM(dg.mati_l) as mati_l, SUM(dg.mati_p)+SUM(dg.mati_l) as total
                                      FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                      WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                      	(
                                          SELECT MAX(dg.tglupdate)
                                              FROM kelurahan kl
                                              JOIN markers mk ON kl.id_kecamatan = mk.id
                                              JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                              WHERE mk.id = '".$id."'
                                          ) GROUP BY mk.id");
                while($data = mysql_fetch_array($query))
                {
                ?>
                <li>
                <h5 class="text-muted m-t-20">Laki-laki</h5>
                <h4 class="m-b-0"><?php echo $data['mati_l'];?></h4>
                </li>
                <li>
                    <h5 class="text-muted m-t-20">Perempuan</h5>
                   <h4 class="m-b-0"><?php echo $data['mati_p']; ?></h4>
                </li>
                <li>
                    <h5 class="text-muted m-t-20">Total</h5>
                    <h4 class="m-b-0"><?php echo $data['mati_p']+$data['mati_l']; ?></h4>
                </li>
                <?php
              }; ?>
            </ul>
          </div>
    </div>

    </div>

    <div class="col-md-3">
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Pindah<br>Masuk</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
              <ul class="list-inline m-t-15">
                <li>
                      <h5 class="text-muted m-t-20">Laki-laki</h5>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahmasuk_l) as pindahmasuk_l, SUM(dg.pindahmasuk_p) as pindahmasuk_p, SUM(dg.pindahmasuk_l)+SUM(dg.pindahmasuk_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");

                  while($data  = mysql_fetch_array($query))
                  {
                   ?>

                  <h4 class="m-b-0"><?php echo $data['pindahmasuk_l'];?></h4>
                  <?php
                } ?>
                </li>
                <li>
                    <h5 class="text-muted m-t-20">Perempuan</h5>
                  <?php
                  $id = $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahmasuk_l) as pindahmasuk_l, SUM(dg.pindahmasuk_p) as pindahmasuk_p, SUM(dg.pindahmasuk_l)+SUM(dg.pindahmasuk_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>
                    <h4 class="m-b-0"><?php echo $data['pindahmasuk_p']; ?></h4>
                  <?php
                  }
                   ?>
                </li>
                <li>
                    <h5 class="text-muted m-t-20">Total</h5>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahmasuk_l) as pindahmasuk_l, SUM(dg.pindahmasuk_p) as pindahmasuk_p, SUM(dg.pindahmasuk_l)+SUM(dg.pindahmasuk_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>
                    <h4 class="m-b-0"><?php echo $data['total']; ?></h4>
                    <?php
                  }
                  ?>
                </li>
              </ul>
            </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Pindah<br>Keluar</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
              <ul class="list-inline m-t-15">
                <li>
                  <h5 class="text-muted m-t-20">Laki-laki</h5>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahkeluar_l) as pindahkeluar_l, SUM(dg.pindahkeluar_p) as pindahkeluar_p, SUM(dg.pindahkeluar_l)+SUM(dg.pindahkeluar_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");

                  while($data  = mysql_fetch_array($query))
                  {
                   ?>

                  <h4 class="m-b-0"><?php echo $data['pindahkeluar_l']; ?></h4>
                  <?php
                } ?>
                </li>
                <li>
                    <h5 class="text-muted m-t-20">Perempuan</h5>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahkeluar_l) as pindahkeluar_l, SUM(dg.pindahkeluar_p) as pindahkeluar_p, SUM(dg.pindahkeluar_l)+SUM(dg.pindahkeluar_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>

                    <h4 class="m-b-0"><?php echo $data['pindahkeluar_p']; ?></h4>
                    <?php
                  }?>

                </li>
                <li>
                    <h5 class="text-muted m-t-20">Total</h5>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.pindahkeluar_l) as pindahkeluar_l, SUM(dg.pindahkeluar_p) as pindahkeluar_p, SUM(dg.pindahkeluar_l)+SUM(dg.pindahkeluar_p) as total
                                        FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");
                  while($data = mysql_fetch_array($query))
                  {
                  ?>

                  <h4 class="m-b-0"><?php echo $data['total'];?></h4>
                  <?php
                }?>
                </li>
              </ul>
            </div>
      </div>
    </div>
</div>
<!-- end row -->

<div class="row" style="">
    <div class="col-md-2">
    <div class="card-box">
      <h4 class="text-dark header-title m-t-0 m-b-30">Kawin</h4>

      <div class="widget-chart text-center">
                <div id="sparkline3"></div>
                <ul class="list-inline m-t-15">

                    <?php
                    $id= $_GET['id'];
                    $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.kawin_p) as kawin_p, SUM(dg.kawin_l) as kawin_l, SUM(dg.kawin_p)+SUM(dg.kawin_l) as total
                                          FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                          WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                          	(
                                              SELECT MAX(dg.tglupdate)
                                                  FROM kelurahan kl
                                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                                  JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                  WHERE mk.id = '".$id."'
                                              ) GROUP BY mk.id");

                    while($data = mysql_fetch_array($query))
                    {
                    ?>
                    <li style="width:100%">
                        <h5 class="text-muted m-t-20"  style="display:list-item;float:left;">Laki-laki</h5>
                          <h4 class="m-b-0"><?php echo $data['kawin_l'];?></h4>
                    </li>
                    <li style="width:100%">
                        <h5 class="text-muted m-t-20"  style="float:left;" >Perempuan</h5>
                        <h4 class="m-b-0"><?php echo $data['kawin_p'];?></h4>
                    </li>
                    <?php
                  } ?>
                </ul>
          </div>
    </div>

    </div>

    <div class="col-md-2">
    <div class="card-box">
      <h4 class="text-dark  header-title m-t-0 m-b-30">Belum Kawin</h4>

      <div class="widget-chart text-center">
                <div id="sparkline2"></div>
            <ul class="list-inline m-t-15">

                <?php
                $id= $_GET['id'];
                $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.belumkawin_p) as belumkawin_p, SUM(dg.belumkawin_l) as belumkawin_l,
                                      SUM(dg.belumkawin_p)+SUM(dg.belumkawin_l) as total FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id
                                      JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                      	(
                                          SELECT MAX(dg.tglupdate)
                                              FROM kelurahan kl
                                              JOIN markers mk ON kl.id_kecamatan = mk.id
                                              JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                              WHERE mk.id = '".$id."'
                                          ) GROUP BY mk.id");

                while($data = mysql_fetch_array($query))
                {
                ?>
                <li style="width:100%">
                    <h5 class="text-muted m-t-20"  style="display:list-item;float:left;">Laki-laki</h5>
                      <h4 class="m-b-0"><?php echo $data['belumkawin_l'];?></h4>
                </li>
                <li style="width:100%">
                    <h5 class="text-muted m-t-20"  style="float:left;" >Perempuan</h5>
                    <h4 class="m-b-0"><?php echo $data['belumkawin_p'];?></h4>
                </li>
                <?php
              } ?>
            </ul>
          </div>
    </div>

    </div>

    <div class="col-md-2">
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Cerai Mati</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
              <ul class="list-inline m-t-15">

                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.ceraimati_p) as ceraimati_p, SUM(dg.ceraimati_l) as ceraimati_l, SUM(dg.ceraimati_p)+SUM(dg.ceraimati_l) as total FROM kelurahan kl
                                        JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                        WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                        	(
                                            SELECT MAX(dg.tglupdate)
                                                FROM kelurahan kl
                                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                                JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                WHERE mk.id = '".$id."'
                                            ) GROUP BY mk.id");

                  while($data  = mysql_fetch_array($query))
                  {
                   ?>
                   <li style="width:100%">
                         <h5 class="text-muted m-t-20" style="display:list-item;float:left;">Laki-laki</h5>
                  <h4 class="m-b-0"><?php echo $data['ceraimati_l'];?></h4>
                </li>
                  <li style="width:100%">
                      <h5 class="text-muted m-t-20" style="float:left;">Perempuan</h5>
                        <h4 class="m-b-0"><?php echo $data['ceraimati_p']; ?></h4>
                  </li>
                  <?php
                } ?>

                </li>
              </ul>
            </div>
      </div>
    </div>

    <div class="col-md-2" >
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Cerai Hidup</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
                  <ul class="list-inline m-t-15">

                      <?php
                      $id= $_GET['id'];
                      $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.ceraihidup_p) as ceraihidup_p, SUM(dg.ceraihidup_l) as ceraihidup_l,
                                            SUM(dg.ceraihidup_p)+SUM(dg.ceraihidup_l) as total FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                            WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                            	(
                                                SELECT MAX(dg.tglupdate)
                                                    FROM kelurahan kl
                                                    JOIN markers mk ON kl.id_kecamatan = mk.id
                                                    JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                    WHERE mk.id = '".$id."'
                                                ) GROUP BY mk.id");

                      while($data = mysql_fetch_array($query))
                      {
                      ?>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="display:list-item;float:left;">Laki-laki</h5>
                            <h4 class="m-b-0"><?php echo $data['ceraihidup_l'];?></h4>
                      </li>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="float:left;" >Perempuan</h5>
                          <h4 class="m-b-0"><?php echo $data['ceraihidup_p'];?></h4>
                      </li>
                      <?php
                    } ?>
                  </ul>
            </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Lainnya</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
                  <ul class="list-inline m-t-15">

                      <?php
                      $id= $_GET['id'];
                      $query = mysql_query("SELECT mk.name as kecamatan, SUM(dg.lainnya_l) as lainnya_l, SUM(dg.lainnya_p) as lainnya_p,
                                            SUM(dg.lainnya_l)+SUM(dg.lainnya_p) as total FROM kelurahan kl JOIN markers mk ON kl.id_kecamatan = mk.id JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                            WHERE mk.id = '".$id."'  AND dg.tglupdate =
                                            	(
                                                SELECT MAX(dg.tglupdate)
                                                    FROM kelurahan kl
                                                    JOIN markers mk ON kl.id_kecamatan = mk.id
                                                    JOIN demografi dg ON dg.id_kelurahan = kl.id_kelurahan
                                                    WHERE mk.id = '".$id."'
                                                ) GROUP BY mk.id");

                      while($data = mysql_fetch_array($query))
                      {
                      ?>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="display:list-item;float:left;">Laki-laki</h5>
                            <h4 class="m-b-0"><?php echo $data['lainnya_l'];?></h4>
                      </li>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="float:left;" >Perempuan</h5>
                          <h4 class="m-b-0"><?php echo $data['lainnya_p'];?></h4>
                      </li>
                      <?php
                    } ?>
                  </ul>
            </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="card-box">
        <h4 class="text-dark  header-title m-t-0 m-b-30">Warganegara</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
                  <ul class="list-inline m-t-15">

                      <?php
                      $id= $_GET['id'];
                      $query = mysql_query("SELECT SUM(kw.wni_l) as wni_l, SUM(kw.wna_l) as wna_l, SUM(kw.wni_p) as wni_p, SUM(kw.wna_p) as wna_p
                                          FROM kewarganegaraan kw
                                          JOIN kelurahan kl ON kw.id_kelurahan = kl.id_kelurahan
                                          JOIN markers mk ON kl.id_kecamatan = mk.id
                                          WHERE mk.id = '".$id."' AND tglupdate =
                                          	(
                                                  SELECT MAX(kw.tglupdate)
                                                  FROM kewarganegaraan kw
                                                  JOIN kelurahan kl ON kw.id_kelurahan = kl.id_kelurahan
                                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                                  WHERE mk.id = '".$id."'
                                              )
                                          GROUP BY mk.id");

                      while($data = mysql_fetch_array($query))
                      {
                      ?>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="display:list-item;float:left;">WNI</h5>
                            <h4 class="m-b-0"><span class="fa fa-male"></span>&nbsp;<?php echo $data['wni_l'];?><br><span class="fa fa-female"></span>&nbsp;<?php echo $data['wni_p'];?></h4>
                      </li>
                      <li style="width:100%">
                          <h5 class="text-muted m-t-20"  style="float:left;" >WNA</h5>
                          <h4 class="m-b-0"><span class="fa fa-male"></span>&nbsp;<?php echo $data['wna_l'];?>&nbsp;<span class="fa fa-female"></span>&nbsp;<?php echo $data['wna_p'];?></h4>
                      </li>
                      <?php
                    } ?>
                  </ul>
            </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0">Perkembangan Penduduk Berdasarkan Jenis Kelamin</h4>
            <div class="text-center">
                <ul class="list-inline chart-detail-list">
                  <li>
                      <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Laki-laki</h5>
                  </li>
                  <li>
                      <h5><i class="fa fa-circle m-r-5" style="color: #fb6d9d;"></i>Perempuan</h5>
                  </li>
                </ul>
            </div>
            <div id="morris-bar-stacked" style="height: 303px;"></div>
        </div>
    </div>
</div>

<!-- end row -->
<div class="row">
  <div class="col-lg-6">
    <div class="card-box">
      <h4 class="m-t-0 header-title"><b>Jumlah Penduduk Berdasarkan Tahun</b></h4>
      <div class="text-center">
        <ul class="list-inline chart-detail-list">
          <li>
              <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Laki-laki</h5>
          </li>
          <li>
              <h5><i class="fa fa-circle m-r-5" style="color: #fb6d9d;"></i>Perempuan</h5>
          </li>
        </ul>
      </div>
      <div id="line-chart-tooltip" class="ct-chart ct-golden-section"></div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card-box">
      <h4 class="m-t-0 header-title"><b>Jumlah Penduduk Berdasarkan Bulan Tahun Ini</b></h4>
      <div class="text-center">
        <ul class="list-inline chart-detail-list">
          <li>
              <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Laki-laki</h5>
          </li>
          <li>
              <h5><i class="fa fa-circle m-r-5" style="color: #fb6d9d;"></i>Perempuan</h5>
          </li>
          <li>
              <h5><i class="fa fa-circle m-r-5" style="color: #34d3eb;"></i>Total</h5>
          </li>
        </ul>
      </div>
      <div id="svg-animation" class="ct-chart ct-golden-section"></div>
    </div>
  </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="text-primary"><img src="../../assets/images/logo/sd1.png" style="width:64px"></img></i>
            <?php
            $id=$_GET['id'];
            $query= mysql_query("SELECT mk.name as kecamatan,
                              SUM(pd.sd) as sd,
                              SUM(pd.smp) as smp,
                              SUM(pd.sma) as sma,
                              SUM(pd.perguruantinggi) as pt
                              FROM pendidikan pd
                              JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                              JOIN markers mk ON mk.id = kl.id_kecamatan
                              WHERE mk.id = '".$id."' AND pd.tglupdate =
                                  (
                                      SELECT MAX(pd.tglupdate)
                                      FROM pendidikan pd
                                      JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                                      JOIN markers mk ON mk.id = kl.id_kecamatan
                                      WHERE mk.id = '".$id."'
                                  )
                              GROUP BY mk.id");
            while($data = mysql_fetch_array($query))
            {
            ?>
            <h2 class="m-0 text-dark counter font-600"><?php echo $data['sd']; ?></h2>
            <?php
            }
             ?>
             <div class="text-muted m-t-5">SD</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="text-pink"><img src="../../assets/images/logo/smp1.png" style="width:64px"></img></i>
            <?php
            $id= $_GET['id'];
            $query = mysql_query("SELECT mk.name as kecamatan,
                              SUM(pd.sd) as sd,
                              SUM(pd.smp) as smp,
                              SUM(pd.sma) as sma,
                              SUM(pd.perguruantinggi) as pt
                              FROM pendidikan pd
                              JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                              JOIN markers mk ON mk.id = kl.id_kecamatan
                              WHERE mk.id = '".$id."' AND pd.tglupdate =
                                  (
                                      SELECT MAX(pd.tglupdate)
                                      FROM pendidikan pd
                                      JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                                      JOIN markers mk ON mk.id = kl.id_kecamatan
                                      WHERE mk.id = '".$id."'
                                  )
                              GROUP BY mk.id");
            while($data = mysql_fetch_array($query))
            {
            ?>
            <h2 class="m-0 text-dark counter font-600"><?php echo $data['smp'];?></h2>
            <?php
            }
            ?>
              <div class="text-muted m-t-5">SMP</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="text-info"><img src="../../assets/images/logo/sma1.png" style="width:64px"></img></i>
            <?php
            $id=$_GET['id'];
            $query = mysql_query("SELECT mk.name as kecamatan,
                              SUM(pd.sd) as sd,
                              SUM(pd.smp) as smp,
                              SUM(pd.sma) as sma,
                              SUM(pd.perguruantinggi) as pt
                              FROM pendidikan pd
                              JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                              JOIN markers mk ON mk.id = kl.id_kecamatan
                              WHERE mk.id = '".$id."' AND pd.tglupdate =
                                  (
                                      SELECT MAX(pd.tglupdate)
                                      FROM pendidikan pd
                                      JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                                      JOIN markers mk ON mk.id = kl.id_kecamatan
                                      WHERE mk.id = '".$id."'
                                  )
                              GROUP BY mk.id");
            while($data  = mysql_fetch_array($query))
            {
              ?>
                <h2 class="m-0 text-dark counter font-600"><?php echo $data['sma']; ?></h2>
              <?php
            }
            ?>
            <div class="text-muted m-t-5">SMA</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="text-custom"><img src="../../assets/images/logo/ptn1.png" style="width:64px"></i>
            <?php
            $id=$_GET['id'];
            $query = mysql_query("SELECT mk.name as kecamatan,
                              SUM(pd.sd) as sd,
                              SUM(pd.smp) as smp,
                              SUM(pd.sma) as sma,
                              SUM(pd.perguruantinggi) as pt
                              FROM pendidikan pd
                              JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                              JOIN markers mk ON mk.id = kl.id_kecamatan
                              WHERE mk.id = '".$id."' AND pd.tglupdate =
                                  (
                                      SELECT MAX(pd.tglupdate)
                                      FROM pendidikan pd
                                      JOIN kelurahan kl ON pd.id_kelurahan = kl.id_kelurahan
                                      JOIN markers mk ON mk.id = kl.id_kecamatan
                                      WHERE mk.id = '".$id."'
                                  )
                              GROUP BY mk.id");
            while($data = mysql_fetch_array($query))
            {
              ?>
              <h2 class="m-0 text-dark counter font-600"><?php echo $data['pt']; ?></h2>
              <?php
            }
            ?>
            <div class="text-muted m-t-5">PTN/PTS</div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 m-b-20 header-title"><b>Jumlah Penduduk Berdasarkan Usia (Dalam Ribu) </b></h4>
      <div class="multi-chart">
          <svg style="height:500px;width:100%"></svg>
      </div>
    </div>
  </div>
</div>
<!-- end row -->

<!-- <div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-info">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                       <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                       <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-custom">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                       <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                       <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-danger">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                       <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                       <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Pegawai Negeri Sipil</h4>
                <h2 class="text-primary text-center"><span data-plugin="counterup">5623</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>725</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Swasta</h4>
                <h2 class="text-pink text-center"><span data-plugin="counterup">185</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>785</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Lain-lain</h4>
                <h2 class="text-success text-center"><span data-plugin="counterup">9562</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>1025</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Tidak Bekerja</h4>
                <h2 class="text-warning text-center"><span data-plugin="counterup">874</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>234</span></p>
            </div>
        </div>
    </div> -->


    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Jenis Pekerjaan (Dalam Ribuan)</b></h4>
            <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
        </div>
      </div>
    </div>
    <!-- end row -->


    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>PEMELUK AGAMA</b></h4>

          <div id="pie-chart" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
          <div class="text-center">
              <ul class="list-inline chart-detail-list" style="overflow-y:auto !important;width:380px!important;display:block!important;padding:8px;text-align:left;">
                <table>
                  <tr>
                    <td>
                      <?php
                      $id = $_GET['id'];
                      $query = mysql_query("SELECT SUM(ag.islam_l) + SUM(ag.islam_p) as islam,
                                          SUM(ag.katolik_l) + SUM(ag.katolik_p) as katolik,
                                          SUM(ag.kristen_l) + SUM(ag.kristen_p) as kristen,
                                          SUM(ag.hindu_l) + SUM(ag.hindu_p) as hindu,
                                          SUM(ag.konghucu_l) + SUM(ag.konghucu_p) as konghucu,
                                          SUM(ag.budha_l) + SUM(ag.budha_p) as budha,
                                          SUM(ag.kepercayaan_l) + SUM(ag.kepercayaan_p) as kepercayaan
                                          FROM agama ag
                                          JOIN kelurahan kl ON ag.id_kelurahan = kl.id_kelurahan
                                          JOIN markers mk ON kl.id_kecamatan = mk.id
                                          WHERE mk.id = '".$id."' AND ag.tglupdate =
                                          	(
                                              	SELECT MAX(ag.tglupdate)
                                                  FROM agama ag
                                                  JOIN kelurahan kl ON ag.id_kelurahan = kl.id_kelurahan
                                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                                  WHERE mk.id = '".$id."'

                                              )
                                          GROUP BY mk.id");
                      while($data = mysql_fetch_array($query))
                      {
                        $semuadata = $data['islam']+$data['katolik']+$data['kristen']+$data['hindu']+$data['budha']+$data['konghucu']+$data['kepercayaan'];
                         ?>
                         <li><h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Islam - <?php echo $data['islam']." jiwa / ".round($data['islam']/$semuadata*100, 3)?>%</h5></li>
                         <li><h5><i class="fa fa-circle m-r-5" style="color: #fb6d9d;"></i>Katholik - <?php echo $data['katolik']." jiwa / ".round($data['katolik']/$semuadata*100, 3)?>%</h5></li>
                           <li><h5><i class="fa fa-circle m-r-5" style="color: #34d3eb;"></i>Kristen - <?php echo $data['kristen']." jiwa / ".round($data['kristen']/$semuadata*100, 3)?>%</h5></li>
                           <li><h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Hindu - <?php echo $data['hindu']." jiwa / ".round($data['hindu']/$semuadata*100, 3)?>%</h5></li>
                             <li><h5><i class="fa fa-circle m-r-5" style="color: #453d3f;"></i>Budha - <?php echo $data['budha']." jiwa / ".round($data['budha']/$semuadata*100, 3)?>%</h5></li>
                             <li><h5><i class="fa fa-circle m-r-5" style="color: #59922b;"></i>Konghucu - <?php echo $data['konghucu']." jiwa / ".round($data['konghucu']/$semuadata*100, 3)?>%</h5></li>
                               <li><h5><i class="fa fa-circle m-r-5" style="color: #0544d3;"></i>Kepercayaan - <?php echo $data['kepercayaan']." jiwa / ".round($data['kepercayaan']/$semuadata*100, 3)?>%</h5></li>
                         <?php
                      };
                      ?>
                    </td>
                  </tr>
                </table>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->
