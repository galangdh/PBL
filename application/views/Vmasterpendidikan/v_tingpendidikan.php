<title>Tingkat Pendidikan</title>
<div class="card">
  <div class="card-header">
    <h3>Tingkat Pendidikan</h3>
  </div>
  <div class="card-block table-border-style">
    <a href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/tambahTingPen'); ?>" class="waves-effect waves-dark">
      <span class="btn btn-primary sidebar-edit"><i class="fa-solid fa-user-plus"></i> Tambah Tingkat Pendidikan</span>
    </a>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Tingkat Pendidikan</th>
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
            <td><?php echo $key['tingkat_pendidikan'] ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo base_url('Cmasterpendidikan/c_tingpendidikan/ubahTingPen/'.$key['id_tingpen']) ?>">Edit</a>
              <a class="btn btn-danger" href="<?php echo base_url('Cmastergolongan/c_dafgol/') ?>">Delete</a> 
            </td>
          </tr>
        </tbody>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>