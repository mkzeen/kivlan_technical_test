<section class="content-header">
	
      <h1>
        DATA POLI/UNIT
        <small>CRUD data poli/unit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Poli</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Data</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Poli Kode</th>
                  <th>Nama</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($data_poli as $key) {
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$key->unit_kode?>
                      </td>
                      <td><?=$key->unit_nama?></td>
                      <td>
                        <button class="btn btn-info" data-toggle="modal" data-target="#modal-default<?=$key->unit_id?>"><span class="fa fa-pencil"></span></button>
                        <a href="<?php echo base_url()?>poli/hapus/<?php echo $key->unit_id; ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
                      </td>
                      <div class="modal fade" id="modal-default<?=$key->unit_id?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Poli</h4>
              </div>
              <form action="<?php echo base_url()?>poli/edit_simpan" method="POST">
              <div class="modal-body">
               
                <input type="hidden" name="id" class="form-control" value="<?=$key->unit_id?>">

                <div class="form-group">
                  <label>kode Poli</label>
                  <input type="text" name="kode_poli" class="form-control" required="" value="<?=$key->unit_kode?>">
                </div>

                <div class="form-group">
                  <label>Nama Poli</label>
                  <input type="text" name="nama_poli" class="form-control" required="" value="<?=$key->unit_nama?>">
                </div>

                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <input type="submit" class="btn btn-primary" value="edit" name="edit">
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                    </tr>
                    <?php
                  }
                  ?>
                
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Poli Kode</th>
                  <th>Nama</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Poli</h4>
              </div>
              <form action="<?php echo base_url()?>poli/simpan_poli" method="POST">
              <div class="modal-body">
               

                <div class="form-group">
                  <label>kode Poli</label>
                  <input type="text" name="kode_poli" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label>Nama Poli</label>
                  <input type="text" name="nama_poli" class="form-control" required="">
                </div>

                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <input type="submit" class="btn btn-primary" value="SImpan" name="simpan">
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>