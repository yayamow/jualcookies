<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EVENT</title>
  <!-- Gunakan helper asset() Laravel untuk file publik -->
  <link rel="stylesheet" href="{{ asset('css/style_event.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script>
    function showContent(contentId) {
      const contents = document.querySelectorAll('.rule-item');
      contents.forEach(content => content.style.display = 'none');
      document.getElementById(contentId).style.display = 'flex';
    }

    function redirectToDashboard() {
      window.location.href = "{{ asset('dashboard') }}"; // arahkan ke file publik jika dashboard bukan route
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="header">
        <div class="title" onclick="redirectToDashboard()">MLAKURASO</div>
      </div>
      <div class="list-item" onclick="showContent('event-start')">
        <div class="icon"></div>
        <div class="text">Event</div>
      </div>
    </div>

    <div class="content">
      <div class="rules">
        <div id="event-start" class="rule-item" style="display: none;">
          <div class="rule-title">Event Berlangsung</div>

          <!-- Event Cards -->
          <div class="card mb-3">
            <img src="{{ asset('img/resize.png') }}" class="card-img-top img-fluid" alt="Event 1">
            <div class="card-body bg-light">
              <h5 class="card-title">BAZAAR KULINER</h5>
              <p class="card-text">Lokasi : PAKUBA</p>
              <p class="card-text">Tanggal : 10-13 Oktober 2024</p>
              <a href="#" class="btn btn-primary">Detail</a>
            </div>
          </div>

          <div class="card mb-3">
            <img src="{{ asset('img/gambar1.png') }}" class="card-img-top img-fluid" alt="Event 2">
            <div class="card-body bg-light">
              <h5 class="card-title">FOOD FESTIVAL</h5>
              <p class="card-text">Lokasi : BTC</p>
              <p class="card-text">Tanggal : 16-20 Oktober 2024</p>
              <a href="#" class="btn btn-primary">Detail</a>
            </div>
          </div>

          <div class="card mb-3">
            <img src="{{ asset('img/gambar3.png') }}" class="card-img-top img-fluid" alt="Event 3">
            <div class="card-body bg-light">
              <h5 class="card-title">BAZAR KULINER</h5>
              <p class="card-text">Lokasi : Night market Tiban</p>
              <p class="card-text">Tanggal : 10-13 Oktober 2024</p>
              <a href="#" class="btn btn-primary">Detail</a>
            </div>
          </div>

          <div class="card mb-3">
            <img src="{{ asset('img/gambar2.png') }}" class="card-img-top img-fluid" alt="Event 4">
            <div class="card-body bg-light">
              <h5 class="card-title">PESTA RAKYAT</h5>
              <p class="card-text">Lokasi : Harbour Bay</p>
              <p class="card-text">Tanggal : 27 Nov - 30 Desember 2024</p>
              <a href="#" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>

        <!-- Tombol Tambah Data -->
        <div class="col-md-10 p-5 pt-2">
          <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
            <i class="fas fa-plus-circle me-2"></i> TAMBAH DATA EVENT
          </button>

          <!-- Modal Tambah Data -->
          <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahDataLabel">Tambah Event</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="lokasi" class="form-label">Lokasi</label>
                      <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                    </div>
                    <div class="mb-3">
                      <label for="waktu" class="form-label">Waktu</label>
                      <input type="date" class="form-control" id="waktu" name="waktu" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Tabel Dummy Data Event -->
          <h3 class="mt-4">Daftar Event Coming Soon</h3>
          <hr>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>LOKASI</th>
                <th>WAKTU</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Festival Musik</td>
                <td>Alun-alun Kota</td>
                <td>2024-11-01</td>
                <td><button class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Hapus</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Pameran Buku</td>
                <td>Gedung Serbaguna</td>
                <td>2024-12-10</td>
                <td><button class="btn btn-sm btn-warning">Edit</button> <button class="btn btn-sm btn-danger">Hapus</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
