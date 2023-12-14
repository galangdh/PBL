<title>Tambah Golongan</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url("Cpegawai/c_pegawai/getAllData/{$con['id_pegawai']}"); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <?php echo form_open_multipart('Cpegawai/c_pegawai/updateGolongan/' . $con['id_golongan'] . '/' .$con['id_pegawai']); ?>
		  <div class="form-group">
        <label for="id_jenis_golongan" class="col-form-label">Golongan</label>
        <select name="id_jenis_golongan" class="form-control">
          <?php foreach ($mastergol as $key) : ?>
            <?php $cek = ($key['id_jenis_golongan'] == $con['id_jenis_golongan'])? "selected" : ""; ?>
            <option value="<?php echo $key['id_jenis_golongan'] ?>"<?php echo $cek ?>><?php echo $key['jenis_golongan'] ?></option> 
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="lama_tahun" class="col-form-label">Lama Tahun</label>
        <input type="text" class="form-control" name="lama_tahun" value="<?php echo $con['lama_tahun'] ?>">
      </div>
      <div class="form-group">
        <label for="lama_bulan" class="col-form-label">Lama Bulan</label>
        <input type="text" class="form-control" name="lama_bulan" value="<?php echo $con['lama_bulan'] ?>">
      </div>
      <div class="form-group">
        <label for="tmt_golongan" class="col-form-label">Tanggal Mulai Tugas</label>
        <input type="date" class="form-control" name="tmt_golongan" value="<?php echo $con['tmt_golongan'] ?>">
      </div>
      <div class="form-group">
        <label for="tanggal_sk" class="col-form-label">Tanggal SK</label>
        <input type="date" class="form-control" name="tanggal_sk" value="<?php echo $con['tanggal_sk'] ?>">
      </div>
      <div class="form-group">
        <label for="nomor_sk" class="col-form-label">Nomor SK</label>
        <input type="text" class="form-control" name="nomor_sk" value="<?php echo $con['nomor_sk'] ?>">
      </div> 
      <div class="form-group">
        <label for="tanggal_bkn" class="col-form-label">Tanggal BKN</label>
        <input type="date" class="form-control" name="tanggal_bkn" value="<?php echo $con['tanggal_bkn'] ?>">
      </div>
      <div class="form-group">
        <label for="nomor_bkn" class="col-form-label">Nomor BKN</label>
        <input type="text" class="form-control" name="nomor_bkn" value="<?php echo $con['nomor_bkn'] ?>">
      </div>
      <div class="form-group">
        <label for="jenis_kp" class="col-form-label">Jenis KP</label>
        <input type="text" class="form-control" name="jenis_kp" value="<?php echo $con['jenis_kp'] ?>">
      </div>
      <div class="form-group">
        <label for="file_sk" class="col-form-label">File SK</label>
        <input type="file" class="form-control" name="file_sk" value="<?php echo $con['file_sk'] ?>">
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
							