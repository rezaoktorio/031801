
<?php

	$display=$_GET['display'];
	if($display=='insertDisplay'){
    echo'
        <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Tambah Data Kelurahan</b></h5>
                <hr>
                <form role="form" data-parsley-validate="">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control selectpicker" data-live-search="true" data-style="btn-white" id="kecamatan" name="kecamatan" required="">
                            <option value="">Pilih Kecamatan</option>';
                            require_once("../../../controller/connection.php");
                            $queryselect="SELECT id, name FROM markers";
                            $resultselect = mysql_query($queryselect);

                            while ($dataselect = mysql_fetch_array($resultselect)){
                            echo'
                                <option value='.$dataselect['id'].'> '.$dataselect['name'].' </option>
                                ';
                            }

                        echo '</select>
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan Nama Kecamatan" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="60" required >
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

<script>
      $('.selectpicker').selectpicker();
  </script>
