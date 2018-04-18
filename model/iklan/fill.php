<!-- Page-Title -->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="btn-group pull-right m-t-15">
            <!-- <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul> -->
        </div>
        <h4 class='page-title' style="margin-top: 0px">Menu Pengaturan Iklan Layanan Masyarakat</h4>
        <p class="text-muted page-title-alt">Backend | Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div id="modal_area"></div>
<div id="modal_info"></div>
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-border panel-inverse">
      <div class="panel-heading">
        <ol class="breadcrumb">
            <li>
                <a href="../../view/admin/"><i class="fa fa-home"></i> Menu Utama </a>
            </li>
            <li class="active">
                <i class="fa fa-arrow-circle-right"></i> Menu Pengaturan Iklan Layanan Masyarakat
            </li>
        </ol>
      </div>
      <div class="panel-body">
        <div class="col-sm-3">
            <div class="card-box table-responsive">
            <h5 class="m-t-0 header-title"><b>Tambah Data Iklan Layanan Masyarakat.</b></h5>
            <button type="button" class="btn btn-warning waves-effect btn-block" onclick="Petunjuk()">Petunjuk Pengisian</button>
            <hr>
                <div class="form-group">
                    <div>
                        <button type="button" class="btn btn-youtube waves-effect waves-light btn-block" onclick="insert_displayYT()">
                            <i class="fa fa-youtube m-r-5"></i> Link Youtube
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <button type="button" class="btn btn-dropbox waves-effect waves-light btn-block" onclick="insert_displayGB()">
                            <i class="fa fa-file-image-o m-r-5"></i> File Gambar
                        </button>
                    </div>
                </div>
            </div>
            <div id="editing_area"></div>
        </div>
        <div class="col-sm-9">
            <div id="action_result"></div>
            <div id="table_area"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
                <h5 class="m-t-0 header-title"><b>Tambah Data Iklan Layanan Masyarakat.</b></h5>
                <h5 class="m-t-0 header-title"><b>Daftar Data Iklan Layanan Masyarakat.</b></h5>
   -->