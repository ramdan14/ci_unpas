<div class="container mt-2">
	<?php echo $this->uri->segment(2); ?>

<div class="row">
  </div>
  <div class="row">
		<div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
           <div class="form-text text-danger"><?= form_error('nama'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nrp</label>
          <input type="text" class="form-control" id="nama" name="nrp">
           <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan">
           <div class="form-text text-danger"><?= form_error('jurusan'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="text" class="form-control" id="email" name="email">
           <div class="form-text text-danger"><?= form_error('email'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
		</div>
  </div>
</div>