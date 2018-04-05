
<?php
session_start();

$statusrole=$_SESSION['statusrole'];
if($statusrole=='1'){
    //role1
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
                        <label for="role">User Level Access</label> 
                        <select class="form-control selectpicker" data-style="btn-white" id="status" name="status" required="">
                            <option value=""></option>
                            <option value="1">Advance</option>
                            <option value="2">Medium</option>
                            <option value="3">Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukan Password" data-parsley-length="[6,10]" required>
                    </div>
                <button type="button" class="btn btn-danger waves-effect" onclick="insert_display();">Reset</button>
                <a id="popover" tabindex="0" class="btn btn-info" role="button" data-toggle="popover" data-trigger="focus" title="User Access Level" data-placement="top" data-content="[Advance] Create, Update, Delete, Display, Melihat Password. [Medium] Create, Update, Delete, Display.
[Low] Create, Display."><i class="glyphicon glyphicon-question-sign"></i></a>
                <button type="submit" class="btn btn-success btn-custom waves-effect">Tambah</button>
                </form>
                
            </div>
        </div>
       ';
    }
} else {
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
                    <input type="hidden" value="3" id="status">
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukan Password" data-parsley-length="[6,10]" required>
                    </div>
                <button type="button" class="btn btn-danger waves-effect" onclick="insert_display();">Reset</button>
                <button type="submit" class="btn btn-success btn-custom waves-effect">Tambah</button>
                </form>
                
            </div>
        </div>
       ';
    }
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

    $('#popover').popover(options)
</script>

