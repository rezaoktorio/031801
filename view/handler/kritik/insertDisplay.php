<?php

	$display=$_GET['display'];
	if($display=='insertDisplay'){

    $mydate=getdate(date("U"));

    echo'
        <div class="row">
          <div class="col-sm-12">
                <div class="panel panel-border panel-inverse">
                    <div class="panel-heading">
                        <h3 class="panel-title">Kritik dan Saran</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" data-parsley-validate="">
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputText" class="col-sm-3 control-label">Tanggal</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="tanggalkritik" value="'.date('Y/m/d').'" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="namakritik" placeholder="Masukan Nama Anda" data-parsley-length="[2,50]" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputText" class="col-sm-3 control-label">Subjek</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="subjekkritik" placeholder="Masukan Subjek" data-parsley-length="[2,255]" required>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputText" class="col-sm-3 control-label">Kritik dan Saran</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" rows="10" id="kritiksaran" data-parsley-length="[3,1000]" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="button" class="btn btn-danger waves-effect" onclick="insert_display();">Reset</button>
                                <button type="submit" class="btn btn-success btn-custom waves-effect">Submit</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
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
            createExecutor();
        } 
        e.preventDefault();
    });
});
</script>

