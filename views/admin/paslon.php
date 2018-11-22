<?php
    require_once('../template/header.php');
    require_once('../template/navbar.php');
/*    require_once('../../controller/PaslonController.php');
    $paslon = new PaslonController();
    $data = $paslon->getAll();*/
?>

<!-- Content -->
<div class="px-content">
    <div class="page-header">
      <h1><i class="px-nav-icon ion-ios-paper"></i><span class="px-nav-label"></span>KELOLA DATA PASLON</h1>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel">
          <div class="panel-title">Data Paslon</div>
          <small class="panel-subtitle text-muted">Kelola Data Paslon</small>
          <div class="panel-body">
            <a class="btn btn-primary" href="../admin/add_calon.php"><i class="fa fa-plus"></i> Tambah Paslon</a>
            <br><br>
            <div class="table-primary">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Nama Pasangan</th>
                            <th>Visi & Misi</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                 <!--    <?php 
                            $no = 1;
                            if($data->rowCount() > 0) {
                                while($row = $data->fetch()){ ?>
                   -->  <tbody>
                        <tr>
                        <td><?php echo $no++; ?></td>
                       <!--      <td><?php echo $row['capres']; ?></td>
                            <td><?php echo $row['cawapres']; ?></td>
                            <td><?php echo $row['visi']; ?></td>
                            <td><?php echo $row['misi']; ?></td>
                        -->     <td class="text-center">
                                <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                  <!--          <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="7" class="text-center"><i>Tidak Ada Data</i></td>
                                </tr>
                        <?php   } ?>
                    --> </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- content -->

<script>
    $(function(){
        $("#menu-paslon").addClass('active');
    });
</script>

<?php
    require_once('../template/footer.php');
?>