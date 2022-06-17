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
                                  
                                }
                              }

                              
                              ?>
                            </td>
                            
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