
<?php

	$display=$_GET['display'];
	if($display=='insertDisplay'){
    echo'
        <div class="col-sm-12">
              <div class="card-box table-responsive">
                <h5 class="m-t-0 header-title"><b>Tambah Data Admin</b></h5>
                <hr>
                <form role="form" data-parsley-validate="">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK"  data-parsley-type="number" data-parsley-maxlength="20" required >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-maxlength="50" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" parsley-type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" data-parsley-length="[6,10]" data-parsley-type="alphanum" required>
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

