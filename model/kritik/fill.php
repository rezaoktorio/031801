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
        <h4 class='page-title' style="margin-top: 0px">Kritik dan Saran</h4>
        <p class="text-muted page-title-alt">Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
		<div class="panel panel-border panel-inverse">
			<div class="panel-heading">
				<h3 class="panel-title">Kritik dan Saran</h3>
			</div>
			<div class="panel-body">
        <form class="form-horizontal" role="form">
          <div class="col-sm-6">
            <div class="form-group">
                <label for="inputText" class="col-sm-3 control-label">Tanggal</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputText" value="<?php $mydate=getdate(date("U"));
                  echo "$mydate[year]-$mydate[mon]-$mydate[mday]";?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputText" placeholder="Masukan Nama Anda">
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-sm-3 control-label">Subjek</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputText" placeholder="Masukan Subjek">
                </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="inputText" class="col-sm-3 control-label">Kritik dan Saran</label>
                <div class="col-sm-9">
                  <textarea class="form-control" rows="4"></textarea>
                </div>
            </div>
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="submit" class="btn btn-danger">Batal</button>
            </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>
<!-- end row -->

<?php
  session_start();

  //jika session username belum dibuat, atau session username kosong
  if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    // echo "";
  } if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $query = mysql_query("SELECT nama_admin as nama FROM admin WHERE nik_admin='$user'");
    while ($data = mysql_fetch_array($query)) {
      ?>
      <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Riwayat Kritik dan Saran</h4>
                <p class="text-muted font-14 m-b-20">
                    For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                </p>

                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Subjek</th>
                        <th>Kritik dan Saran</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
      </div>
      <!-- end row -->

      <?php
    }
  }
?>
