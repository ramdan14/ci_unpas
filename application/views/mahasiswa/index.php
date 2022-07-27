<div class="container mt-2">
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
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul class="list-group">
				<li class="list-group-item"><?= $mhs['nama']?> <a href=<?= base_url() . "mahasiswa/hapus/" . $mhs['id'] ?> class="badge badge-danger float-right" onclick = "return confirm('ya')" >delete</a></li>
    </ul>
			<?php endforeach ?>
		</div>
  </div>
</div>