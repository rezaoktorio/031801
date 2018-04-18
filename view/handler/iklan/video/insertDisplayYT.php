
<script type="text/javascript">
    $(document).ready(function(){
    $("#myModalInsertShow").modal("show");
    });
</script>

<div class="modal fade" id="myModalInsertShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tambah Iklan Video</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="formInsDisp" data-parsley-validate="">
                    <div class="form-group">
                        <label for="kelurahan">Link Youtube</label>
                        <textarea class="form-control" id="embed" name="embed" placeholder="Masukkan URL Youtube Video, Contoh : https://youtu.be/...&#10;Atau anda dapat melihat pada tombol Petunjuk Pengisian" data-parsley-pattern="/https://youtu.be//" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama / Judul</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama / Judul Video" data-parsley-maxlength="255" required>
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
    $(document).ready(function() {
    $("#formInsDisp").parsley();

    $("#formInsDisp").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
            $(document).ready(function(){
                $("#myModalInsertShow").modal("hide");
            });
            filterYT();
        } 
        e.preventDefault();
    });
});
</script>
