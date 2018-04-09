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
$(document).ready(function(){
  var data = {

    labels: ['pns','dosen', 'guru', 'guru_dosen', 'tani', 'polri', 'b.harian', 'b.kebun', 'nelayan', 'b.ternak',  'buruh','pedagang1'],
    series: [
      [<?php

      $id = $_GET['id'];
      $query = mysql_query("SELECT *  FROM pekerjaan where id_kelurahan = '".$id."' and id_pekerjaan= '".$id."'");
      $no = 1;
      while($data = mysql_fetch_array($query))
      {
        echo '"'.$data['pns'].'",';
        echo '"'.$data['dosen'].'",';
        echo '"'.$data['guru'].'",';
        echo '"'.$data['guru_dosen'].'",';
        echo '"'.$data['tani'].'",';
        echo '"'.$data['polri'].'",';
        echo '"'.$data['buruh_harian_lepas'].'",';
        echo '"'.$data['buruh_tani_perkebunan'].'",';
        echo '"'.$data['buruh_nelayan_perikanan'].'",';
        echo '"'.$data['buruh_peternakan'].'",';
        echo '"'.$data['buruh'].'",';
        echo '"'.$data['pedagang1'].'",';
      };
       ?>
    ]
      // [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6]
      // [2, 3, 4, 5, 6, 7, 8, 9, 12,4]
  ]

  };

  var options = {
    seriesBarDistance:2
  };

  var responsiveOptions = [
    ['screen and (max-width: 640px)', {
      seriesBarDistance: 0,
      axisX: {
        labelInterpolationFnc: function (value) {
          return value[0];
        }
      }
    }]
  ];

  new Chartist.Bar('#overlapping-bars', data, options, responsiveOptions)


});

</script>


<script type="text/javascript">

$(document).ready(function(){
var data2 = {
  labels: ['pedagang2','pedagang3', 'tni', 'mahasiswa', 'nelayan', 'swasta', 'pelajar', 'belum_kerja', 'pensiun', 'anggota_dprd', 'anggota_bpk','presiden'],
  series: [
    [<?php

    $id = $_GET['id'];
    $query = mysql_query("SELECT *  FROM pekerjaan where id_kelurahan = '".$id."' and id_pekerjaan= '".$id."'");
    $no = 1;
    while($data = mysql_fetch_array($query))
    {
      echo '"'.$data['pedagang2'].'",';
      echo '"'.$data['pedagang3'].'",';
      echo '"'.$data['tni'].'",';
      echo '"'.$data['mahasiswa'].'",';
      echo '"'.$data['nelayan'].'",';
      echo '"'.$data['swasta'].'",';
      echo '"'.$data['pelajar'].'",';
      echo '"'.$data['belum_kerja'].'",';
      echo '"'.$data['pensiun'].'",';
      echo '"'.$data['anggota_dprd'].'",';
      echo '"'.$data['anggota_bpk'].'",';
      echo '"'.$data['presiden'].'",';
    };
     ?>
  ]
    // [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6]
    // [2, 3, 4, 5, 6, 7, 8, 9, 12,4]
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

new Chartist.Bar('#overlapping-bars2', data2, options2, responsiveOptions2);
});

</script>


<script type="text/javascript">
$(document).ready(function(){
var data = {
  labels: ['Kristen', 'Islam', 'Katholik',  'Hindu', 'Budha', 'Konghucu'],
  series: [20, 15, 10, 30]
};

var options = {
  labelInterpolationFnc: function(value) {
    return value[0]
  }
};

var responsiveOptions = [
  ['screen and (min-width: 640px)', {
    chartPadding: 30,
    labelOffset: 100,
    labelDirection: 'explode',
    labelInterpolationFnc: function(value) {
      return value;
    }
  }],
  ['screen and (min-width: 1024px)', {
    labelOffset: 80,
    chartPadding: 20
  }]
];

new Chartist.Pie('#pie-chart', data, options, responsiveOptions);
});

</script>
<script type="text/javascript">
var chart = new Chartist.Line('#svg-animation', {
  labels: ['Usia 0-5', 'Usia 6-9', 'Usia 10-16', 'Usia 17', 'Usia 18-25', 'Usia 26-40', 'Usia 41-59', 'Usia 60'],
  series: [
    [1, 5, 2, 5, 4, 3],
    [2, 3, 4, 8, 1, 2],
    [5, 4, 3, 2, 1, 0.5]
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







<?php

// $id = $_GET['id'];
// $query = mysql_query("SELECT SUM(kk) AS total FROM dokumen where id_kelurahan = '".$id."'");
// $no = 1;
// while($data = mysql_fetch_array($query))
// {
// echo '<script language="javascript">';
// echo 'alert("'.$data['total'].'")';
// echo '</script>';
// }
// echo '<script language="javascript">';
// echo 'alert("'.$id.'")';
// echo '</script>';
?>

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
