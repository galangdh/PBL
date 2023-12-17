<title>Daftar Dosen</title>
<div class="card">
  <div class="card-header">
    <h3>Daftar Dosen</h3>
  </div>
  <div class="card-block table-border-style">
    <a href="<?php echo base_url('Cdafdosen/c_dafdosen/tambahDosen'); ?>" class="waves-effect waves-dark">
      <span><button class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Dosen</button></span>
    </a>
		  <div class="col-md-6">
      <form action="<?php echo base_url('Cdafdosen/c_dafdosen/pencarian'); ?>" method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="cari nama atau nomor pegawai" name="keyword" autocomplete="off" autofocus>
        <input class="btn btn-primary" type="submit" name="submit">
        </div>
      </form>
    </div>
  </div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto Dosen</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
       <?php 
          $no = 1;
          foreach ($isi->result_array() as $key) : 
        ?>
        <tbody>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><img src="<?php echo base_url($key['foto'])?>" width="130"></td>
            <td><?php echo $key['nip'] ?></td>
            <td><?php echo $key['nama_pegawai'] ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo base_url('Cdafdosen/c_dafdosen/editPegawai/'.$key['id_pegawai']) ?>">Detail</a>
              <a class="btn btn-danger" href="<?php echo base_url('Cdafdosen/c_dafdosen/hapusPegawai/'.$key['id_pegawai']) ?>" onclick="return confirm_hapus()">Delete</a> 
            </td>
          </tr>
        </tbody>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>
