<div class="container mt-2">
	<?php echo $this->uri->segment(1); ?>
  <div class="row">
    <div class="col-md-6">
      <?php if ($this->session->flashdata('flash')) : ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif ?>

      <a href="<?= base_url()?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <div class="row">
		<div class="col-md-6">
		<h3>Mahasiswa</h3>
		<form action="" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="cari data" name="keyword">
				<button class="btn btn-outline-secondary" type="submit">Cari</button>
			</div>
		</form>
		<?php if (empty($mahasiswa)) : ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Data <strong>tidak ditemukan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif ?>
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul class="list-group">
				<li class="list-group-item">
					<?= $mhs['nama']?> 
					<a href=<?= base_url() . "mahasiswa/hapus/" . $mhs['id'] ?> class="badge badge-danger float-right m-1" onclick = "return confirm('yakin akan menghapus')" >delete</a>
					<a href=<?= base_url() . "mahasiswa/" . $mhs['id']?> class="badge badge-info float-right m-1">detail</a>
					<a href=<?= base_url() . "edit-mahasiswa/" . $mhs['id'] ?> class="badge badge-warning float-right m-1" >edit</a>
				</li>
    </ul>
			<?php endforeach ?>
		</div>
  </div>
</div>