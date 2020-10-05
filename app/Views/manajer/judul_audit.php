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


<br>
<br>



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
            <td class="text-center">
              <a href="/pjw/data_audit"><svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
              </a>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

            </td>
          </tr>
          <tr>
            <td class="text-center">1</td>
            <td class="text-center">Internal ISMS</td>
            <td class="text-center">ISO200781:2002 TPK Sriwidjaya</td>
            <td class="text-center">2020</td>
            <td class="text-center">Yakes Jawa Timur</td>
            <td class="text-center">OPEN</td>
            <td class="text-center">
              <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-eye " fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>

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