<?php 
    require_once('../template/header.php');
    require_once('../template/navbar.php');
?>

<!-- Content -->
<div class="px-content">
    <ol class="breadcrumb page-breadcrumb">
        <li><a href="javascript:void(0)">Kelola Capres</a></li>
        <li class="active">Tambah Capres</li>
    </ol>

    <div class="page-header">
      <h1><i class="px-nav-icon ion-ios-paper"></i><span class="px-nav-label"></span>KELOLA CAPRES</h1>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Data Calon</span>
                    <div class="panel-heading-controls">
                      <button class="btn btn-default btn-xs" id="btn-minimize"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-default btn-xs" id="btn-show" style="display:none;"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="panel-body"  id="box-artikel">
                      <?php 
                      if(isset($_SESSION['save'])){
                          if($_SESSION['save'] == 1){
                  ?>
                      <div class="col-sm-12">
                          <div class="alert alert-success">
                              Data berhasil disimpan!
                          </div>
                      </div>
                      <br><br>
                  <?php } else{ ?>
                      <div class="col-sm-12">
                          <div class="alert alert-danger">
                              Data gagal disimpan!
                          </div>
                      </div>
                      <br><br>    
                  <?php   }
                          unset($_SESSION['save']);
                      }
                  ?>

                  <?php if(isset($_SESSION['form']) && $_SESSION['form'] == 1){ ?>
                      <div class="col-sm-12">
                          <div class="alert alert-warning">
                              Pastikan data pada form telah terisi dengan benar!
                          </div>
                      </div>
                      <br><br>
                  <?php 
                          unset($_SESSION['form']);
                      }
                  ?>
                  <form action="calon_proses.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama" placeholder="Nama Capres.." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 control-label">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_lhr" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <div class="radio">
                          <label>
                              <input type="radio" name="jq-validation-radios" value="laki-laki" class="px">
                              <span class="lbl">Laki-laki</span>
                          </label>
                      </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jq-validation-radios" value="perempuan" class="px">
                      <span class="lbl">Perempuan</span>
                    </label>
                  </div>
                </div>
              </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-10">
                              <textarea id="summernote-base">Ketikan di sini...</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" id="btnAdd" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                                <button type="button" id="btnEdit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  // Initialize Summernote
    $(function() {
      $('#summernote-base').summernote({
          height: 200,
          toolbar: [
          ['parastyle', ['style']],
          ['fontstyle', ['fontname', 'fontsize']],
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['picture', 'link', 'video', 'table', 'hr']],
          ['history', ['undo', 'redo']],
          ['misc', ['codeview', 'fullscreen']],
          ['help', ['help']]
          ],
      });
    });

    $(function(){
      $("#btn-minimize").click(function(){
        $("#box-data_calon").fadeOut();
        $("#btn-minimize").hide();
        $("#btn-show").show();
      });

      $("#btn-show").click(function(){
        $("#box-data_calon").fadeIn();
        $("#btn-minimize").show();
        $("#btn-show").hide();
      });
    });

    $(function(){
        $("#menu-artikel").addClass('');
    });
</script>

<?php 
    require_once('../template/footer.php');
?>