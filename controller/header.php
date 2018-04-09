<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="../../assets/images/favicon_1.ico">

    <title>SIG - Dispendukcapil Surabaya</title>

    <!-- DataTables -->
    <link href="../../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Carousel -->
    <link href="../../assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />

    <!-- EditTable -->
    <link rel="stylesheet" href="../../assets/plugins/magnific-popup/css/magnific-popup.css" />
    <link rel="stylesheet" href="../../assets/plugins/jquery-datatables-editable/datatables.css" />

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../../assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="../../assets/plugins/chartist/css/chartist.min.css">
    <link href="../../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/custombox/css/custombox.css" rel="stylesheet">

    <!-- Tour css -->
    <link href="../../assets/plugins/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert -->
    <link href="../../assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- select live -->
    <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="../../assets/js/modernizr.min.js"></script>

    <!-- <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 50%;
        margin-left: 4%;
        margin-top: 4%;
        padding: 0;
      }
    </style> -->

</head>

<?php
    ob_start();

    $server = "mysql.hostinger.co.id";
    $username = "u573987905_sig";
    $password = "FZm4XZ7zcAos";
    $database = "u573987905_sig";

    error_reporting(0);

    mysql_connect($server,$username,$password) or die("Koneksi gagal");
    mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
