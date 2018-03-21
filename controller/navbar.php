<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="../../index.php" class="logo"><span><i
                        class="md md-album"></i>DISPENDUKCAPIL SURABAYA</span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="navbar-c-items">
                        <form role="form" class="navbar-left app-search pull-left hidden-xs"  action="../../view/temukan/" method="post">
                             <input type="text" name="temukan" placeholder="Temukan..." class="form-control" action="../../view/temukan/">
                             <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown navbar-c-items">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                            <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="notifi-title"><span class="label label-default pull-right">3 Baru</span>Notifikasi</li>
                            <li class="list-group slimscroll-noti notification-list">
                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Kunjungan Hari Ini</h5>
                                        <p class="m-0">
                                            <small>Terdapat 5 user mengunjungi hari ini</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-user-plus noti-pink"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Perubahan Data</h5>
                                        <p class="m-0">
                                            <small>Terdapat 5 perubahan data kecamatan</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                               <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-bell-o noti-custom"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Update Admin</h5>
                                        <p class="m-0">
                                            <small>Terdapat <span class="text-primary font-600">2</span> peruabahan dari admin terkait data SIG</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                                <!-- list item-->
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="pull-left p-r-10">
                                        <em class="fa fa-diamond noti-primary"></em>
                                     </div>
                                     <div class="media-body">
                                        <h5 class="media-heading">Perubahan Lainnya</h5>
                                        <p class="m-0">
                                            <small>Ada beberapa data perubahan yang lain</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>

                            </li>
                            <li>
                                <a href="javascript:void(0);" class="list-group-item text-right">
                                    <small class="font-600">Lihat Semua Notifikasi</small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="ti-user text-white m-r-10"></i> </a>
                        <ul class="dropdown-menu">
                          <!--
                            <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                              <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                          -->
                            <li><a href="../../view/edit/"><i class="ti-settings text-custom m-r-10"></i> Pengaturan</a></li>
                            <li class="divider"></li>
                            <li><a id="myModal2" href="#custom-modal2" data-animation="contentscale" data-plugin="custommodal"
                              data-overlaySpeed="100" data-overlayColor="#36404a"><i class="ti-power-off text-danger m-r-10"></i> Masuk</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <?php require_once('../../controller/topbar.php'); ?>
</header>
<!-- End Navigation Bar-->
