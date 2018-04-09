<!-- Modal Download -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Download</h4>
    <div class="custom-modal-text">
      <div class="col-md-4">
        <i class="md md-album"><br>Satu</i>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Dua</i>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Tiga</i>
      </div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>

<!-- Modal Login -->
<div id="custom-modal2" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Masuk</h4>
    <div class="custom-modal-text">
      <div class="col-md-6" style="border-right:solid black 1px">
        <center>
          <img src="../../assets/images/preloader.gif" width="80%"><br>
          <form style="width:100%" role="form" class="navbar-left app-search pull-left hidden-xs"  action="../../view/map/index0.php" method="post">
             <input type="text" name="temukan" placeholder="Tap kartu anda disini" class="form-control" action="../../view/map/index0.php" autofocus="true">
          </form>
        </center>
      </div>
      <div class="col-md-6">
      	<h4 class="m-t-0 header-title"><b>Atau masukan NIK dan Password</b></h4>
        <!-- <form role="form" action=""> -->
        <form role="form" name="login" action="../../otentikasi.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="email" class="form-control" name="username" id="username" placeholder="Masukan NIK">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
            </div>
            <a href="" type="submit" name="login" value="Login" class="btn btn-info waves-effect waves-light">Masuk</a>
            <a href="" type="submit" name="lupa" value="Lupa" class="btn btn-danger waves-effect waves-light">Lupa Sandi</a>
        </form>
      </div>
      <br>&nbsp;
        <!-- <br><i><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</i> -->

    </div>
</div>



<!-- Modal Uploda Agama -->
<div id="custom-modal-agama" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Upload Data Agama</h4>
    <div class="custom-modal-text" style="padding-bottom:30%">
      <div class="col-md-4">
        <i class="md md-album"><br>Format file .xls</i><br><br>
        <i class="fa fa-file-excel-o fa-5x"></i>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Pilih file .xls</i>
        <div class="" style="border-top:solid #4ECDC4 0px;padding-top:2%">
          <form method="post" enctype="multipart/form-data" action="import_jalan.php">
          <br><input name="fileexcel" type="file"> <br><br>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Upload file .xls</i><br><br>
        <button class="btn btn-default waves-effect waves-light" name="upload" type="submit" value="Import"><span class="glyphicon glyphicon-upload" style="margin-right:5%"></span>Upload</button>
      </div>
    </div>
</div>

<!-- Modal Uploda Dokumen -->
<div id="custom-modal-dokumen" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Upload Data Dokumen</h4>
    <div class="custom-modal-text" style="padding-bottom:30%">
      <div class="col-md-4">
        <i class="md md-album"><br>Format file .xls</i><br><br>
        <i class="fa fa-file-excel-o fa-5x"></i>
      </div>
      <form method="post" enctype="multipart/form-data" action="../../view/dokumen/upload_dokumen.php">
      <div class="col-md-4">
        <i class="md md-album"><br>Pilih file .xls</i>
        <div class="" style="border-top:solid #4ECDC4 0px;padding-top:2%">
          <br><input name="fileexcel" type="file"> <br><br>
        </div>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Upload file .xls</i><br><br>
        <button class="btn btn-default waves-effect waves-light" name="upload" type="submit" value="Import"><span class="glyphicon glyphicon-upload" style="margin-right:5%"></span>Upload</button>
      </div>
      </form>
    </div>
</div>

<!-- Modal Uploda Pendidikan -->
<div id="custom-modal-pendidikan" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Upload Data Pendidikan</h4>
    <div class="custom-modal-text" style="padding-bottom:30%">
      <div class="col-md-4">
        <i class="md md-album"><br>Format file .xls</i><br><br>
        <i class="fa fa-file-excel-o fa-5x"></i>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Pilih file .xls</i>
        <div class="" style="border-top:solid #4ECDC4 0px;padding-top:2%">
          <form method="post" enctype="multipart/form-data" action="import_jalan.php">
          <br><input name="fileexcel" type="file"> <br><br>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Upload file .xls</i><br><br>
        <button class="btn btn-default waves-effect waves-light" name="upload" type="submit" value="Import"><span class="glyphicon glyphicon-upload" style="margin-right:5%"></span>Upload</button>
      </div>
    </div>
</div>

<!-- Modal Uploda Usia -->
<div id="custom-modal-usia" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Upload Data Usia</h4>
    <div class="custom-modal-text" style="padding-bottom:30%">
      <div class="col-md-4">
        <i class="md md-album"><br>Format file .xls</i><br><br>
        <i class="fa fa-file-excel-o fa-5x"></i>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Pilih file .xls</i>
        <div class="" style="border-top:solid #4ECDC4 0px;padding-top:2%">
          <form method="post" enctype="multipart/form-data" action="import_jalan.php">
          <br><input name="fileexcel" type="file"> <br><br>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <i class="md md-album"><br>Upload file .xls</i><br><br>
        <button class="btn btn-default waves-effect waves-light" name="upload" type="submit" value="Import"><span class="glyphicon glyphicon-upload" style="margin-right:5%"></span>Upload</button>
      </div>
    </div>
</div>
