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
        <h4 class='page-title' style="margin-top: 0px">Kritik dan Saran</h4>
        <p class="text-muted page-title-alt">Pilih beberapa menu dibawah ini</p>
    </div>
</div>

<?php
session_start();

//jika session username belum dibuat, atau session username kosong
  if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
    //redirect ke halaman login
   echo '<div id="table_area"></div>';
  }
?>



<div id="editing_area"></div>

<div id="action_result"></div>
