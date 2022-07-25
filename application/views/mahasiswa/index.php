<div class="container mt-2">
  <div class="row">
		<div class="col-md-6">
		<h3>Mahasiswa</h3>
    <ul class="list-group">
			<?php foreach ($mahasiswa as $mhs) :?>
				<li class="list-group-item"><?= $mhs['nama']?></li>
			<?php endforeach ?>
    </ul>
		</div>
  </div>
</div>