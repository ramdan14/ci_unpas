<div class="container mt-2">
<div class="row">
  </div>
  <div class="row">
		<div class="col-md-6">
      <form action="" method="post">
          <input type="text" class="form-control" id="id" name="id" value="<?= $mahasiswa['id']?>" hidden>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']?>">
           <div class="form-text text-danger"><?= form_error('nama'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nrp</label>
          <input type="text" class="form-control" id="nama" name="nrp" value="<?= $mahasiswa['nrp']?>">
           <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan']?>">
           <div class="form-text text-danger"><?= form_error('jurusan'); ?></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']?>">
           <div class="form-text text-danger"><?= form_error('email'); ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
		</div>
  </div>
</div>