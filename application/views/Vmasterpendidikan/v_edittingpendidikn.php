<title>Edit Pendidikan</title>
<div class="card">
  <div class="card-header">
    <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan'); ?>" class="waves-effect waves-dark">
      <span><i class="fa-solid fa-arrow-left-long"></i> Kembali</span>
    </a>
  </div>
  <div class="card-block col-6">
    <form method="post" action="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/updateTingPen/' . $isi['id_tingpen']) ?>">
		<div class="form-group">
            <label for="tingkat_pendidikan" class="col-form-label">Tingkat Pendidikan</label>
            <input type="text" class="form-control" name="tingkat_pendidikan" value="<?php echo $isi['tingkat_pendidikan'] ?>">
    </div>
		<div>
			<button type="submit" class="btn btn-primary mt-3">Simpan</button>
		</div>
	</form>
  </div>
</div>
							