<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="row justify-content-center mt-2">
        Edit Barang
    </h2>

    </h2>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <form action="/editbarang/{{$data->id}}" method="post" enctype="multipart/form-data" id="formupload">
                    @csrf
                    <div class="d-flex mt-2">
                            <label for="namabarang" class="col-2">Nama Barang</label>
                            <input class="form-control" type="form" name="namabarang" id="namabarang" value="{{$data->namabarang}}" readonly>
                        </div>

                        <div class="d-flex mt-2">
                            <label for="fotobarang" class="col-2">Foto Barang</label>
                            <input class="form-control" type="file" name="fotobarang" id="fotobarang" value="{{$data->fotobarang}}" accept=".jpg,.png">
                        </div>
                        <div class="alert alert-danger mt-2" role="alert" id="fotodiv" >
                            <label id="fotoalert"></label>
                        </div>

                        <div class="d-flex mt-2">
                            <label for="/hargabeli" class="col-2">Harga Beli</label>
                            <input class="form-control" type="number" name="hargabeli" id="hargabeli" value="{{$data->hargabeli}}" required>
                        </div>

                        <div class="d-flex mt-2">
                            <label for="hargajual" class="col-2">Harga Jual</label>
                            <input class="form-control" type="number" name="hargajual" id="hargajual" value="{{$data->hargajual}}" required>
                        </div>

                        <div class="d-flex mt-2">
                            <label for="stok" class="col-2">Stok</label>
                            <input class="form-control" type="number" name="stok" id="stok" value="{{$data->stok}}" required>
                        </div>

                        <div class="d-flex mt-2">
                            <a href="/" type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/javascript/index.js"></script>
</body>
</html>