<div class="container mt-2">
<div class="row">
<div class="col-md-6">
<?php if(validation_errors()) : ?>
  <div class="alert alert-danger" role="alert">
  <?= validation_errors()?>
  </div>
<?php endif ?>
</div>
  </div>
  <div class="row">
		<div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nrp</label>
          <input type="text" class="form-control" id="nama" name="nrp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
		</div>
  </div>
</div>