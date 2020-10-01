<!-- Akan menggunakan file template di folder layout -->
<?= $this->extend('layout_pjw/template'); ?>

<!-- Untuk mulai mengisi konten yang akan ditampilkan -->
<?= $this->section('content'); ?>

<!-- Tambah Data Audit -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="text-center">Tambah Data Audit </h3>
    </div>
  </div>
</div>

<!-- Form Tambah Data -->
<div class="container">
  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
</div>
</form>
<!-- Akhir Form -->
<!-- Mengakhiri konten -->
<?= $this->endSection(); ?>