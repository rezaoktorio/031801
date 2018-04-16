<?php

	$display=$_GET['display'];
	if($display=='insertDisplay'){
    echo'
        <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Tambah Data Iklan Layanan Masyarakat.</b></h5>
                <button type="button" class="btn btn-warning waves-effect" onclick="Petunjuk()">Petunjuk Pengisian</button>
                <hr>
                <form role="form" id="formInsDisp" data-parsley-validate="">
                    <div class="form-group">
                        <label for="kelurahan">URL Youtube</label>
                        <textarea class="form-control" id="embed" name="embed" placeholder="Masukkan URL Youtube Video, Contoh : https://youtu.be/..." data-parsley-pattern="/https://youtu.be//" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama / Judul</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama/Judul Video" data-parsley-maxlength="255" required>
                    </div>
                    <button type="button" class="btn btn-danger waves-effect" onclick="insert_display();">Reset</button>
                    <button type="submit" class="btn btn-success btn-custom waves-effect">Tambah</button>
                </form>
                
            </div>
        </div>
	';
    }
?>
<script type="text/javascript">
    $(document).ready(function() {
    $("#formInsDisp").parsley();

    $("#formInsDisp").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
            filter();
        } 
        e.preventDefault();
    });
});
</script>
