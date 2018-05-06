<!-- jQuery  -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/detect.js"></script>
<script src="../../assets/js/fastclick.js"></script>

<script src="../../assets/js/jquery.slimscroll.js"></script>
<script src="../../assets/js/jquery.blockUI.js"></script>
<script src="../../assets/js/waves.js"></script>
<script src="../../assets/js/wow.min.js"></script>
<script src="../../assets/js/jquery.nicescroll.js"></script>
<script src="../../assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js">
<script src="../../assets/plugins/peity/jquery.peity.min.js"></script>

<!-- jQuery  -->
<script src="../../assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="../../assets/plugins/counterup/jquery.counterup.min.js"></script>

<script src="../../assets/plugins/morris/morris.min.js"></script>
<script src="../../assets/plugins/raphael/raphael-min.js"></script>

<script src="../../assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="../../assets/pages/jquery.dashboard.js"></script>

<script src="../../assets/js/jquery.core.js"></script>
<script src="../../assets/js/jquery.app.js"></script>

<!--Chartist Chart-->
<script src="../../assets/plugins/chartist/js/chartist.min.js"></script>
<script src="../../assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="../../assets/pages/jquery.chartist.init.js"></script>

<!--Morris Chart-->
<script src="../../assets/plugins/morris/morris.min.js"></script>
<script src="../../assets/plugins/raphael/raphael-min.js"></script>
<script src="../../assets/pages/morris.init.js"></script>

<!--Nvd3 Chart-->
<script src="../../assets/plugins/d3/d3.min.js"></script>
<script src="../../assets/plugins/nvd3/nv.d3.min.js"></script>
<script src="../../assets/pages/jquery.nvd3.init.js"></script>

<!-- Sweet-Alert  -->
<script src="../../assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="../../assets/pages/jquery.sweet-alert.init.js"></script>

<!-- Modal-Effect -->
<script src="../../assets/plugins/custombox/js/custombox.min.js"></script>
<script src="../../assets/plugins/custombox/js/legacy.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>

<!-- Tour page js -->
<script src="../../assets/plugins/hopscotch/js/hopscotch.js"></script>

<script>
    $(document).ready(function () {
        var placementRight = 'right';
        var placementLeft = 'left';

        // Define the tour!
        var tour = {
            id: "my-intro",
            steps: [
                {
                    target: "logo-tour",
                    title: "Logo Here",
                    content: "You can find here status of user who's currently online.",
                    placement: placementRight,
                    yOffset: 10
                },
                {
                    target: 'navigation-tour',
                    title: "Small navigation button",
                    content: "Click on the button and make sidebar navigation small.",
                    placement: 'bottom',
                    zindex: 999
                },
                {
                    target: 'page-title-tour',
                    title: "User settings",
                    content: "You can edit you profile info here.",
                    placement: 'bottom',
                    zindex: 999
                },
                {
                    target: 'notification-tour',
                    title: "Configuration tools",
                    content: "Here you can change theme skins and other features.",
                    placement: 'left',
                    zindex: 999
                }
            ],
            showPrevButton: true
        };

        // Start the tour!
        hopscotch.startTour(tour);
    });
</script>

<!-- DataTable -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/jszip.min.js"></script>
<script src="../../assets/plugins/datatables/pdfmake.min.js"></script>
<script src="../../assets/plugins/datatables/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script src="../../assets/pages/datatables.init.js"></script>

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
            ajax: "../../assets/plugins/datatables/json/scroller-demo.json",
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

<script type="text/javascript">
function getid(clicked_id) {
    alert(clicked_id);
    // window.location.reload();
    window.open('http://031801.webplussolution.com/view/dashboard_1/index2.php?id='+clicked_id, '_blank');
}
</script>

