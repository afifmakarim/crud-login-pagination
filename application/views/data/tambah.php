<div class="container mt-3">
<div class="card">
  <div class="card-header">
    Tambah Data
  </div>
  <div class="card-body">
    <?php if(validation_errors()): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?=validation_errors();?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
  <form action="" method="post">
        <div class="form-group">
    <label for="harga">Harga</label>
    <select class="form-control" id="harga" name="harga">
      <option>5000</option>
      <option>2000</option>
      <option>3200</option>
      <option>4600</option>
      <option>5233</option>
    </select>
    </div>
        <div class="form-group">
        <label for="jenis">Jenis</label>
        <input type="text" class="form-control" id="jenis" name="jenis">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="tombol float-right">
      <a href="<?= base_url(); ?>crud" class="btn btn-light">Cancel</a>
      <button type='submit' name='tambah' class='btn btn-dark'>Submit Data</button>
      </div>
</form>
      </div>
  </div>
</div>

