<section class="content-header">
	
      <h1>
        DATA JADWAL
        <small>CRUD data jadwal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Jadwal</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah Jadwal</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" border="2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th align="center" colspan="9"><center>DATA JADWAL DOKTER RS TRUSTMEDIKA SURABAYA</center></th>

                  </tr>
                <tr>
                  <th>No</th>
                  <th>Klinik</th>
                  <th>SENIN</th>
                  <th>SELASA</th>
                  <th>RABU</th>
                  <th>KAMIS</th>
                  <th>JUMAT</th>
                  <th>SABTU</th>
                  <th>MINGGU</th>
                  <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;

                  $nomer=0;
                  foreach ($poli_coba as $key) {
                    ?>
                    <tr>
                      <td bgcolor="#9AECDB"><?=$no++?></td>
                      <td bgcolor="#9AECDB"><?=$key->unit_nama?>
                      </td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                      <td bgcolor="#9AECDB"></td>
                    </tr>
                    <?php

                    if (!empty($key->poli_dokter)) {
                        foreach ($key->poli_dokter as $key2) {
                          ?>
                          <tr>
                            <td></td>
                            <td><b><?=$key2->pegawai_nama?></b>
                            </td>
                            <td>
                              <?php
                              $cek1 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 1) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek1 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">SENIN</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>


                            </td>
                            
                            <td>
                              <?php
                              $cek2 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 2) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek2 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">SELASA</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td>
                              <?php
                              $cek3 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 3) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek3 = 1;
                                  ?>
                                  

                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">RABU</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td>
                              <?php
                              $cek4 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 4) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek4 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">KAMIS</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td>
                              <?php
                              $cek5 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 5) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek5 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>
                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">JUMAT</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td>
                              <?php
                              $cek6 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 6) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek6 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">SABTU</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td>
                              <?php
                              $cek7 = 0;
                              foreach ($key2->poli_dokter_jadwal as $key3) {
                                if ($key3->jadwal_hari_id == 7) {
                                  echo "<b>".$key3->jam."</b> ";
                                  $cek7 = 1;
                                  ?>
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?=$key3->id_jadwal?>"><span class="fa fa-pencil"></span></button>

                                  <div class="modal fade" id="modal-default-<?=$key3->id_jadwal?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title">EDIT DATA</h4>
                                        </div>
                                        <form action="<?php echo base_url()?>jadwal/edit_simpan" method="POST">
                                        <div class="modal-body">
                                         
                                         <input type="hidden" name="id" value="<?=$key3->id_jadwal?>">
                                          <div class="form-group">
                                            <label>Dokter</label>
                                            <select name="pilih_dokter" class="form-control">
                                              <option value="<?=$key2->pegawai_id?>"><?=$key2->pegawai_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Poli</label>
                                            <select name="pilih_poli" class="form-control">
                                              <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Pilih Hari</label>
                                            <select name="pilih_hari" class="form-control">
                                              <option value="1">MINGGU</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label>Atur Jam</label>
                                            <input type="text" name="jam" class="form-control" required="" value="<?=$key3->jam?>">
                                          </div>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                                          <input type="submit" class="btn btn-primary" value="Edit" name="simpan">
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <?php
                                }
                              }

                              
                              ?>
                            </td>
                            <td><a href="<?php echo base_url()?>jadwal/hapus/<?php echo $key->unit_id; ?>/<?php echo $key2->pegawai_id; ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></td>
                          </tr>
                          <?php
                        }
                    }
                    
                    

                    $nomer++;
                  }
                  ?>
                
               
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Klinik</th>
                  <th>SENIN</th>
                  <th>SELASA</th>
                  <th>RABU</th>
                  <th>KAMIS</th>
                  <th>JUMAT</th>
                  <th>SABTU</th>
                  <th>MINGGU</th>
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
              <form action="<?php echo base_url()?>jadwal/simpan_jadwal" method="POST">
              <div class="modal-body">
               

                <div class="form-group">
                  <label>Pilih Dokter</label>
                  <select name="pilih_dokter" class="form-control">
                    <?php
                    foreach ($data_pegawai as $key) {
                      ?>
                      <option value="<?=$key->pegawai_id?>"><?=$key->pegawai_nama?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Pilih Poli</label>
                  <select name="pilih_poli" class="form-control">
                    <?php
                    foreach ($data_poli as $key) {
                      ?>
                      <option value="<?=$key->unit_id?>"><?=$key->unit_nama?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Pilih Hari</label>
                  <select name="pilih_hari" class="form-control">
                    <?php
                    foreach ($data_hari as $key) {
                      ?>
                      <option value="<?=$key->id_jadwal?>"><?=$key->nama_hari?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Atur Jam</label>
                  <input type="text" name="jam" class="form-control" required="">
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