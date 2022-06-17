<section class="content-header">
	
      <h1>
        DATA PEGAWAI
        <small>CRUD data pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Pegawai</a></li>
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
                  <th>Nomor Pegawai</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Sip</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                	<?php
                	$no=1;
                	foreach ($data_pegawai as $key) {
                		
                		?>
                		<tr>
		                  <td><?=$no++?></td>
		                  <td><?=$key->pegawai_nomor?></td>
		                  <td><?=$key->pegawai_nama?></td>
		                  <td><?=$key->pegawai_jenis_kelamin?></td>
		                  <td><?=$key->pegawai_sip?></td>
		                  <td>
		                  	<button class="btn btn-info" data-toggle="modal" data-target="#modal-default<?=$key->pegawai_id?>"><span class="fa fa-pencil"></span></button>
		                  	<a href="<?php echo base_url()?>welcome/hapus/<?php echo $key->pegawai_id; ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
		                  </td>
		                </tr>

		                <div class="modal fade" id="modal-default<?=$key->pegawai_id?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Pegawai</h4>
              </div>
              <form action="<?php echo base_url()?>welcome/edit_simpan" method="POST">
              <div class="modal-body">
              	<input type="hidden" name="id" class="form-control" value="<?=$key->pegawai_id?>">
                <div class="form-group">
                	<label>Nomor Pegawai</label>
                	<input type="number" name="no_pegawai" class="form-control" value="<?=$key->pegawai_nomor?>">
                </div>

                <div class="form-group">
                	<label>Nama Pegawai</label>
                	<input type="text" name="nama_pegawai" class="form-control" value="<?=$key->pegawai_nama?>">
                </div>

                <div class="form-group">
                	<label>jenis kelamin</label><br>
                	<input type="radio" name="jenis_pegawai" value="L" <?php if ($key->pegawai_jenis_kelamin == "L") {
                		echo "checked";
                	} ?>> Laki - Laki
                	<input type="radio" name="jenis_pegawai" value="P" <?php if ($key->pegawai_jenis_kelamin == "P") {
                		echo "checked";
                	} ?>> Perempuan
                </div>

                <div class="form-group">
                	<label>Nomor Sip</label><br>
                	<input type="number" name="sip_pegawai" class="form-control" value="<?=$key->pegawai_sip?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <input type="submit" class="btn btn-primary" value="Edit" name="edit">
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                		<?php
                	}
                	?>
                
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nomor Pegawai</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Sip</th>
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
                <h4 class="modal-title">Tambah Data Pegawai</h4>
              </div>
              <form action="<?php echo base_url()?>welcome/simpan_pegawai" method="POST">
              <div class="modal-body">
                <div class="form-group">
                	<label>Nomor Pegawai</label>
                	<input type="number" name="no_pegawai" class="form-control" required="">
                </div>

                <div class="form-group">
                	<label>Nama Pegawai</label>
                	<input type="text" name="nama_pegawai" class="form-control" required="">
                </div>

                <div class="form-group">
                	<label>jenis kelamin</label><br>
                	<input type="radio" name="jenis_pegawai" value="L"> Laki - Laki
                	<input type="radio" name="jenis_pegawai" value="P"> Perempuan
                </div>

                <div class="form-group">
                	<label>Nomor Sip</label><br>
                	<input type="number" name="sip_pegawai" class="form-control" required="">
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