<div class="container mt-3">
<?php if($this->session->flashdata('flash')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<form action="" method="post">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Pencarian" name='keyword'>
  <div class="input-group-append">
    <button class="btn btn-outline-dark" type="submit">Search</button>
  </div>
</div>
</form>
	<a href="<?= base_url(); ?>product/tambah" type="submit" class="btn btn-dark">
		Tambah Data
</a>
	<table class="table table-striped table-light mt-3">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Harga</th>
				<th scope="col">Jenis</th>
				<th scope="col">Nama</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($isi as $datas) : ?>
			<tr>
				<th scope="row">
					<?= $datas['id']; ?>
				</th>
				<td>
					<?= $datas['harga']; ?>
				</td>
				<td>
					<?= $datas['jenis']; ?>
				</td>
				<td>
					<?= $datas['nama']; ?>
				</td>
				<td>
					<a href="<?= base_url(); ?>product/details/<?= $datas['id'] ?>" class="btn btn-sm btn-dark">Details</a>
					<a href="<?php echo base_url(); ?>product/ubah/<?= $datas['id'] ?>" class="btn btn-sm btn-secondary">Ubah Data</a>
					<a href="<?= base_url(); ?>product/hapus/<?= $datas['id'] ?>" onclick="return confirm('Ingin menghapus data?');" class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php if(empty($isi)) :?>
<div class="alert alert-warning" role="alert">
	Data mahasiswa tidak ditemukan.
</div>
<?php endif; ?>
</div>