<!-- JENIS PEKERJAAN(DALAM RIBUAN) -->
<script type="text/javascript">
new Chartist.Bar('#stacked-bar-chart', {
  labels: [
            'belum bekerja',
            'irt',
            'pelajar',
            'pensiun',
            'pns',
            'tni',
            'polri',
            'nelayan',
            'karyawan',
            'dosen',
            'guru',
            'petani',
            'wiraswasta',
            'dokter',
            'lain-lain'
          ],
  series: [
    [
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT
                          SUM(pk.belumbekerja) as belumbekerja,
                          SUM(pk.irt) as irt,
                          SUM(pk.pelajarmahasiswa) as pelajarmahasiswa,
                          SUM(pk.pensiun) as pensiun,
                          SUM(pk.pns) as pns,
                          SUM(pk.tni) as tni,
                          SUM(pk.polri) as polri,
                          SUM(pk.nelayan) as nelayan,
                          SUM(pk.karyawanswasta) as karyawanswasta,
                          SUM(pk.dosen) as dosen,
                          SUM(pk.guru) as guru,
                          SUM(pk.petani) as petani,
                          SUM(pk.wiraswasta) as wiraswasta,
                          SUM(pk.dokter) as dokter,
                          SUM(pk.lainlain) as lainlain

                          FROM pekerjaan pk
                          JOIN kelurahan kl ON pk.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '".$id."'
                          AND pk.tglupdate =
                          	(
                                  SELECT MAX(tglupdate)
                                  FROM pekerjaan pk
                                  JOIN kelurahan kl ON pk.id_kelurahan = kl.id_kelurahan
                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                  WHERE mk.id = '".$id."'
                              ) GROUP BY mk.id ");
      while($data = mysql_fetch_array($query))
      {
        echo $data['belumbekerja'].",";
  			echo $data['irt'].",";
  			echo $data['pelajarmahasiswa'].",";
  			echo $data['pensiun'].",";
        echo $data['pns'].",";
  			echo $data['tni'].",";
        echo $data['polri'].",";
        echo $data['nelayan'].",";
        echo $data['karyawanswasta'].",";
        echo $data['dosen'].",";
        echo $data['guru'].",";
        echo $data['petani'].",";
        echo $data['wiraswasta'].",";
        echo $data['dokter'].",";
        echo $data['lainlain'];
      }
      ?>
    ]
    // [200000, 400000, 500000, 300000],
    // [160000, 290000, 410000, 600000]
  ]
}, {
  stackBars: true,
  axisY: {
    labelInterpolationFnc: function(value) {
      return (value / 1000) + 'k';
    }
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
});
</script>

<!-- JENIS PEKERJAAN - KELURAHAN (DALAM RIBUAN) -->
<script type="text/javascript">
new Chartist.Bar('#stacked-bar-chart2', {
  labels: [
            'belum bekerja',
            'irt',
            'pelajar',
            'pensiun',
            'pns',
            'tni',
            'polri',
            'nelayan',
            'karyawan',
            'dosen',
            'guru',
            'petani',
            'wiraswasta',
            'dokter',
            'lain-lain'
          ],
  series: [
    [
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT *
                          FROM pekerjaan
                          WHERE id_kelurahan = '".$id2."'
                          AND tglupdate = (SELECT MAX(tglupdate) FROM pekerjaan WHERE id_kelurahan = '".$id2."')");
      while($data = mysql_fetch_array($query))
      {
        echo $data['belumbekerja'].",";
  			echo $data['irt'].",";
  			echo $data['pelajarmahasiswa'].",";
  			echo $data['pensiun'].",";
        echo $data['pns'].",";
  			echo $data['tni'].",";
        echo $data['polri'].",";
        echo $data['nelayan'].",";
        echo $data['karyawanswasta'].",";
        echo $data['dosen'].",";
        echo $data['guru'].",";
        echo $data['petani'].",";
        echo $data['wiraswasta'].",";
        echo $data['dokter'].",";
        echo $data['lainlain'];
      }
      ?>
    ]
    // [200000, 400000, 500000, 300000],
    // [160000, 290000, 410000, 600000]
  ]
}, {
  stackBars: true,
  axisY: {
    labelInterpolationFnc: function(value) {
      return (value / 1000) + 'k';
    }
  },
  plugins: [
    Chartist.plugins.tooltip()
  ]
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
});
</script>

<!-- JUMLAH PENDUDUK BERDASARKAN USIA(DALAM RIBU) -->
<script type="text/javascript">
var long_short_data = [
  {
    'key': 'Laki-laki',
    'color': "#5d9cec",
    'values': [
      <?php
      $id = $_GET['id'];
      $query = mysql_query("SELECT
                            SUM(us.usia0_5_l) as usia0_5_l,
                            SUM(us.usia6_9_l) as usia6_9_l,
                            SUM(us.usia10_16_l) as usia10_16_l,
                            SUM(us.usia17_l) as usia17_l,
                            SUM(us.usia18_25_l) as usia18_25_l,
                            SUM(us.usia26_40_l) as usia26_40_l,
                            SUM(us.usia41_60_l) as usia41_60_l,
                            SUM(us.usia_lebih60_l) as usia_lebih60_l,

                            SUM(us.usia0_5_p) as usia0_5_p,
                            SUM(us.usia6_9_p) as usia6_9_p,
                            SUM(us.usia10_16_p) as usia10_16_p,
                            SUM(us.usia17_p) as usia17_p,
                            SUM(us.usia18_25_p) as usia18_25_p,
                            SUM(us.usia26_40_p) as usia26_40_p,
                            SUM(us.usia41_60_p) as usia41_60_p,
                            SUM(us.usia_lebih60_p) as usia_lebih60_p

                            FROM usia us
                            JOIN kelurahan kl ON us.id_kelurahan = kl.id_kelurahan
                            JOIN markers mk ON kl.id_kecamatan = mk.id
                            WHERE mk.id = '".$id."' AND us.tglupdate =
                                (
                                    SELECT MAX(us.tglupdate)
                                    FROM usia us
                                    JOIN kelurahan kl ON us.id_kelurahan = kl.id_kelurahan
                            		JOIN markers mk ON kl.id_kecamatan = mk.id
                                    WHERE mk.id = '".$id."'
                                )
                            GROUP BY mk.id");
      while($data = mysql_fetch_array($query))
      {?>
          {
              'label': '>60',
              'value': <?php echo $data['usia_lebih60_l']; ?>
          }, {
              'label': '41 - 60',
              'value': <?php echo $data['usia41_60_l']; ?>
          }, {
              'label': '26 - 40',
              'value':  <?php echo $data['usia26_40_l'];?>
          }, {
              'label': '18 - 25',
              'value':  <?php echo $data['usia18_25_l'];?>
          }, {
              'label': '17',
              'value':  <?php echo $data['usia17_l'];?>
          }, {
              'label': '10 - 16',
              'value': <?php echo $data['usia10_16_l'];?>

          }, {
              'label': '6 - 9',
              'value': <?php echo $data['usia6_9_l']; ?>
          }, {
              'label': '0 - 5',
              'value': <?php echo $data['usia0_5_l']; ?>
          }
    <?php
     }?>]
},
{
    'key': 'Perempuan',
    'color': "#34d3eb",
    'values': [
      <?php
      $id = $_GET['id'];
      $query = mysql_query("SELECT
                            SUM(us.usia0_5_l) as usia0_5_l,
                            SUM(us.usia6_9_l) as usia6_9_l,
                            SUM(us.usia10_16_l) as usia10_16_l,
                            SUM(us.usia17_l) as usia17_l,
                            SUM(us.usia18_25_l) as usia18_25_l,
                            SUM(us.usia26_40_l) as usia26_40_l,
                            SUM(us.usia41_60_l) as usia41_60_l,
                            SUM(us.usia_lebih60_l) as usia_lebih60_l,

                            SUM(us.usia0_5_p) as usia0_5_p,
                            SUM(us.usia6_9_p) as usia6_9_p,
                            SUM(us.usia10_16_p) as usia10_16_p,
                            SUM(us.usia17_p) as usia17_p,
                            SUM(us.usia18_25_p) as usia18_25_p,
                            SUM(us.usia26_40_p) as usia26_40_p,
                            SUM(us.usia41_60_p) as usia41_60_p,
                            SUM(us.usia_lebih60_p) as usia_lebih60_p

                            FROM usia us
                            JOIN kelurahan kl ON us.id_kelurahan = kl.id_kelurahan
                            JOIN markers mk ON kl.id_kecamatan = mk.id
                            WHERE mk.id = '".$id."' AND us.tglupdate =
                                (
                                    SELECT MAX(us.tglupdate)
                                    FROM usia us
                                    JOIN kelurahan kl ON us.id_kelurahan = kl.id_kelurahan
                            		JOIN markers mk ON kl.id_kecamatan = mk.id
                                    WHERE mk.id = '".$id."'
                                )
                            GROUP BY mk.id");
      while($data = mysql_fetch_array($query))
      {?>
      {
        'label': '>60',
        'value': <?php echo $data['usia_lebih60_p']; ?>
    }, {
        'label': '41 - 60',
        'value': <?php echo $data['usia41_60_p']; ?>
    }, {
        'label': '26 - 40',
        'value':<?php echo $data['usia26_40_p'];?>
    }, {
        'label': '18 - 25',
        'value': <?php echo $data['usia18_25_p'];?>
    }, {
        'label': '17',
        'value': <?php echo $data['usia17_p'];?>
    }, {
        'label': '10 - 16',
        'value':  <?php echo $data['usia10_16_p'];?>
    }, {
        'label': '6 - 9',
        'value': <?php echo $data['usia6_9_p']; ?>
    }, {
        'label': '0 - 5',
        'value':<?php echo $data['usia0_5_p']; ?>
    }]
    <?php
    }?>
 }];
var multiChart;
nv.addGraph(function() {
    multiChart = nv.models.multiBarHorizontalChart().x(function(d) {
        return d.label;
    }).y(function(d) {
        return d.value;
    }).duration(250);
    multiChart.yAxis.tickFormat(d3.format(',.2f'));
    d3.select('.multi-chart svg').datum(long_short_data).call(multiChart);
    nv.utils.windowResize(multiChart.update);
    return multiChart;
});
</script>

<!-- JUMLAH PENDUDUK BERDASARKAN USIA - KELURAHAN (DALAM RIBU) -->
<script type="text/javascript">
var long_short_data = [
  {
    'key': 'Laki-laki',
    'color': "#5d9cec",
    'values': [
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      // $query = mysql_query("SELECT * FROM usia  join markers mk on usia.id_kelurahan = mk.id WHERE mk.id = '".$id."' and  MONTH(tglupdate) = MONTH(CURRENT_TIMESTAMP) -1 GROUP BY mk.id");
      $query = mysql_query("SELECT * FROM usia
                        WHERE id_kelurahan = '".$id2."'
                        AND tglupdate = (SELECT MAX(tglupdate) FROM usia WHERE id_kelurahan = '".$id2."')
                        GROUP BY id_kelurahan");
      while($data = mysql_fetch_array($query))
      {?>
          {
              'label': '>60',
              'value': <?php echo $data['usia_lebih60_l']; ?>
          }, {
              'label': '41 - 60',
              'value': <?php echo $data['usia41_60_l']; ?>
          }, {
              'label': '26 - 40',
              'value':  <?php echo $data['usia26_40_l'];?>
          }, {
              'label': '18 - 25',
              'value':  <?php echo $data['usia18_25_l'];?>
          }, {
              'label': '17',
              'value':  <?php echo $data['usia17_l'];?>
          }, {
              'label': '10 - 16',
              'value': <?php echo $data['usia10_16_l'];?>

          }, {
              'label': '6 - 9',
              'value': <?php echo $data['usia6_9_l']; ?>
          }, {
              'label': '0 - 5',
              'value': <?php echo $data['usia0_5_l']; ?>
          }
    <?php
     }?>]
},
{
    'key': 'Perempuan',
    'color': "#34d3eb",
    'values': [
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT * FROM usia
                        WHERE id_kelurahan = '".$id2."'
                        AND tglupdate = (SELECT MAX(tglupdate) FROM usia WHERE id_kelurahan = '".$id2."')
                        GROUP BY id_kelurahan");
      while($data = mysql_fetch_array($query))
      {?>
      {
        'label': '>60',
        'value': <?php echo $data['usia_lebih60_p']; ?>
    }, {
        'label': '41 - 60',
        'value': <?php echo $data['usia41_60_p']; ?>
    }, {
        'label': '26 - 40',
        'value':<?php echo $data['usia26_40_p'];?>
    }, {
        'label': '18 - 25',
        'value': <?php echo $data['usia18_25_p'];?>
    }, {
        'label': '17',
        'value': <?php echo $data['usia17_p'];?>
    }, {
        'label': '10 - 16',
        'value':  <?php echo $data['usia10_16_p'];?>
    }, {
        'label': '6 - 9',
        'value': <?php echo $data['usia6_9_p']; ?>
    }, {
        'label': '0 - 5',
        'value':<?php echo $data['usia0_5_p']; ?>
    }]
    <?php
    }?>
 }];
var multiChart;
nv.addGraph(function() {
    multiChart = nv.models.multiBarHorizontalChart().x(function(d) {
        return d.label;
    }).y(function(d) {
        return d.value;
    }).duration(250);
    multiChart.yAxis.tickFormat(d3.format(',.2f'));
    d3.select('.multi-chart2 svg').datum(long_short_data).call(multiChart);
    nv.utils.windowResize(multiChart.update);
    return multiChart;
});
</script>

<!-- PEMELUK AGAMA -->
<script type="text/javascript">
var data2 = {
  series: [
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
                             echo $data['islam']/$semuadata .',';
                             echo $data['katolik']/$semuadata.',';
                             echo $data['kristen']/$semuadata.',';
                             echo $data['hindu']/$semuadata.',';
                             echo $data['budha']/$semuadata.',';
                             echo $data['konghucu']/$semuadata.',';
                             echo $data['kepercayaan']/$semuadata;
                          };
    ?>
  ]
};

var sum = function(a, b) { return a + b };
new Chartist.Pie('#pie-chart', data2, {
  labelInterpolationFnc: function(value) {
    var total= value / data2.series.reduce(sum) * 100

    return total.toFixed(1) + '%';
  }
});
</script>

<!-- PEMELUK AGAMA - KELURAHAN -->
<script type="text/javascript">
var data2 = {
  series: [
    <?php
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    $query = mysql_query("SELECT SUM(ag.islam_l) + SUM(ag.islam_p) as islam,
                        SUM(ag.katolik_l) + SUM(ag.katolik_p) as katolik,
                        SUM(ag.kristen_l) + SUM(ag.kristen_p) as kristen,
                        SUM(ag.hindu_l) + SUM(ag.hindu_p) as hindu,
                        SUM(ag.konghucu_l) + SUM(ag.konghucu_p) as konghucu,
                        SUM(ag.budha_l) + SUM(ag.budha_p) as budha,
                        SUM(ag.kepercayaan_l) + SUM(ag.kepercayaan_p) as kepercayaan
                        FROM agama ag
                        WHERE id_kelurahan = '".$id2."' AND tglupdate = (SELECT MAX(tglupdate) FROM agama WHERE id_kelurahan = '".$id2."')");
                          while($data = mysql_fetch_array($query))
                          {
                            $semuadata = $data['islam']+$data['katolik']+$data['kristen']+$data['hindu']+$data['budha']+$data['konghucu']+$data['kepercayaan'];
                             echo $data['islam']/$semuadata .',';
                             echo $data['katolik']/$semuadata.',';
                             echo $data['kristen']/$semuadata.',';
                             echo $data['hindu']/$semuadata.',';
                             echo $data['budha']/$semuadata.',';
                             echo $data['konghucu']/$semuadata.',';
                             echo $data['kepercayaan']/$semuadata;
                          };
    ?>
  ]
};

var sum = function(a, b) { return a + b };
new Chartist.Pie('#pie-chart2', data2, {
  labelInterpolationFnc: function(value) {
    var total= value / data2.series.reduce(sum) * 100

    return total.toFixed(1) + '%';
  }
});
</script>

<!-- Chart WNA + WNI -->
<script type="text/javascript">
var data2 = {
  series: [
    <?php
    $id = $_GET['id'];
    $query = mysql_query("SELECT mk.name as kecamatan,
                          SUM(kw.wna) as wna,
                          SUM(kw.wni) as wni,
                          SUM(kw.wna)+SUM(kw.wni) as total,
                          SUM(kw.wna)/(SUM(kw.wna)+SUM(kw.wni)) as wna1,
                          SUM(kw.wni)/(SUM(kw.wna)+SUM(kw.wni)) as wni1,
                          kw.tglupdate as tglupdate
                          FROM kewarganegaraan kw
                          JOIN kelurahan kl ON kw.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '$id' AND MONTH(kw.tglupdate) = '3'
                          GROUP BY MONTH(kw.tglupdate)");
      while($data = mysql_fetch_array($query))
      {
         echo (round($data['wna1'], 10)).',';
         echo (round($data['wni1'], 10)).',';
      };
    ?>
  ]
};

var sum = function(a, b) { return a + b };
new Chartist.Pie('#pie-chart-wn', data2, {
  labelInterpolationFnc: function(value) {
    var total= value / data2.series.reduce(sum) * 100

    return total.toFixed(1) + '%';
  }
});
</script>

<!-- Chart WNA + WNI - KELURAHAN-->
<script type="text/javascript">
var data2 = {
  series: [
    <?php
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    $query = mysql_query("SELECT mk.name as kecamatan,
                          SUM(kw.wna) as wna,
                          SUM(kw.wni) as wni,
                          SUM(kw.wna)+SUM(kw.wni) as total,
                          SUM(kw.wna)/(SUM(kw.wna)+SUM(kw.wni)) as wna1,
                          SUM(kw.wni)/(SUM(kw.wna)+SUM(kw.wni)) as wni1,
                          kw.tglupdate as tglupdate
                          FROM kewarganegaraan kw
                          JOIN kelurahan kl ON kw.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '$id' AND MONTH(kw.tglupdate) = '3'
                          GROUP BY MONTH(kw.tglupdate)");
      while($data = mysql_fetch_array($query))
      {
         echo (round($data['wna1'], 10)).',';
         echo (round($data['wni1'], 10)).',';
      };
    ?>
  ]
};

var sum = function(a, b) { return a + b };
new Chartist.Pie('#pie-chart-wn2', data2, {
  labelInterpolationFnc: function(value) {
    var total= value / data2.series.reduce(sum) * 100

    return total.toFixed(1) + '%';
  }
});
</script>

<!-- PERKEMBANGAN PENDUDUK BERDASARKAN JENIS KELAMIN (DALAM RIBUAN) -->
<script type="text/javascript">
var Dashboard1 = function() {
  this.$realData = []
};

//creates Stacked chart
Dashboard1.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
    Morris.Bar({
        element: element,
        data: data,
        xkey: xkey,
        ykeys: ykeys,
        stacked: true,
        labels: labels,
        hideHover: 'auto',
        resize: true, //defaulted to true
        gridLineColor: '#eeeeee',
        barColors: lineColors
    });
},

//creates area chart with dotted
Dashboard1.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
    Morris.Area({
        element: element,
        pointSize: 0,
        lineWidth: 0,
        data: data,
        xkey: xkey,
        ykeys: ykeys,
        labels: labels,
        hideHover: 'auto',
        pointFillColors: Pfillcolor,
        pointStrokeColors: Pstockcolor,
        resize: true,
        gridLineColor: '#eef0f2',
        lineColors: lineColors
    });

},


Dashboard1.prototype.init = function() {

    //creating Stacked chart
    var $stckedData  = [
      <?php
        $id = $_GET['id'];
        $query = mysql_query("SELECT mk.name as kecamatan,
                          kl.nama_kelurahan as kelurahan,
                          dm.id_kelurahan as id_kelurahan,
                          year(dm.tglupdate) as tahun,
                          sum(dm.ktp_l) as ktp_l,
                          sum(dm.ktp_p) as ktp_p
                          FROM demografi dm
                          LEFT JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                          LEFT JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '".$id."' AND dm.tglupdate =
                        	(
                                SELECT MAX(dm.tglupdate)
                                FROM demografi dm
                                JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                                JOIN markers mk ON kl.id_kecamatan = mk.id
                                WHERE mk.id = '".$id."'

                            )
                        GROUP BY mk.id");
                            while($data = mysql_fetch_array($query))
                            {
                            ?>
                              { y: <?php echo '"'.$data['tahun'].'",';?> a: <?php echo $data['ktp_l'] .',';?> b: <?php echo $data['ktp_p'] .',';?>}
                          <?php
                        };
                        ?>


        // { y: '2006', a: 75, b: 65},
        // { y: '2007', a: 100,b: 90 },
        // { y: '2008', a: 100, b: 90 }
    ];
    this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Laki-laki', 'Perempuan'], ['#5fbeaa', '#5d9cec']);

    //creating area chart
    var $areaDotData = [
            { y: '2009', a: 10, b: 20, c:30 },
            { y: '2010', a: 75,  b: 65, c:30 },
            { y: '2011', a: 50,  b: 40, c:30 },
            { y: '2012', a: 75,  b: 65, c:30 },
            { y: '2013', a: 50,  b: 40, c:30 },
            { y: '2014', a: 75,  b: 65, c:30 },
            { y: '2015', a: 90, b: 60, c:30 }
        ];
    this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b', 'c'], ['Desktops ', 'Tablets ', 'Mobiles '],['#ffffff'],['#999999'], ['#5fbeaa', '#5d9cec','#ebeff2']);

},
//init
$.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
  $.Dashboard1.init();
</script>

<!-- PERKEMBANGAN PENDUDUK BERDASARKAN JENIS KELAMIN - KELURAHAN (DALAM RIBUAN) -->
<script type="text/javascript">
var Dashboard1 = function() {
  this.$realData = []
};

//creates Stacked chart
Dashboard1.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
    Morris.Bar({
        element: element,
        data: data,
        xkey: xkey,
        ykeys: ykeys,
        stacked: true,
        labels: labels,
        hideHover: 'auto',
        resize: true, //defaulted to true
        gridLineColor: '#eeeeee',
        barColors: lineColors
    });
},

//creates area chart with dotted
Dashboard1.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
    Morris.Area({
        element: element,
        pointSize: 0,
        lineWidth: 0,
        data: data,
        xkey: xkey,
        ykeys: ykeys,
        labels: labels,
        hideHover: 'auto',
        pointFillColors: Pfillcolor,
        pointStrokeColors: Pstockcolor,
        resize: true,
        gridLineColor: '#eef0f2',
        lineColors: lineColors
    });

},


Dashboard1.prototype.init = function() {

    //creating Stacked chart
    var $stckedData  = [
      <?php
        $id = $_GET['id'];
        $id2 = $_GET['id2'];
        $query = mysql_query("SELECT dm.id_kelurahan as id_kelurahan,
                            year(dm.tglupdate) as tahun,
                            sum(dm.ktp_l) as ktp_l,
                            sum(dm.ktp_p) as ktp_p
                            FROM demografi dm
                            WHERE dm.id_kelurahan = '".$id2."'
                            AND tglupdate = (SELECT MAX(tglupdate) FROM agama WHERE id_kelurahan = '".$id2."')");
                            while($data = mysql_fetch_array($query))
                            {
                            ?>
                              { y: <?php echo '"'.$data['tahun'].'",';?> a: <?php echo $data['ktp_l'] .',';?> b: <?php echo $data['ktp_p'] .',';?>}
                          <?php
                        };
                        ?>


        // { y: '2006', a: 75, b: 65},
        // { y: '2007', a: 100,b: 90 },
        // { y: '2008', a: 100, b: 90 }
    ];
    this.createStackedChart('morris-bar-stacked2', $stckedData, 'y', ['a', 'b'], ['Laki-laki', 'Perempuan'], ['#5fbeaa', '#5d9cec']);

    //creating area chart
    var $areaDotData = [
            { y: '2009', a: 10, b: 20, c:30 },
            { y: '2010', a: 75,  b: 65, c:30 },
            { y: '2011', a: 50,  b: 40, c:30 },
            { y: '2012', a: 75,  b: 65, c:30 },
            { y: '2013', a: 50,  b: 40, c:30 },
            { y: '2014', a: 75,  b: 65, c:30 },
            { y: '2015', a: 90, b: 60, c:30 }
        ];
    this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b', 'c'], ['Desktops ', 'Tablets ', 'Mobiles '],['#ffffff'],['#999999'], ['#5fbeaa', '#5d9cec','#ebeff2']);

},
//init
$.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
  $.Dashboard1.init();
</script>

<!-- Jumlah Penduduk Berdasarkan Bulan Tahun Ini (Dalam Ribuan) -->
<script type="text/javascript">
var chart = new Chartist.Line('#svg-animation', {
  labels: ['','Jan' ,'Feb' ,'Mar' ,'Apr' ,'Mei' ,'Jun' ,'Jul' ,'Ags', 'Sep' ,'Okt' ,'Nov' ,'Des',''],
  series: [
    [,
      <?php
      $id = $_GET['id'];
      $query = mysql_query("SELECT SUM(ktp_l) as ktp_l
                          FROM demografi dm
                          JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '".$id."' AND YEAR(dm.tglupdate) = YEAR(CURDATE())
                          GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp_l'].",";
      }
      ?>
    ], // laki-laki
    [,
      <?php
      $id = $_GET['id'];
      $query = mysql_query("SELECT SUM(ktp_p) as ktp_p
                          FROM demografi dm
                          JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '".$id."' AND YEAR(dm.tglupdate) = YEAR(CURDATE())
                          GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp_p'].",";
      }
      ?>
    ], // perempuan
    [,
      <?php
      $id = $_GET['id'];
      $query = mysql_query("SELECT SUM(ktp_l)+SUM(ktp_p) as ktp
                          FROM demografi dm
                          JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                          JOIN markers mk ON kl.id_kecamatan = mk.id
                          WHERE mk.id = '".$id."' AND YEAR(dm.tglupdate) = YEAR(CURDATE())
                          GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp'].",";
      }
      ?>
    ]  // total
  ]
}, {
  low: 0,
  showArea: true,
  showPoint: false,
  fullWidth: true
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});
</script>

<!-- Jumlah Penduduk Berdasarkan Bulan Tahun Ini - KELURAHAN (Dalam Ribuan) -->
<script type="text/javascript">
var chart = new Chartist.Line('#svg-animation2', {
  labels: ['','Jan' ,'Feb' ,'Mar' ,'Apr' ,'Mei' ,'Jun' ,'Jul' ,'Ags', 'Sep' ,'Okt' ,'Nov' ,'Des',''],
  series: [
    [,
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT SUM(ktp_l) as ktp_l
              FROM demografi
              WHERE id_kelurahan = '".$id2."' AND YEAR(tglupdate) = YEAR(CURDATE())
              GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp_l'].",";
      }
      ?>
    ], // laki-laki
    [,
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT SUM(ktp_p) as ktp_p
              FROM demografi
              WHERE id_kelurahan = '".$id2."' AND YEAR(tglupdate) = YEAR(CURDATE())
              GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp_p'].",";
      }
      ?>
    ], // perempuan
    [,
      <?php
      $id = $_GET['id'];
      $id2 = $_GET['id2'];
      $query = mysql_query("SELECT SUM(ktp_l)+SUM(ktp_p) as ktp
              FROM demografi
              WHERE id_kelurahan = '".$id2."' AND YEAR(tglupdate) = YEAR(CURDATE())
              GROUP BY MONTH(tglupdate)");
      while ($data = mysql_fetch_array($query)) {
        echo $data['ktp'].",";
      }
      ?>
    ]  // total
  ]
}, {
  low: 0,
  showArea: true,
  showPoint: false,
  fullWidth: true
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});
</script>

<!-- Jumlah Penduduk Berdasarkan Tahun -->
<script>
new Chartist.Line('#line-chart-tooltip', {
  labels: ['',
    <?php
    $id = $_GET['id'];
    $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun
                                  FROM demografi dm
                                  JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                  WHERE mk.id = '$id' GROUP BY YEAR(dm.tglupdate)");
    while ($data = mysql_fetch_array($query)) {
      echo "'".$data['tahun']."',";
    }
    ?>
  ],
  series: [
    {
      name: 'Laki-laki',
      data: [,
        <?php
        $id = $_GET['id'];
        $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun, SUM(dm.ktp_l) as ktp_l, SUM(dm.ktp_p) as ktp_p
                                  FROM demografi dm
                                  JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                  WHERE mk.id = '$id' GROUP BY YEAR(dm.tglupdate)");
        while ($data = mysql_fetch_array($query)) {
          echo "'".$data['ktp_l']."',";
        }
        ?>
      ]
    },
    {
      name: 'Perempuan',
      data: [,
        <?php
        $id = $_GET['id'];
        $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun, SUM(dm.ktp_l) as ktp_l, SUM(dm.ktp_p) as ktp_p
                                  FROM demografi dm
                                  JOIN kelurahan kl ON dm.id_kelurahan = kl.id_kelurahan
                                  JOIN markers mk ON kl.id_kecamatan = mk.id
                                  WHERE mk.id = '$id' GROUP BY YEAR(dm.tglupdate)");
        while ($data = mysql_fetch_array($query)) {
          echo "'".$data['ktp_p']."',";
        }
        ?>
      ]
    }
  ]
},
    {
  plugins: [
    Chartist.plugins.tooltip()
  ]
}
);

var $chart = $('#line-chart-tooltips');

var $toolTip = $chart
  .append('<div class="tooltip"></div>')
  .find('.tooltip')
  .hide();

$chart.on('mouseenter', '.ct-point', function() {
  var $point = $(this),
    value = $point.attr('ct:value'),
    seriesName = $point.parent().attr('ct:series-name');
  $toolTip.html(seriesName + '<br>' + value).show();
});

$chart.on('mouseleave', '.ct-point', function() {
  $toolTip.hide();
});

$chart.on('mousemove', function(event) {
  $toolTip.css({
    left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 - 10,
    top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 40
  });
});
</script>

<!-- Jumlah Penduduk Berdasarkan Tahun - KELURAHAN -->
<script>
new Chartist.Line('#line-chart-tooltip2', {
  labels: ['',
    <?php
    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun, SUM(dm.ktp_l) as ktp_l, SUM(dm.ktp_p) as ktp_p
                        FROM demografi dm
                        WHERE dm.id_kelurahan = '".$id2."'
                        GROUP BY YEAR(dm.tglupdate)");
    while ($data = mysql_fetch_array($query)) {
      echo "'".$data['tahun']."',";
    }
    ?>
  ],
  series: [
    {
      name: 'Laki-laki',
      data: [,
        <?php
        $id = $_GET['id'];
        $id2 = $_GET['id2'];
        $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun, SUM(dm.ktp_l) as ktp_l, SUM(dm.ktp_p) as ktp_p
                            FROM demografi dm
                            WHERE dm.id_kelurahan = '".$id2."'
                            GROUP BY YEAR(dm.tglupdate)");
        while ($data = mysql_fetch_array($query)) {
          echo "'".$data['ktp_l']."',";
        }
        ?>
      ]
    },
    {
      name: 'Perempuan',
      data: [,
        <?php
        $id = $_GET['id'];
        $id2 = $_GET['id2'];
        $query = mysql_query("SELECT YEAR(dm.tglupdate) as tahun, SUM(dm.ktp_l) as ktp_l, SUM(dm.ktp_p) as ktp_p
                            FROM demografi dm
                            WHERE dm.id_kelurahan = '".$id2."'
                            GROUP BY YEAR(dm.tglupdate)");
        while ($data = mysql_fetch_array($query)) {
          echo "'".$data['ktp_p']."',";
        }
        ?>
      ]
    }
  ]
},
    {
  plugins: [
    Chartist.plugins.tooltip()
  ]
}
);

var $chart = $('#line-chart-tooltip2');

var $toolTip = $chart
  .append('<div class="tooltip"></div>')
  .find('.tooltip')
  .hide();

$chart.on('mouseenter', '.ct-point', function() {
  var $point = $(this),
    value = $point.attr('ct:value'),
    seriesName = $point.parent().attr('ct:series-name');
  $toolTip.html(seriesName + '<br>' + value).show();
});

$chart.on('mouseleave', '.ct-point', function() {
  $toolTip.hide();
});

$chart.on('mousemove', function(event) {
  $toolTip.css({
    left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 - 10,
    top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 40
  });
});
</script>

<!-- EditTable -->
<!-- Examples -->
<script src="../../assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="../../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="../../assets/plugins/tiny-editable/numeric-input-example.js"></script>


<script src="../../assets/pages/datatables.editable.init.js"></script>

<script>
$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
</script>

<script src="../../assets/plugins/parsleyjs/parsley.min.js"></script>

<!-- select-live -->
 <script src="../../assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<!--Form Wizard-->
<script src="../../assets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>

<!--wizard initialization-->
<script src="../../assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

<!-- filestyle -->
<script src="../../assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<!-- datepickers -->
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- <script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->

 <!-- Carousel -->
 <script src="../../assets/plugins/owl.carousel/dist/owl.carousel.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        //owl carousel
        $("#owl-slider").owlCarousel({
            loop:true,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        $("#owl-slider-2").owlCarousel({
            loop:false,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        //Owl-Multi
        $('#owl-multi').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:2
                },
                700:{
                    items:4
                },
                1000:{
                    items:3
                },
                1100:{
                    items:5
                }
            }
        })
    });

</script>
