<!-- Akan menggunakan file template di folder layout -->
<?= $this->extend('layout_pjw/template'); ?>

<!-- Untuk mulai mengisi konten yang akan ditampilkan -->
<?= $this->section('content'); ?>

<br>
<br>
<!-- Tambah Data Audit -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="text-center">Tambah Data Audit </h3>
    </div>
  </div>
</div>

<br>


<!-- Form Tambah Data -->
<div class="container">
  <form>
    <!-- Form Isi TPK -->
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">TPK</label>
      <div class="col-sm-8">
        <select class="form-control " id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <!-- Akhir Form Isi TPK -->
    </div>
    <!-- Form Isi PIC -->
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">PIC</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <!-- Akhir Form Isi PIC -->
    </div>
    <!-- Form Isi Jenis -->
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <!-- Akhir Form Isi Jenis -->
    </div>
    <!-- Form Isi Judul -->
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
      <!-- Akhir Form Isi Judul -->
    </div>
    <!-- Form Isi Status -->
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <!-- Akhir Form Isi Status -->
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-danger">Tambah Data</button>
        <button type="submit" class="btn btn-primary">Kembali</button>
      </div>
    </div>
</div>
</form>
<!-- Akhir Form -->
<!-- Mengakhiri konten -->
<?= $this->endSection(); ?>