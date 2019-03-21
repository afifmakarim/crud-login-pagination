<div class="container mt-3">
<div class="card">
  <div class="card-header">
    Ubah Data
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
        <?php foreach( $harga as $h ) : ?>
        <?php if($h == $satuan['harga']) : ?>
        <option value="<?= $h ?>" selected><?= $h ?></option>
        <?php else : ?>
        <option value="<?= $h ?>"><?= $h ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
    </div>
        <div class="form-group">
        <label for="jenis">Jenis</label>
        <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $satuan['jenis']?>">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $satuan['nama']?>">
      </div>
      <div class="tombol float-right">
      <a href="<?= base_url(); ?>product" class="btn btn-light">Cancel</a>
      <button type='submit' name='ubah' class='btn btn-dark'>Ubah Data</button>
      </div>
</form>
      </div>
  </div>
</div>

