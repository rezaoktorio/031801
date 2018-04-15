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
        <h4 class='page-title' style="margin-top: 0px">Menu Upload Data Dokumen</h4>
        <p class="text-muted page-title-alt">Backend | Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<div id="modal_area"></div>
<div id="area_delete"></div>

<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-border panel-inverse">
      <div class="panel-heading">
        <ol class="breadcrumb">
            <li>
                <a href="../../view/admin/"><i class="fa fa-home"></i> Menu Utama </a>
            </li>
            <li class="active">
                <i class="fa fa-arrow-circle-right"></i> Menu Upload Data Dokumen
            </li>
        </ol>
      </div>
      <div class="panel-body">
        <div class="col-sm-12">
          <div class="col-sm-12">
            <div class="m-b-30">
              <div class="row" align="right">
                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" onclick="DeleteModal()">Hapus Data Per Periode
                   <span class="btn-label btn-label-right"><i class="fa fa-times"></i>
                   </span>
                </button>
                |
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#myModalUpload">
                <span class="btn-label"><i class="fa fa-upload"></i></span>
                Upload Data Excel .xls
                </button>
              </div>
            </div>
            <div id="action_result"></div>  
            <div id="table_area"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row -->

<!-- Modal -->
<div id="myModalUpload" class=" modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Petunjuk Upload Data Excel</h4>
      </div>
      <div class="modal-body">
        <form id="basic-form" action="../handler/dokumen/uploadExcel.php" method="post" enctype="multipart/form-data">
          <div>
              <h3><strong>Susunan Tabel</strong></h3>
              <section>
                <div align="center">
                  <img src="../../assets/excel/template/dokumen/susunan-dokumen.png" class="img-responsive" alt="Responsive image" width="75%">
                </div>
              <br>
                <div class="col-lg-12">
                  <div class="panel panel-info panel-border">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <p>
                        Pastikan data tabel dimulai dari kolom <strong>"A3"</strong> dan urutan harus sesuai dengan gambar.<br>
                        Anda dapat mengunduh template excel berikut untuk melihat/menerapkan susunan tabel yang sesuai 
                        agar data dapat disimpan pada database.
                        <a href="../../assets/excel/template/dokumen/download.php?files=template-dokumen.xls"><strong>Unduh Template Disini</strong></a>
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <h3><strong>Data Tabel</strong></h3>
              <section>
                <div align="center">
                  <img src="../../assets/excel/template/dokumen/data-dokumen.png" class="img-responsive" alt="Responsive image" width="95%">
                </div>
              <br>
                <div class="col-lg-12">
                  <div class="panel panel-info panel-border">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <p>
                        Pastikan data tabel sesuai dan tepat dengan judul kepala tabel.
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <h3><strong>Format File</strong></h3>
              <section>
                <div align="center">
                  <img src="../../assets/excel/template/dokumen/format-dokumen.png" class="img-responsive" alt="Responsive image" width="76%">
                </div>
              <br>
                <div class="col-lg-12">
                  <div class="panel panel-info panel-border">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <p>
                        Pastikan format/ekstensi file <strong>".xls"</strong> atau <strong>"Excel 97-2003 Workbook"</strong> agar isi tabel dapat tersimpan pada database. Kemudian tentukan periode data yang akan diupload pada halaman setelah ini.
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <h3><strong>Upload File</strong></h3>
              <section>
                <div align="center">
                  <img src="../../assets/excel/template/dokumen/cloud.png" class="img-responsive" alt="Responsive image" width="30%">
                  <br>
                </div>
                <div class="col-lg-12">
                  <div class="panel panel-info panel-border">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="form-group clearfix col-md-7 col-md-offset-2">
                          <label class="col-lg-4 control-label " for="periode">Periode Data</label>
                          <div class="col-lg-8">
                            <div class="input-group">
                              <input type="text" class="form-control datepicker" id="datepicker" name="datepicker" required>
                              <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group clearfix col-md-7 col-md-offset-2">
                          <label class="col-lg-4 control-label " for="periode">Pilih File</label>
                          <div class="col-lg-8">
                            <input type="file" class="filestyle" data-input="false" name="fileexcelupload" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(":file").filestyle();
</script>