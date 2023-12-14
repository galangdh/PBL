<title>Edit Diklat Struktural</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <?php echo form_open_multipart('Cpegawai/c_pegawai/updateDikstruk/' . $con['id_diklat'] . '/' . $con['id_pegawai']); ?>
      <div class="form-group">
        <label for="nama_diklat" class="col-form-label">Nama Diklat</label>
        <input type="text" class="form-control" name="nama_diklat" value="<?php echo $con['nama_diklat'] ?>">
      </div>
      <div class="form-group">
        <label for="lokasi_diklat" class="col-form-label">Lokasi Diklat</label>
        <input type="text" class="form-control" name="lokasi_diklat" value="<?php echo $con['lokasi_diklat'] ?>">
      </div>
      <div class="form-group">
        <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" name="tanggal_mulai" value="<?php echo $con['tanggal_mulai'] ?>">
      </div>
      <div class="form-group">
        <label for="tanggal_selesai" class="col-form-label">Tanggal Selesai</label>
        <input type="text" class="form-control" name="tanggal_selesai" value="<?php echo $con['tanggal_selesai'] ?>">
      </div>
      <div class="form-group">
        <label for="berkas_validasi" class="col-form-label">Berkas Validasi</label>
        <input type="file" class="form-control" name="berkas_validasi" value="<?php echo $con['berkas_validasi'] ?>">
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
              
              