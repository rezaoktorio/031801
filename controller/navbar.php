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
