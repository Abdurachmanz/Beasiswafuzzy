<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Seleksi Penerimaan Beasiswa Prestasi</title>
      <div class="col">
        <div style="text-align: center;"  class="row">
          <div class="shadow" style="background: #07689F; height:80px; width:100%">
            <div>
              <h2 style="color: white; margin:0px; padding-top: 15px"><b>Seleksi Penerimaan Beasiswa Berprestasi dan Kurang Mampu</b></h2>
            </div>
          </div>
        </div>
		  </div>
  </head>
  <body>
    <div class="bg-image">
      <?php include"database.php"?>
      <div class="row">
        <div class="center" style="padding-top: 15px; margin-left: auto; margin-right: auto;">
          <div align="center">
            <hr><h2>---------------------------------- DAFTAR PEMOHON BEASISWA ----------------------------------</h2><hr>
          </div>
          <div style="padding: 2.5% 5%; width:100%;">
            <table width="100%">
              <tr>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Nama Mahasiswa</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>IPK Mahasiswa</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Penghasilan Orang Tua</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Tanggungan Orang Tua</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Banyak Prestasi Selama Kuliah (Nasional/International)</b></td>
              </tr>
              <?php
              $hasil=mysqli_query($connect,"select * from tb_pemohon");
              while($r=mysqli_fetch_array($hasil)){
              ?>
              <tr>
                <td style="border: 1px solid; padding: 8px"><?php echo $r['nama_mahasiswa'];?></td>
                <td style="border: 1px solid; padding: 8px" align="center"><?php echo $r['ipk_mahasiswa'];?></td>
                <td style="border: 1px solid; padding: 8px">Rp. <?php echo $r['penghasilan_ortu'];?></td>
                <td style="border: 1px solid; padding: 8px" align="center"><?php echo $r['tanggungan_ortu'];?> Anak</td>
                <td style="border: 1px solid; padding: 8px" align="center"><?php echo $r['prestasi_mahasiswa'];?></td> 
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
        <div class="center" style="padding-top: 2.5%; margin-left: auto; margin-right: auto;">   
          <div align="center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah Calon Pemohon
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Data Calon Pemohon Beasiswa</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form method="post" action="tambahpemohon.php">
                  <div class="modal-body">
                    <div class="row">
                      <label style="padding-left:20px; margin:0px">Nama Mahasiswa</label>
                      <div style="padding: 10px 20px; width:100%;" class="form-group">
                        <input class="form-control" type="text" name="nama-mahasiswa" placeholder="Nama Mahasiswa..">
                      </div>
                      <label style="padding-left:20px; margin:0px">IPK Mahasiswa</label>
                        <div style="padding: 10px 20px; width:100%;" class="form-group">
                          <input class="form-control" type="text" name="ipk-mahasiswa" placeholder="IPK Mahasiswa..">
                        </div>
                      <label style="padding-left:20px; margin:0px">Penghasilan Orang Tua</label>
                        <div style="padding: 10px 20px; width:100%;" class="form-group">
                          <input class="form-control" type="text" name="penghasilan-ortu" placeholder="Penghasilan Orang Tua..">
                        </div>
                      <label style="padding-left:20px; margin:0px">Tanggungan Orang Tua</label>
                        <div style="padding: 10px 20px; width:100%;" class="form-group">
                          <input class="form-control" type="text" name="tanggungan-ortu" placeholder="Tanggungan Orang Tua..">
                        </div>
                      <label style="padding-left:20px; margin:0px">Banyak Prestasi Selama Kuliah (Nasional/International)</label>
                        <div style="padding: 10px 20px; width:100%;" class="form-group">
                          <input class="form-control" type="text" name="prestasi-mahasiswa" placeholder="Jumlah Prestasi Mahasiswa..">
                        </div> 
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> Cek Hasil Seleksi </button> 
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div style="padding-top:15px;" align="center">
            <hr><h2>-------------------------------------------- FUZZYFIKASI --------------------------------------------</h2><hr>
          </div>
          <div style="padding: 2.5% 5%; width:100%;" align="center">  
            <table >
              <tr>
                <td style="border: 1px solid; padding: 8px" rowspan=2 align="center"><b>Nama Mahasiswa</b></td>
                <td style="border: 1px solid; padding: 8px" colspan=3 align="center"><b>IPK Mahasiswa</b></td>
                <td style="border: 1px solid; padding: 8px" colspan=3 align="center"><b>Penghasilan Orang Tua</b></td>
                <td style="border: 1px solid; padding: 8px" colspan=3 align="center"><b>Tanggungan Orang Tua</b></td>
                <td style="border: 1px solid; padding: 8px" colspan=2 align="center"><b>Banyak Prestasi Selama Kuliah (Nasional/International)</b></td>
                <td style="border: 1px solid; padding: 8px" rowspan=2 align="center"><b>Skor</b></td>
                <td style="border: 1px solid; padding: 8px" rowspan=2 align="center"><b>Hasil Seleksi</b></td>
              </tr>
              <tr>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Rendah</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Cukup</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Tinggi</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Rendah</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Cukup</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Tinggi</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Sedikit</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Cukup</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Banyak</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Sedikit</b></td>
                <td style="border: 1px solid; padding: 8px" align="center"><b>Banyak</b></td>
              </tr>
              <?php
              $hasil=mysqli_query($connect,"select * from tb_pemohon");
              while($r=mysqli_fetch_array($hasil)){
              ?>
              <tr>
                <td style="border: 1px solid; padding: 8px"><?php echo $r['nama_mahasiswa'];?></td>

                <!-- IPK MAHASISWA -->

                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $ipkrendah = 0;
                  if($r['ipk_mahasiswa']<=2.75){
                    $ipkrendah = 1;
                  }elseif(($r['ipk_mahasiswa']>2.75)&&($r['ipk_mahasiswa']<3.25)){
                    $ipkrendah = (3.25 - $r['ipk_mahasiswa'])/(3.25 - 2.75);
                  }elseif($r['ipk_mahasiswa']>=3.25){
                    $ipkrendah = 0;
                  }
                  echo substr($ipkrendah,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $ipkcukup = 0;
                  if(($r['ipk_mahasiswa']<=3.00)||($r['ipk_mahasiswa']>=3.50)){
                    $ipkcukup = 0;
                  }elseif(($r['ipk_mahasiswa']>3.01)&&($r['ipk_mahasiswa']<3.25)){
                    $ipkcukup = ($r['ipk_mahasiswa'] - 3.01)/(3.25 - 3.01);
                  }elseif(($r['ipk_mahasiswa']>=3.25)&&($r['ipk_mahasiswa']<=3.50)){
                    $ipkcukup = (3.50 - $r['ipk_mahasiswa'])/(3.50 - 3.25);
                  }
                  echo substr($ipkcukup,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $ipktinggi = 0;
                  if(($r['ipk_mahasiswa']<3.45)){
                    $ipktinggi = 0;
                  }elseif(($r['ipk_mahasiswa']>=3.45)&&($r['ipk_mahasiswa']<3.80)){
                    $ipktinggi = ($r['ipk_mahasiswa'] - 3.45)/(3.80 - 3.45);
                  }elseif(($r['ipk_mahasiswa']>=3.80)){
                    $ipktinggi = 1;
                  }
                  echo substr($ipktinggi,0,6);
                  ?>
                </td>

                <!-- PENGHASILAN ORANG TUA -->

                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $penghasilanrendah = 0;
                  if($r['penghasilan_ortu']<=750000){
                    $penghasilanrendah = 1;
                  }elseif(($r['penghasilan_ortu']>750000)&&($r['penghasilan_ortu']<1250000)){
                    $penghasilanrendah = (1250000 - $r['penghasilan_ortu'])/(1250000 - 750000);
                  }elseif($r['penghasilan_ortu']>=1250000){
                    $penghasilanrendah = 0;
                  }
                  echo substr($penghasilanrendah,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $penghasilancukup = 0;
                  if(($r['penghasilan_ortu']<1000000)||($r['penghasilan_ortu']>2500000)){
                    $penghasilancukup = 0;
                  }elseif(($r['penghasilan_ortu']>=1000000)&&($r['penghasilan_ortu']<1750000)){
                    $penghasilancukup = ($r['penghasilan_ortu'] - 1000000)/(1750000 - 1000000);
                  }elseif(($r['penghasilan_ortu']>=1750000)&&($r['penghasilan_ortu']<=2500000)){
                    $penghasilancukup = (2500000 - $r['penghasilan_ortu'])/(2500000 - 1750000);
                  }
                  echo substr($penghasilancukup,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $penghasilantinggi = 0;
                  if(($r['penghasilan_ortu']<2000000)){
                    $penghasilantinggi = 0;
                  }elseif(($r['penghasilan_ortu']>=2000000)&&($r['penghasilan_ortu']<3000000)){
                    $penghasilantinggi = ($r['penghasilan_ortu'] - 2000000)/(3000000 - 2000000);
                  }elseif(($r['penghasilan_ortu']>=3000000)){
                    $penghasilantinggi = 1;
                  }
                  echo substr($penghasilantinggi,0,6);
                  ?>
                </td>

                <!-- TANGGUNGAN ORANG TUA -->
                
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $tanggungansedikit = 0;
                  if($r['tanggungan_ortu']<=1){
                    $tanggungansedikit = 1;
                  }elseif(($r['tanggungan_ortu']>1)&&($r['tanggungan_ortu']<3)){
                    $tanggungansedikit = (3 - $r['tanggungan_ortu'])/(3 - 1);
                  }elseif($r['tanggungan_ortu']>=3){
                    $tanggungansedikit = 0;
                  }
                  echo substr($tanggungansedikit,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $tanggungancukup = 0;
                  if(($r['tanggungan_ortu']<2)||($r['tanggungan_ortu']>6)){
                    $tanggungancukup = 0;
                  }elseif(($r['tanggungan_ortu']>=2)&&($r['tanggungan_ortu']<4)){
                    $tanggungancukup = ($r['tanggungan_ortu'] - 2)/(4 - 2);
                  }elseif(($r['tanggungan_ortu']>=4)&&($r['tanggungan_ortu']<=6)){
                    $tanggungancukup = (6 - $r['tanggungan_ortu'])/(6 - 4);
                  }
                  echo substr($tanggungancukup,0,6);
                  ?>
                </td>
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $tanggunganbanyak = 0;
                  if(($r['tanggungan_ortu']<3)){
                    $tanggunganbanyak = 0;
                  }elseif(($r['tanggungan_ortu']>=3)&&($r['tanggungan_ortu']<6)){
                    $tanggunganbanyak = ($r['tanggungan_ortu'] - 3)/(6 - 3);
                  }elseif(($r['tanggungan_ortu']>=6)){
                    $tanggunganbanyak = 1;
                  }
                  echo substr($tanggunganbanyak,0,6);
                  ?>
                </td>

                <!-- BANYAK PRESTASI -->

                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $prestasisedikit=0;
                  if($r['prestasi_mahasiswa']<2){
                    $prestasisedikit = 1;
                  }elseif(($r['prestasi_mahasiswa']>=2)&&($r['prestasi_mahasiswa']<4)){
                    $prestasisedikit = (4 - $r['prestasi_mahasiswa'])/(4 - 2);
                  }elseif($r['prestasi_mahasiswa']>=4){
                    $prestasisedikit = 0;
                  }
                  echo substr($prestasisedikit,0,6);
                  ?>
                </td>

                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $prestasibanyak=0;
                  if($r['prestasi_mahasiswa']<3){
                    $prestasibanyak = 0;
                  }elseif(($r['prestasi_mahasiswa']>=3)&&($r['prestasi_mahasiswa']<6)){
                    $prestasibanyak = ($r['prestasi_mahasiswa'] - 3)/(6 - 3);
                  }elseif($r['prestasi_mahasiswa']>=6){
                    $prestasibanyak = 1;
                  }
                  echo substr($prestasibanyak,0,6);
                  ?>
                </td>
                
                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $skor = array($ipkrendah,$ipkcukup,$ipktinggi,$penghasilanrendah,$penghasilancukup,$penghasilantinggi,$tanggungansedikit,$tanggungancukup,$tanggunganbanyak,$prestasisedikit,$prestasibanyak);
                  $skor = number_format(array_sum($skor),2);
                  echo $skor;  
                  ?>
                </td>

                <td style="border: 1px solid; padding: 8px" align="center">
                  <?php
                  $result = '';
                  
                  if(($ipkcukup>0)&&($penghasilancukup>0)&&($tanggungancukup>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipktinggi>0)&&($penghasilancukup>0)&&($tanggungancukup>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipkcukup>0)&&($penghasilanrendah>0)&&($tanggungancukup>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipktinggi>0)&&($penghasilanrendah>0)&&($tanggungancukup>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipkcukup>0)&&($penghasilanrendah>0)&&($tanggunganbanyak>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipktinggi>0)&&($penghasilanrendah>0)&&($tanggunganbanyak>0)&&($prestasibanyak>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipktinggi>0)&&($penghasilanrendah>0)&&($tanggunganbanyak>0)&&($prestasisedikit>0)){
                    $result = 'Diterima';
                  }

                  elseif(($ipktinggi>0)&&($penghasilanrendah>0)&&($tanggungancukup>0)&&($prestasisedikit>0)){
                    $result = 'Diterima';
                  }

                  elseif(($skor)>3.50){
                    $result = 'Diterima';
                  }

                  else{
                    $result = 'Tidak Diterima';
                  }

                  echo $result;
                  ?>
                </td>
              </tr>  
              <?php }?>
            </table>
            <div class="center" style="padding-top: 2.5%; margin-left: auto; margin-right: auto;">   
              <div align="center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRules">
                  Lihat Rules Penilaian
                </button>
                <div class="modal fade" id="modalRules" tabindex="-1" aria-labelledby="modalRulesLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header" style="padding-bottom:0px; margin-bottom:0px">
                        <h5 class="modal-title" style="padding-bottom:0px; padding-left:10px;" id="modalRulesLabel">Rules Penilaian Hasil Seleksi Beasiswa Menggunakan Logika Fuzzy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div style="padding: 10px 20px; width:100%;">
                            <table>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>Rules</b></td>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>IPK Mahasiswa</b></td>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>Penghasilan Orang Tua</b></td>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>Tanggungan Orang Tua</b></td>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>Banyak Prestasi Selama Kuliah (Nasional/International)</b></td>
                                <td style="border: 1px solid; padding: 8px" align="center"><b>Beasiswa</b></td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R1</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R2</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Tinggi</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R3</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R4</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Tinggi</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R5</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R6</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Tinggi</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R7</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Tinggi</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Banyak</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Sedikit</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R8</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Tinggi</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Rendah</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Cukup</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Sedikit</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid; padding: 8px" align="center">R9</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Skor di atas 3.50</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Skor di atas 3.50</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Skor di atas 3.50</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Skor di atas 3.50</td>
                                <td style="border: 1px solid; padding: 8px" align="center">Diterima</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>  
      </div> 
    </div>     
  </body>
  <style>
    .bg-image {
    background: white ;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    width: 100wh;
    position: relative;
    }
  </style>


