<?= $this->extend('layout_pjw/template'); ?>

<!-- Untuk mulai mengisi konten yang akan ditampilkan -->
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-3 ml-auto">Selamat Datang, Tanti Amelia Sopya</div>
  </div>
</div>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="text-center">Data Internal Audit</h3>
        <h4 class="text-center">Yayasan Kesehatan Telkom</h3>
    </div>
  </div>
</div>

<br>
<div class="container">
  <button type="button" class="btn btn-danger">Tambah Data</button>
</div>
<br>

<!-- Untuk filter -->
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h6>Jenis:</h6>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pilih Jenis
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">ISO</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <h6>Area:</h6>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pilih Area
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <h6>Status:</h6>
      <div class="dropdown">
        <div class="btn-group col-sm-3">
          <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Status
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">All Status</button>
            <button class="dropdown-item" type="button">OPEN</button>
            <button class="dropdown-item" type="button">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </div>
  </div>
</div>

<!-- Tabel Semua Judul -->
<div class="container">
  <div class="col">
    <div class="row">
      <table class="table table-bordered table-sm table-hover ">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Jenis</th>
            <th class="text-center">Judul</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Area</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">1</td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">1</td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">1</td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">1</td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">1</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?= $this->endSection(); ?>