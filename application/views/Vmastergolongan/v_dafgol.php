<title>Daftar Golongan</title>
<div class="card">
  <div class="card-header">
    <h3>Daftar Golongan</h3>
  </div>
  <div class="card-block table-border-style">
    <a href="<?php echo base_url('Cmastergolongan/c_dafgol/tambahDafgol'); ?>" class="waves-effect waves-dark">
      <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Data Golongan</span>
    </a>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Jenis Golongan</th>
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
            <td><?php echo $key['jenis_golongan'] ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo base_url('Cmastergolongan/c_dafgol/ubahDafgol/'.$key['id_jenis_golongan']) ?>">Edit</a>
              <a class="btn btn-danger" href="<?php echo base_url('Cmastergolongan/c_dafgol/') ?>">Delete</a> 
            </td>
          </tr>
        </tbody>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>