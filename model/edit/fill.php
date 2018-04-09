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
        <h4 class='page-title' style="margin-top: 0px">Profil</h4>
        <p class="text-muted page-title-alt">Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
		<div class="panel panel-border panel-inverse">
			<div class="panel-heading">
				<h3 class="panel-title">Profil</h3>
			</div>
			<div class="panel-body">
        <form class="form-horizontal" role="form">
          <?php
          $nik = $_SESSION['username'];
          $query = mysql_query("SELECT * FROM admin WHERE nik_admin = $nik");
          while ($data = mysql_fetch_array($query)) {
            ?>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">NIK</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputText" value="<?php echo $data['nik_admin']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputText" value="<?php echo $data['nama_admin']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputText" value="<?php echo $data['password']?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputText" value="<?php echo $data['email_admin']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Tanggal Gabung</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputText" value="<?php echo $data['tgl_gabung']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText" class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-9">
                      <?php
                        if ($data['role'] == 1) {
                          echo "<input type='text' class='form-control' id='inputText' value='Super Admin' readonly>";
                        } if ($data['role'] == 2) {
                          echo "<input type='text' class='form-control' id='inputText' value='Admin' readonly>";
                        } if ($data['role'] == 3) {
                          echo "<input type='text' class='form-control' id='inputText' value='Operator' readonly>";
                        }
                      ?>

                    </div>
                </div>
                <!-- <div class="form-group m-b-0">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                    </div>
                </div> -->
            </div>
            <?php
          }
          ?>
        </form>
			</div>
		</div>
	</div>

</div>
<!-- end row -->
