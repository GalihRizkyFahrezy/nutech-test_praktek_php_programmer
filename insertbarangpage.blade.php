<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="row justify-content-center mt-2">
        Tambah Barang
    </h2>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
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
                    <br>

                    <div class="d-flex mt-2">
                        <label for="hargabeli" class="col-2">Harga Beli</label>
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
                    <div class="mt-2">
                        <a href="/" class="btn btn-outline-secondary">Kembali</a>
                        <button type="submit" class="btn btn-outline-primary">simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="/javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>