<title>Tambah Golongan</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url('Cmastergolongan/c_dafgol'); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <form method="post" action="insertDafgol">
		  <div class="form-group">
        <label for="jenis_golongan" class="col-form-label">Jenis Golongan</label>
        <input type="text" class="form-control" name="jenis_golongan">
      </div>
		  <div>
			 <button type="submit" class="btn btn-primary mt-3">Simpan</button>
		  </div>
	</form>
  </div>
</div>
							