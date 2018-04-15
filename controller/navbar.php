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
                    <li class="dropdown top-menu-item-xs">
                      <?php
                        session_start();

                        //jika session username belum dibuat, atau session username kosong
                        if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
                          // echo "";
                        } if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
                          $query = mysql_query("SELECT COUNT(id_kritik) as total, subjek_kritik as subjek, isi_kritik as kritik FROM kritik WHERE tgl_kritik = CURDATE() LIMIT 0,5");
                          $no = 1;
                          while ($data = mysql_fetch_array($query)) {
                            ?>
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"><?php echo $data['total'];?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title">Notifikasi Kritik & Saran</li>
                                <li class="list-group slimscroll-noti notification-list">
                                   <!-- list item-->
                                   <a class="list-group-item">
                                      <div class="media">
                                         <div class="pull-left p-r-10">
                                           <?php
                                           if ($data['total'] < 1) {

                                           } if ($data['total'] > 0) {
                                             echo "<em class='fa noti-primary'>".$no."</em>";
                                           }

                                           ?>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading"><?php echo $data['subjek'];?></h5>
                                            <p class="m-0">
                                                <small><?php echo $data['kritik'];?></small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                </li>
                                <li>
                                    <a href="http://031801.webplussolution.com/view/kritik" class="list-group-item text-right">
                                        <small class="font-600">Lihat Semua</small>
                                    </a>
                                </li>
                            </ul>
                            <?php
                          }
                          $no++;
                        }
                      ?>
                    </li>

                    <?php
                      session_start();

                      //jika session username belum dibuat, atau session username kosong
                      if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
                        // echo "";
                      } if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
                        $user = $_SESSION['username'];
                        $query = mysql_query("SELECT nama_admin as nama FROM admin WHERE nik_admin='$user'");
                        while ($data = mysql_fetch_array($query)) {
                          echo "<li class='dropdown navbar-c-items'>";
                            echo "<a href='' class='dropdown-toggle waves-effect waves-light profile' data-toggle='dropdown' aria-expanded='true'>".$data['nama']."</a>";
                          echo "</li>";
                        }
                      }
                    ?>
                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="ti-user text-white m-r-10"></i> </a>
                        <ul class="dropdown-menu">
                          <!--
                            <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                              <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                          -->

                            <?php
                              session_start();

                              //jika session username belum dibuat, atau session username kosong
                              if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
                                ?>
                                <!-- <li><a id="myModal2" href="#custom-modal2" data-animation="contentscale" data-plugin="custommodal"
                                  data-overlaySpeed="100" data-overlayColor="#36404a"><i class="ti-power-off text-danger m-r-10"></i> Masuk</a></li> -->
                                  <li><a href="http://031801.webplussolution.com/login.php"><i class="ti-power-off text-danger m-r-10"></i> Masuk</a></li>
                                <?php
                              } if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
                                $user = $_SESSION['username'];
                                $query = mysql_query("SELECT nama_admin as nama FROM admin WHERE nik_admin='$user'");
                                while ($data = mysql_fetch_array($query)) {
                                  // echo "<center><p>".$data['nama']."</p></center>";
                                }

                                ?>
                                <li><a href="../../view/edit/"><i class="ti-user text-custom m-r-10"></i> Profil</a></li>
                                <li><a href="../../view/admin/"><i class="ti-settings text-custom m-r-10"></i> Pengaturan</a></li>
                                <li class="divider"></li>
                                <li><a href="http://031801.webplussolution.com/logout.php/"><i class="ti-power-off text-danger m-r-10"></i> Keluar</a></li>
                                <?php
                              }
                            ?>
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
