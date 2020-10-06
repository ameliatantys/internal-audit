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
  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg> Tambah Deskripsi
  </button>
  <!-- Modal -->
  <div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Deskripsi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <!-- Form Isi TPK -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Unit</label>
              <div class="col-sm-10">
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
              <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
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
            <!-- Form Isi Deskripsi -->
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <!-- Akhir Form Isi Deskripsi -->
            </div>
            <!-- Form Isi Akar Masalah -->
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Akar Masalah</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
              <!-- Akhir Form Akar Masalah -->
            </div>
            <!-- Form Isi Tindakan Koreksi -->
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Tindakan Koreksi</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
              <!-- Akhir Form Isi Tindakan Koreksi-->
            </div>

            <div class="form-group row">
              <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Dokumen</label>
              <div class="col-sm-10">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

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
            <!-- <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Tambah Data</button>
                <button type="submit" class="btn btn-primary">Kembali</button>
              </div>
            </div> -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>



<br>
<!-- Untuk filter -->
<div class="container">
  <div class="form-inline">
    <div class="col-sm-3">
      <label class="d-inline-block">Kategori: </label>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          -----Pilih Kategori-----
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-inline">
          <button class="dropdown-item" type="button">ISO</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <label class="d-inline-block">Unit : </label>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ---------Pilih Unit----------
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <label class="d-inline-block">Status : </label>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          --------Pilih Status--------
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <form class="form-inline">
        <input class="form-controlbtn btn-sm btn-outline" type="search" placeholder="Search" aria-label="Search">
        <button class="btn-sm btn-outline-danger" type="submit">Search</button>
      </form>
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
            <th class="text-center">Aksi Audit</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">SDM</td>
            <td class="">5.4 Organizational Roles, Responsibilities, and Authoritie E-Medical Center Buah Batu sudah memiliki tim CMT
              dan terdokumentasikan namun belum dilakukan update sehingga beberapa personil yang resign atau ganti
              petugas belum terupdate di dokumen CHT.</td>
            <td class="text-center">OFI</td>
            <td class="">Belum dilakukan review Tim CMT</td>
            <td class="">Kalau ada tim CHT yang mengalami personir langsung dilakukan update Tim CMTnya</td>
            <td class=""> Kalau ada tim CHT yang mengalami personir langsung dilakukan update Tim CMTnya</td>
            <td class="text-center">Aulia Devinna Annisafitri</td>
            <td class="text-center">11/11/2020</td>
            <td class="text-center">Sedang Diaudit</td>
            <td class="">
              <a href="/pjw/data_audit"><svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
              </a>
              <a href="/pjw/edit_judul"><svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="red" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
              </a>
            </td>

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