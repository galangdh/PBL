<title>Data Dosen</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url('Cdafdosen/c_dafdosen'); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block">
    <div class="col-lg-12 col-xl-12">
      <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs " role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#data_utama" role="tab"><i class="icofont icofont-home"></i>Data Utama</a>
            <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pendidikan" role="tab"><i class="icofont icofont-ui-user "></i>Riwayat Pendidikan</a>
            <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#jabfung" role="tab"><i class="icofont icofont-ui-message"></i>Jabatan Fungsional</a>
             <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#jabstruk" role="tab"><i class="icofont icofont-ui-settings"></i>Jabatan Struktural</a>
          <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#golongan" role="tab"><i class="icofont icofont-ui-settings"></i>Golongan</a>
          <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#dikfung" role="tab"><i class="icofont icofont-ui-settings"></i>Diklat Fungsional</a>
          <div class="slide"></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#dikstruk" role="tab"><i class="icofont icofont-ui-settings"></i>Diklat Struktural</a>
          <div class="slide"></div>
          </li>
        </ul>
      <!-- Tab panes -->
        <div class="tab-content card-block">
          <!-- DATA UTAMA START -->
          <div class="tab-pane active" id="data_utama" role="tabpanel">
            <?php echo form_open_multipart('Cpegawai/c_pegawai/editDataUtama/'. $peg[0]['id_pegawai']) ; ?>
              <div class="mb-3">
                <img src="<?php echo base_url($peg[0]['foto'])?>" width="150">
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto Pegawai</label>
                <input class="form-control" type="file" name="foto" value="<?php echo($peg[0]['foto'])?>">
              </div>                      
              <div class="form-group">
                <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $peg[0]['nama_pegawai'] ?>">
              </div>
              <div class="form-group">
                <label for="nip" class="col-form-label">NIP</label>
                <input type="text" class="form-control" name="nip" value="<?php echo $peg[0]['nip'] ?>">
              </div>
              <div class="form-group">
                <label for="nidn" class="col-form-label">NIDN</label>
                <input type="text" class="form-control" name="nidn" value="<?php echo $peg[0]['nidn'] ?>">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <?php foreach ($gender as $key) { ?>
                    <?php $cek = ($key['nama_gender'] == $peg[0]['jenis_kelamin'])? "selected" : ""; ?>
                    <option value="<?php echo $key['nama_gender'] ?>" <?php echo $cek ?>><?php echo $key['nama_gender'] ?></option> 
                  <?php } ?>
                  <!-- <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="laki-laki">Laki-laki</option> -->
                </select>
              </div>
              <div class="form-group">
                  <label for="no_kartupegawai" class="col-form-label">No Kartu Pegawai</label>
                  <input type="text" class="form-control" name="no_kartupegawai" value="<?php echo $peg[0]['no_kartupegawai'] ?>">
              </div>
              <div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
              </div>
            <?php form_close(); ?>
          </div>
          <!-- DATA UTAMA END -->
          <!-- PENDIDIKAN START -->
          <div class="tab-pane" id="pendidikan" role="tabpanel">
            <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahPendidikan/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark">
              <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Pendidikan</span>
            </a>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tingkat Pendidikan</th>
                    <th>Nama Sekolah</th>
                    <th>Tanggal Lulus</th>
                    <th>No Ijazah</th>
                    <th>Jurusan</th>
                    <th>Gelar Depan</th>
                    <th>Gelar Belakang</th>
                    <th>File Ijazah</th>
                    <th>Aksi</th>
                </thead>
                <?php 
                  $no = 1;
                  foreach ($pendidikan as $pen) :
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pen['tingkat_pendidikan'] ?></td>
                    <td><?php echo $pen['nama_sekolah'] ?></td>
                    <td><?php echo date("d-m-Y", strtotime($pen['tanggal_lulus'])); ?></td>
                    <td><?php echo $pen['no_ijazah'] ?></td>
                    <td><?php echo $pen['jurusan'] ?></td>
                    <td><?php echo $pen['gelar_depan'] ?></td>
                    <td><?php echo $pen['gelar_belakang'] ?></td>
                    <td><a href="<?php echo base_url($pen['file_ijazah'])?>" target="_blank"><img src="<?php echo base_url($pen['file_ijazah'])?>" width="130"></a></td>                                             
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editPendidikan/' . $pen['id_pegawai'] . '/' . $pen['id_pendidikan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusPendidikan/' . $pen['id_pegawai'] . '/' . $pen['id_pendidikan']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
          <!-- PENDIDIKAN END -->

          <div class="tab-pane" id="jabfung" role="tabpanel">
            <p class="m-0">jabatan fungsional galang</p>
          </div>
          <div class="tab-pane" id="jabstruk" role="tabpanel">
            <p class="m-0">jabatan struktural</p>
          </div>
          <!-- GOLONGAN START -->
          <div class="tab-pane" id="golongan" role="tabpanel">
            <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahGolongan/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark">
              <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Golongan</span>
            </a>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Golongan</th>
                    <th>Lama Tahun</th>
                    <th>Lama Bulan</th>
                    <th>Tanggal Mulai Tugas</th>
                    <th>Tanggal SK</th>
                    <th>Nomor SK</th>
                    <th>Tanggal BKN</th>
                    <th>Nomor BKN</th>
                    <th>Jenis KP</th>
                    <th>File SK</th>
                    <th>Aksi</th>
                </thead>
                <?php 
                  $no = 1;
                  foreach ($golongan as $gol) :
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $gol['jenis_golongan'] ?></td>
                    <td><?php echo $gol['lama_tahun'] ?></td>
                    <td><?php echo $gol['lama_bulan'] ?></td>
                    <td><?php echo date("d-m-Y", strtotime($gol['tmt_golongan'])); ?></td>
                    <td><?php echo date("d-m-Y", strtotime($gol['tanggal_sk'])); ?></td>
                    <td><?php echo $gol['nomor_sk'] ?></td>
                    <td><?php echo date("d-m-Y", strtotime($gol['tanggal_bkn'])); ?></td>
                    <td><?php echo $gol['nomor_bkn'] ?></td>
                    <td><?php echo $gol['jenis_kp'] ?></td>
                    <td><a href="<?php echo base_url($gol['file_sk'])?>" target="_blank"><img src="<?php echo base_url($gol['file_sk'])?>" width="130"></a></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editGolongan/' . $gol['id_pegawai'] . '/' . $gol['id_golongan']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusGolongan/' . $gol['id_pegawai'] . '/' . $gol['id_golongan']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a> 
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
          <!-- GOLONGAN END -->
          <!-- DIKLAT FUNGSIONAL START -->
          <div class="tab-pane" id="dikfung" role="tabpanel">
            <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahDikfung/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark">
              <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Diklat Fungsional</span>
            </a>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Diklat</th>
                    <th>Tipe Diklat</th>
                    <th>Jenis Diklat</th>
                    <th>Tanggal Diklat</th>
                    <th>No Sertifikat</th>
                    <th>Penyelenggara</th>
                    <th>Instansi</th>
                    <th>Aksi</th>
                </thead>
                <?php 
                  $no = 1;
                  foreach ($diklatFungsional as $dikfung) :
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dikfung['nama_diklat'] ?></td>
                    <td><?php echo $dikfung['tipe_diklat'] ?></td>
                    <td><?php echo $dikfung['jenis_diklat'] ?></td>
                    <td><?php echo date("d-m-Y", strtotime($dikfung['tanggal_diklat'])); ?></td>
                    <td><?php echo $dikfung['no_sertifikat'] ?></td>
                    <td><?php echo $dikfung['penyelenggara'] ?></td>
                    <td><?php echo $dikfung['instansi'] ?></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikfung/' . $dikfung['id_pegawai'] . '/' . $dikfung['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusDikfung/' . $dikfung['id_pegawai'] . '/' . $dikfung['id_diklat']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
          <!-- DIKLAT FUNGSIONAL END -->
          <!-- DIKLAT STRUKTUTAL START -->
          <div class="tab-pane" id="dikstruk" role="tabpanel">
            <a href="<?php echo base_url('Cpegawai/c_pegawai/tambahDikstruk/' . $peg[0]['id_pegawai']); ?>" class="waves-effect waves-dark">
            <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Diklat Struktural</span>
            </a>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Diklat</th>
                    <th>Lokasi Diklat</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Berkas Validasi</th>
                    <th>Aksi</th>
                </thead>
                <?php 
                  $no = 1;
                  foreach ($diklatStruktural as $dikstruk) :
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dikstruk['nama_diklat'] ?></td>
                    <td><?php echo $dikstruk['lokasi_diklat'] ?></td>
                    <td><?php echo date("d-m-Y", strtotime($dikstruk['tanggal_mulai'])); ?></td>
                    <td><?php echo date("d-m-Y", strtotime($dikstruk['tanggal_selesai'])); ?></td>
                    <td><a href="<?php echo base_url($dikstruk['berkas_validasi'])?>" target="_blank"><img src="<?php echo base_url($dikstruk['berkas_validasi'])?>" width="130"></a></td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo base_url('Cpegawai/c_pegawai/editDikstruk/' . $dikstruk['id_pegawai'] . '/' . $dikstruk['id_diklat']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('Cpegawai/c_pegawai/hapusDikstruk/' . $dikstruk['id_pegawai'] . '/' . $dikstruk['id_diklat']); ?>" onclick="return confirm_hapus()"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
          <!-- DIKLAT STRUKTUTAL END-->
        </div>
    </div>
  </div>
</div>