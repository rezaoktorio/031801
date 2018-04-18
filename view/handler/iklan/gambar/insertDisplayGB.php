
<script type="text/javascript">
    $(document).ready(function(){
    $("#myModalInsertShowGB").modal("show");
    });
</script>

<div class="modal fade" id="myModalInsertShowGB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tambah Iklan Gambar</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="formInsDispGB" data-parsley-validate="" method="post" enctype="multipart/form-data" action="../handler/iklan/gambar/uploadGB.php">
                    <div class="form-group">
                        <label for="kelurahan">File Gambar (Landscape)</label>
                        <input type="file" class="filestyle" data-buttonname="btn-white" name="gambar" id="gambar" accept=".png, .jpg, .jpeg"   required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama / Judul</label>
                        <input type="text" class="form-control" id="nama_gambar" name="nama_gambar" placeholder="Masukan Nama / Judul Gambar" data-parsley-maxlength="255" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-custom" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success btn-custom waves-effect">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $("#formInsDispGB").parsley();
    $(":file").filestyle({placeholder: "Hanya File Gambar Tipe .jpg/.jpeg/.png"});
</script>
