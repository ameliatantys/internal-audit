<?= $this->extend('layout_pjw/template'); ?>

<!-- Untuk mulai mengisi konten yang akan ditampilkan -->
<?= $this->section('content'); ?>


<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="text-center"> Internal Audit ISO:0707 E-Medical Center Buah Batu</h3>
        <h4 class="text-center">Lokasi Area Yakes Jawa Barat</h3>
    </div>
  </div>
</div>

<!-- Button tambah data -->
<br>
<div class="container">
  <button type="button" class="btn btn-danger">Tambah Deskripsi</button>
</div>



<br>
<!-- Untuk filter -->
<div class="container">
  <div class="form-inline">
    <div class="col-sm-2">
      <label class="d-inline-block">Jenis: </label>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pilih Jenis
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-inline">
          <button class="dropdown-item" type="button">ISO</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-2">
      <label class="d-inline-block">Area : </label>
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

    <div class="col-sm-2">
      <label class="d-inline-block">Status : </label>
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
  </div>

</div>
</div>
<br>

<!-- Tabel Semua Judul -->
<div class="container">
  <div class="col">
    <div class="row">
      <table class="table table-bordered table-sm table-hover ">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Unit</th>
            <th class="text-center">Deskripsi</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Akar Masalah</th>
            <th class="text-center">Tindakan Koreksi</th>
            <th class="text-center">Tindakan Korektif</th>
            <th class="text-center">PIC</th>
            <th class="text-center">Tenggat Waktu</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">SDM</td>
            <td class="text-center">5.4 Organizational Roles, Responsibilities, and Authoritie E-Medical Center Buah Batu sudah memiliki tim CMT
              dan terdokumentasikan namun belum dilakukan update sehingga beberapa personil yang resign atau ganti
              petugas belum terupdate di dokumen CHT.</td>
            <td class="text-center">OFI</td>
            <td class="text-center">Belum dilakukan review Tim CMT</td>
            <td class="text-center">Kalau ada tim CHT yang mengalami personir langsung dilakukan update Tim CMTnya</td>
            <td class="text-center"> </td>
            <td class="text-center">Aulia Devinna Annisafitri</td>
            <td class="text-center">11 November 2020</td>
            <td class="text-center">Sedang Diaudit</td>
            <td class="text-center">1</td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br>
<div class="container">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item"><a class="page-link" href="#">7</a></li>
      <li class="page-item"><a class="page-link" href="#">8</a></li>
      <li class="page-item"><a class="page-link" href="#">9</a></li>
      <li class="page-item"><a class="page-link" href="#">10</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>



<?= $this->endSection(); ?>