<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

<nav class="navbar" style="background-color: #8c8c8c;">
    <div class="container-fluid" style="background-color: #8c8c8c;">
        <div class="d-flex">
          <a href="/" class="btn btn-outline-light ms-2">
              Refresh
          </a>
          <button type="button" class="btn btn-outline-light ms-2" data-bs-toggle="modal" data-bs-target="#Input">
              Masukan barang (Modal)
          </button>
          <a href="/insertbarangpage" target="_blank" class="btn btn-outline-light ms-2">
              Masukan barang (Popup)
          </a>
          <a href="https://github.com/GalihRizkyFahrezy/test_praktek_php_programmer/blob/main/README.md" target="_blank" class="btn btn-outline-light ms-2">
            Readme
          </a>
        </div>
      
        <form action="/" method="get" class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" name='search'>
            <button class="btn btn-light" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Modal untuk popup form input -->
<div class="modal fade" id="Input" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5">Tambah Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>

      <div class="modal-body">
        <form action="/insertbarang" method="post" enctype="multipart/form-data" id="formupload">
            @csrf
            <div class="d-flex mt-2">
                <label for="namabarang" class="col-2">Nama Barang</label>
                <input class="form-control" type="form" name="namabarang" id="namabarang" required>
            </div>

            <div class="d-flex mt-2">
                <label for="fotobarang" class="col-2">Foto Barang</label>
                <input class="form-control" type="file" name="fotobarang" id="fotobarang" accept=".jpg,.png" required>
            </div>
            <div class="alert alert-danger mt-2" role="alert" id="fotodiv" >
              <label id="fotoalert"></label>
            </div>

            <div class="d-flex mt-2">
                <label for="/hargabeli" class="col-2">Harga Beli</label>
                <input class="form-control" type="number" name="hargabeli" id="hargabeli" required>
            </div>

            <div class="d-flex mt-2">
                <label for="hargajual" class="col-2">Harga Jual</label>
                <input class="form-control" type="number" name="hargajual" id="hargajual" required>
            </div>

            <div class="d-flex mt-2">
                <label for="stok" class="col-2">Stok</label>
                <input class="form-control" type="number" name="stok" id="stok" required>
            </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Disiini adalah view.-->
    <div class="container mt-3">
      @if (session('success'))
        <div class="alert alert-primary " role="alert">
            {{ session('success') }}
        </div>
      @endif
      @if (session('failed'))
        <div class="alert alert-danger " role="alert">
            {{ session('failed') }}
        </div>
      @endif
      @if (session('edited'))
        <div class="alert alert-success " role="alert">
            {{ session('edited') }}
        </div>
      @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    
                      <td><b>Nama Barang</b></td>
                      <td><b>Foto Barang</b></td>
                      <td><b>Harga Beli</b></td>
                      <td><b>Harga Jual</b></td>
                      <td><b>Stok</b></td>
                      <td><b>Action</b></td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{"".$row->namabarang}}</td>
                    <td><img src="/barang/{{$row->fotobarang}}" style="width:50px"></td>
                    <td>{{$row->hargabeli}}</td>
                    <td>{{$row->hargajual}}</td>
                    <td>{{$row->stok}}</td>
                    <td>
                        <a href="/formedit/{{$row->id}}" class="btn btn-info">Edit</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            Hapus
                        </button>
                    </td>
                </tr>
                <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5">Alert!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apakah anda yakin ingin menghapus baris ini?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    
  <div class="ms-3">
    {{ $data->links() }}
  </div>

    <script src="/javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>