<title>Tambah Diklat Fungsional</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$peg[0]['id_pegawai']}"); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <?php echo form_open_multipart('Cpegawai/c_pegawai/insertDikfung/' . $peg[0]['id_pegawai']); ?>
      <div class="form-group">
        <label for="nama_diklat" class="col-form-label">Nama Diklat</label>
        <input type="text" class="form-control" name="nama_diklat">
      </div>
      <div class="form-group">
        <label for="tipe_diklat" class="col-form-label">Tipe Diklat</label>
        <input type="text" class="form-control" name="tipe_diklat">
      </div>
      <div class="form-group">
        <label for="jenis_diklat" class="col-form-label">Jenis Diklat</label>
        <input type="text" class="form-control" name="jenis_diklat">
      </div>
      <div class="form-group">
        <label for="tanggal_diklat" class="col-form-label">Tanggal Diklat</label>
        <input type="date" class="form-control" name="tanggal_diklat">
      </div>
      <div class="form-group">
        <label for="no_sertifikat" class="col-form-label">No Sertifikat</label>
        <input type="text" class="form-control" name="no_sertifikat">
      </div>
      <div class="form-group">
        <label for="penyelenggara" class="col-form-label">Penyelenggara</label>
        <input type="text" class="form-control" name="penyelenggara">
      </div>
      <div class="form-group">
        <label for="instansi" class="col-form-label">Instansi</label>
        <input type="text" class="form-control" name="instansi">
      </div>
      <div>
        <input type="hidden" name="id_pegawai" value="<?php echo $peg[0]['id_pegawai'] ?>">
      </div>
	    <div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
		  </div>
	  <?php echo form_close(); ?>
  </div>
</div>
							