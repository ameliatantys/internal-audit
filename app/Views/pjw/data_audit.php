<?= $this->extend('layout_pjw/template'); ?>

<!-- Untuk mulai mengisi konten yang akan ditampilkan -->
<?= $this->section('content'); ?>


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

<!-- <br>
<div class="container">
  <button type="button" class="btn btn-danger">Tambah Data</button>
</div>
<br> -->


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