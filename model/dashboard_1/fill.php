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
    <div class="col-sm-1 col-sm-offset-1">
      <img style="border:solid #797979 3px" class="img-rounded" src="../../assets/images/users/avatar-11.jpg" width="100%"/>
    </div>
    <div class="col-sm-9">
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
    <div class="col-md-6 col-lg-4">
        <div class="widget-bg-color-icon card-box fadeInDown animated">
            <div class="bg-icon bg-icon-info pull-left">
                <i class="md md-attach-money text-info"></i>
            </div>
            <div class="text-right">
                <!-- <h3 class="text-dark"><b class="counter">Gatau Rumusnya</b></h3> -->
                <?php
                  $id = $_GET['id'];
                  $query = mysql_query("SELECT SUM(usia_0_5_l+usia_18_25_l+usia_6_9_l+usia_26_40_l+usia_10_16_l+usia_41_59_l+usia_17_l+usia_60_l ) AS totalpria, SUM(usia_0_5_p+usia_18_25_p+usia_6_9_p+usia_26_40_p+usia_10_16_p+usia_41_59_p+usia_17_p+usia_60_P) as totalperempuan  FROM usia where id_kelurahan = '".$id."' AND id_usia='".$id."'");
                  $no = 1;
                  while ($data = mysql_fetch_array($query)) {
                  ?>
                      <h3 class="text-dark"><b class="counter"> <?php echo ($data['totalpria']/$data['totalperempuan'])*100;?></b>
                      <span>%</span>

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
                <i class="md md-add-shopping-cart text-pink"></i>
            </div>
            <div class="text-right">
              <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT SUM(ktp_l) AS total_l, SUM(ktp_p) AS total_p FROM `dokumen` where id_kelurahan = '".$id."' ");
                $no = 1;
                while ($data = mysql_fetch_array($query)) {
                ?>
                    <h3 class="text-dark"><b class="counter"> <?php echo $data['total_l']+$data['total_p'];?></b></h3>
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
                <i class="md md-equalizer text-purple"></i>
            </div>
            <div class="text-right">
              <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT SUM(kk) AS total FROM `dokumen` where id_kelurahan = '".$id."'");
                $no = 1;
                while ($data = mysql_fetch_array($query)) {
                ?>
                    <h3 class="text-dark"><b class="counter"> <?php echo $data['total'];?></b></h3>
                <?php
                    $no++;
                }
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
      <h4 class="text-dark header-title m-t-0 m-b-30">Akta Kelahiran</h4>

      <div class="widget-chart text-center">
                <div id="sparkline3"></div>
            <ul class="list-inline m-t-15">
              <li>
                <h5 class="text-muted m-t-20">Laki-laki</h5>
                <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT distinct(lahir_l)  FROM dokumen where id_kelurahan = '".$id."'");

                while ($data = mysql_fetch_array($query)) {
                ?>
                    <h4 class="m-b-0"><?php echo $data['lahir_l'];?></h4>

                <?php
               }
              ?>

              </li>
              <li>
                <h5 class="text-muted m-t-20">Perempuan</h5>
                <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT distinct(lahir_p)  FROM dokumen where id_kelurahan = '".$id."'");

                    while ($data = mysql_fetch_array($query)) {
                ?>
                <h4 class="m-b-0"><?php echo $data['lahir_p'];?></h4>
                <?php
              }
              ?>
              </li>
              <li>
                <?php
                $id = $_GET['id'];
                $query = mysql_query("SELECT distinct(lahir_p), (lahir_l)  FROM dokumen where id_kelurahan = '".$id."'");

                while($data= mysql_fetch_array($query))
                {
                ?>
                <h5 class="text-muted m-t-20">Total</h5>
                <h4 class="m-b-0"><?php echo $data['lahir_p']+$data['lahir_l'];?></h4>
                <?php
              }?>


              </li>
            </ul>
          </div>
    </div>

    </div>

    <div class="col-md-3">
    <div class="card-box">
      <h4 class="text-dark  header-title m-t-0 m-b-30">Akta Kematian</h4>

      <div class="widget-chart text-center">
                <div id="sparkline2"></div>
            <ul class="list-inline m-t-15">
              <li>
                <?php
                $id= $_GET['id'];
                $query = mysql_query("SELECT distinct(mati_l) FROM dokumen where id_kelurahan = '".$id."'");

                while($data = mysql_fetch_array($query))
                {
                ?>
                <h5 class="text-muted m-t-20">Laki-laki</h5>
                <h4 class="m-b-0"><?php echo $data['mati_l'];?></h4>
                <?php
              } ?>
              </li>
              <li>
                <?php
                $id= $_GET['id'];
                $query = mysql_query("SELECT distinct(mati_p) FROM dokumen where id_kelurahan = '".$id."'");

                while($data = mysql_fetch_array($query))
                {
                  ?>

                <h5 class="text-muted m-t-20">Perempuan</h5>
                <h4 class="m-b-0"><?php echo $data['mati_p']; ?></h4>
                <?php
              }?>
              </li>
              <li>
                <?php
                $id= $_GET['id'];
                $query = mysql_query("SELECT distinct(mati_p),(mati_l) FROM dokumen where id_kelurahan = '".$id."'");

                while($data = mysql_fetch_array($query))
                {
                  ?>
                <h5 class="text-muted m-t-20">Total</h5>
                <h4 class="m-b-0"><?php echo $data['mati_p']+$data['mati_l']; ?></h4>
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
        <h4 class="text-dark  header-title m-t-0 m-b-30">Akta Pernikahan</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
              <ul class="list-inline m-t-15">
                <li>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT distinct(nikah_l) FROM dokumen where id_kelurahan = '".$id."'");

                  while($data  = mysql_fetch_array($query))
                  {
                   ?>
                  <h5 class="text-muted m-t-20">Laki-laki</h5>
                  <h4 class="m-b-0"><?php echo $data['nikah_l'];?></h4>
                  <?php
                } ?>
                </li>
                <li>
                  <?php
                  $id = $_GET['id'];
                  $query = mysql_query("SELECT distinct(nikah_p) from dokumen where id_kelurahan = '" .$id."'");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>
                    <h5 class="text-muted m-t-20">Perempuan</h5>
                    <h4 class="m-b-0"><?php echo $data['nikah_p']; ?></h4>
                  <?php
                  }
                   ?>
                </li>
                <li>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT distinct(nikah_p),(nikah_l) from dokumen where id_kelurahan= '".$id."'");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>
                    <h5 class="text-muted m-t-20">Total</h5>
                    <h4 class="m-b-0"><?php echo $data['nikah_p']+$data['nikah_l']; ?></h4>
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
        <h4 class="text-dark  header-title m-t-0 m-b-30">Akta Perceraian</h4>

        <div class="widget-chart text-center">
                  <div id="sparkline2"></div>
              <ul class="list-inline m-t-15">
                <li>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT distinct(cerai_l) FROM dokumen where id_kelurahan = '".$id."'");

                  while($data  = mysql_fetch_array($query))
                  {
                   ?>
                  <h5 class="text-muted m-t-20">Laki-laki</h5>
                  <h4 class="m-b-0"><?php echo $data['cerai_l']; ?></h4>
                  <?php
                } ?>
                </li>
                <li>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT distinct(cerai_p) FROM dokumen where id_kelurahan = '".$id."'");
                  while($data = mysql_fetch_array($query))
                  {
                    ?>
                    <h5 class="text-muted m-t-20">Perempuan</h5>
                    <h4 class="m-b-0"><?php echo $data['cerai_p']; ?></h4>
                    <?php
                  }?>

                </li>
                <li>
                  <?php
                  $id= $_GET['id'];
                  $query = mysql_query("SELECT distinct(cerai_p),(cerai_l) FROM dokumen where id_kelurahan = '".$id."'");
                  while($data = mysql_fetch_array($query))
                  {
                  ?>
                  <h5 class="text-muted m-t-20">Total</h5>
                  <h4 class="m-b-0"><?php echo $data['cerai_p']+$data['cerai_l'];?></h4>
                  <?php
                }?>
                </li>
              </ul>
            </div>
      </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-3">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Total WNI</h4>

            <div class="widget-chart text-center">
                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                <h5 class="text-muted m-t-20">Total WNI Perhari Ini</h5>
                <h2 class="font-600">75323 Jiwa</h2>
                <ul class="list-inline m-t-15">
                    <li>
                        <h5 class="text-muted m-t-20">Th Lalu</h5>
                        <h4 class="m-b-0">13020</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Naik</h5>
                        <h4 class="m-b-0">6%</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Total WNA</h4>

            <div class="widget-chart text-center">
                <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                <h5 class="text-muted m-t-20">Total WNA Perhari Ini</h5>
                <h2 class="font-600">75224 Jiwa</h2>
                <ul class="list-inline m-t-15">
                    <li>
                        <h5 class="text-muted m-t-20">Target</h5>
                        <h4 class="m-b-0">72079</h4>
                    </li>
                    <li>
                        <h5 class="text-muted m-t-20">Naik</h5>
                        <h4 class="m-b-0">5%</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0">Perkembangan Penduduk Berdasarkan Usia</h4>
            <div class="text-center">
                <ul class="list-inline chart-detail-list">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Anak-anak</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Dewasa</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Lansia</h5>
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
      <p class="text-muted m-b-30 font-13">
        Example of Horizontal bar chart.
      </p>

      <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card-box">
      <h4 class="m-t-0 header-title"><b>Jumlah Penduduk Berdasarkan Bulan Tahun Ini</b></h4>
      <p class="text-muted m-b-30 font-13">
        Example of Horizontal bar chart.
      </p>

      <div id="svg-animation" class="ct-chart ct-golden-section"></div>
    </div>
  </div>
</div>
<!-- end row -->

<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 m-b-20 header-title"><b>Berdasarkan Pendidikan 7 Tahun Keatas</b></h4>
      <div class="line-chart">
          <svg style="height:400px;width:100%"></svg>
      </div>
    </div>
  </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-attach-money text-primary"></i>
            <h2 class="m-0 text-dark counter font-600">50568</h2>
            <div class="text-muted m-t-5">SD</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-add-shopping-cart text-pink"></i>
            <h2 class="m-0 text-dark counter font-600">1256</h2>
            <div class="text-muted m-t-5">SMP</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-store-mall-directory text-info"></i>
            <h2 class="m-0 text-dark counter font-600">18</h2>
            <div class="text-muted m-t-5">SMA</div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="widget-panel widget-style-2 bg-white">
            <i class="md md-account-child text-custom"></i>
            <h2 class="m-0 text-dark counter font-600">8564</h2>
            <div class="text-muted m-t-5">PTN/PTS</div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-t-0 m-b-20 header-title"><b>Kelompok Usia Produktif</b></h4>
      <div class="multi-chart">
          <svg style="height:500px;width:100%"></svg>
      </div>
    </div>
  </div>
</div>
<!-- end row -->

<div class="row">
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
</div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Pegawai Negeri Sipil</h4>
                <h2 class="text-primary text-center">$<span data-plugin="counterup">5623</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Swasta</h4>
                <h2 class="text-pink text-center"><span data-plugin="counterup">185</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Lain-lain</h4>
                <h2 class="text-success text-center">$<span data-plugin="counterup">9562</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card-box widget-box-1 bg-white">
                <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                <h4 class="text-dark">Tidak Bekerja</h4>
                <h2 class="text-warning text-center"><span data-plugin="counterup">874</span></h2>
                <p class="text-muted"> Dari Tahun Lalu: <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
            </div>
        </div>
    </div>


    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Jenis Pekerjaan</b></h4>
          <p class="text-muted m-b-30 font-13">
            Example of Horizontal bar chart.
          </p>
          <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
        </div>
      </div>


    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Jenis Pekerjaan</b></h4>
          <p class="text-muted m-b-30 font-13">
            Example of Horizontal bar chart.
          </p>
          <div id="overlapping-bars2" class="ct-chart ct-golden-section"></div>
        </div>
      </div>
    </div>
    <!-- end row -->


    <div class="row">
      <div class="col-lg-6">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Penyandang Cacat</b></h4>
          <p class="text-muted m-b-30 font-13">
            Example of Horizontal bar chart.
          </p>
          <div id="pie-chart" class="ct-chart ct-golden-section"></div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card-box">
          <h4 class="m-t-0 header-title"><b>Golongan Darah</b></h4>
          <p class="text-muted m-b-30 font-13">
            Example of Label placement chart.
          </p>

          <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
        </div>
      </div>
    </div>
    <!-- end row -->
