<div class="container mt-3">
    <div class="card">
    <div class="card-header">
        <?= $judul ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">ID :<?= $satuan['id']; ?></h5>
        <p class="card-text">Nama Barang :<?= $satuan['nama']; ?></p>
        <p class="card-text">Jenis :<?= $satuan['jenis']; ?></p>
        <p class="card-text">Harga : Rp. <?= $satuan['harga']; ?></p>
        <a href="<?= base_url(); ?>product" class="btn btn-primary">Go Back</a>
    </div>
    </div>
</div>