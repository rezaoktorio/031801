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
        <h4 class='page-title' style="margin-top: 0px">Menu Pengaturan Admin</h4>
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
                <i class="fa fa-arrow-circle-right"></i> Menu Pengaturan Admin
            </li>
        </ol>
			</div>
			<div class="panel-body">
        <div class="col-sm-4">
          <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Tambah Data Admin.</b></h5>
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" class="form-control" id="" placeholder="Masukan NIK">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Masukan Password">
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Tambah</button>
                </form>
              </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="col-sm-12">
              <div class="card-box table-responsive">
                  <h5 class="m-t-0 header-title"><b>Daftar Data Admin.</b></h5>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Bergabung</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>

                      <tbody>
                        <?php
                        $query = mysql_query("SELECT * FROM `admin` WHERE status = 1");
                        $no = 1;
                        while ($data = mysql_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nik_admin']; ?></td>
                                <td><?php echo $data['nama_admin']; ?></td>
                                <td><?php echo $data['email_admin']; ?></td>
                                <td><?php echo $data['tgl_gabung']; ?></td>
                                <td>
                                  <?php echo "<a class='btn btn-white btn-custom waves-effect' href='../../view/topup/index2.php?id=".$data['nik_admin']."'>Lihat</a>"; ?>
                                </td>
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
