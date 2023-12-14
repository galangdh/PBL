<title>Edit Pendidikan</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <?php echo form_open_multipart('Cpegawai/c_pegawai/updatePendidikan/' . $con['id_pendidikan'] . '/' . $con['id_pegawai']); ?>
      <div class="form-group">
        <label for="id_tingpen" class="col-form-label">Tingkat Pendidikan</label>
        <select name="id_tingpen" class="form-control">
          <?php foreach ($masterpen as $key) { ?>
            <?php $cek = ($key['id_tingpen'] == $con['id_tingpen'])? "selected" : ""; ?>
            <option value="<?php echo $key['id_tingpen'] ?>" <?php echo $cek ?>><?php echo $key['tingkat_pendidikan'] ?></option> 
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="nama_sekolah" class="col-form-label">Nama Sekolah</label>
        <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $con['nama_sekolah'] ?>">
      </div>
      <div class="form-group">
        <label for="tanggal_lulus" class="col-form-label">Tanggal Lulus</label>
        <input type="date" class="form-control" name="tanggal_lulus" value="<?php echo $con['tanggal_lulus'] ?>">
      </div>
      <div class="form-group">
        <label for="no_ijazah" class="col-form-label">No Ijazah</label>
        <input type="text" class="form-control" name="no_ijazah" value="<?php echo $con['no_ijazah'] ?>">
      </div>
      <div class="form-group">
        <label for="jurusan" class="col-form-label">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="<?php echo $con['jurusan'] ?>">
      </div>
      <div class="form-group">
        <label for="gelar_depan" class="col-form-label">Gelar Depan</label>
        <input type="text" class="form-control" name="gelar_depan" value="<?php echo $con['gelar_depan'] ?>">
      </div>
      <div class="form-group">
        <label for="gelar_belakang" class="col-form-label">Gelar Belakang</label>
        <input type="text" class="form-control" name="gelar_belakang" value="<?php echo $con['gelar_belakang'] ?>">
      </div>
      <div class="form-group">
        <label for="file_ijazah" class="col-form-label">File Ijazah</label>
        <input type="file" class="form-control" name="file_ijazah" value="<?php echo $con['file_ijazah'] ?>">
      </div>
      <div>
        <input type="hidden" name="id_pegawai" value="<?php echo $con['id_pegawai'] ?>">
      </div>
      <div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
      </div> 
    <?php echo form_close(); ?>
  </div>
</div>
              