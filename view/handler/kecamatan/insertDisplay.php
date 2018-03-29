
<?php

	$display=$_GET['display'];
	if($display=='insertDisplay'){
    echo'
        <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Tambah Data Kecamatan</b></h5>
                <hr>
                <form role="form" data-parsley-validate="">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan Nama Kecamatan" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="60" required >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" data-parsley-pattern="^[a-zA-Z ,.]+$" data-parsley-maxlength="80" required>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <div class="input-group">
                            <span class="input-group-addon">(031)</span>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan No Telp"  data-parsley-type="number" data-parsley-maxlength="14" required>
                        </div>
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
    $("form").parsley();

    $("form").on('submit', function(e) {
        var f = $(this);
        f.parsley().validate();

        if (f.parsley().isValid()) {
            filter();
        } 
        e.preventDefault();
    });
});
</script>

