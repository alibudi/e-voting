<?php
    require_once('../template/header.php');
    require_once('../template/navbar.php');
?>

<!-- Content -->
<div class="px-content">
  <div class="page-header">
    <h1><i class="px-nav-icon ion-home"></i><span class="px-nav-label"></span>Data Pemilih</h1>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="panel">
          <div class="panel-heading">
            <span class="panel-title">Perolehan Suara (%)</span>
          </div>
          <div class="panel-body no-padding-t">
            <!-- Animated -->
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 1</h6>
            <div class="progress progress-striped active"><div class="progress-bar" style="width: 50%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 2</h6>
            <div class="progress progress-striped active"><div class="progress-bar progress-bar-success" style="width: 30%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 3</h6>
            <div class="progress progress-striped active"><div class="progress-bar progress-bar-danger" style="width: 20%;"></div></div>
            <hr class="panel-wide">
          </div>
        </div>
    </div>

    <div class="col-md-6">
      <div class="panel">
          <div class="panel-heading">
            <span class="panel-title">Perolehan Suara (desimal)</span>
          </div>
          <div class="panel-body no-padding-t">
            <!-- Animated -->
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 1</h6>
            <div class="progress progress-striped active"><div class="progress-bar" style="width: 60%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 2</h6>
            <div class="progress progress-striped active"><div class="progress-bar progress-bar-success" style="width: 60%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Pasangan Calon 3</h6>
            <div class="progress progress-striped active"><div class="progress-bar progress-bar-danger" style="width: 60%;"></div></div>
            <hr class="panel-wide">
          </div>
        </div>
    </div>

    <div class="col-md-6">
      <div class="panel">
          <div class="panel-heading">
            <span class="panel-title">Data Voting</span>
          </div>
          <div class="panel-body no-padding-t">

            <!-- Default -->
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Suara masuk</h6>

            <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 60%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Sudah memilih</h6>
            <div class="progress"><div class="progress-bar progress-bar-success" style="width: 60%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Belum memilih</h6>
            <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 60%;"></div></div>
            <h6 class="text-light-gray text-semibold text-xs" style="margin:20px 0 10px 0;">Total suara pemilih</h6>
            <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 60%;"></div></div>

            <hr class="panel-wide">
          </div>
        </div>
    </div>
  </div>
</div>
<!-- content -->

<script>
    $(function(){
        $("#menu-data_pemilih").addClass('active');
    });
</script>

<?php
    require_once('../template/footer.php');
?>