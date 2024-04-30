<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta input type="text" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="card col-md-4 mt-3 mx-auto">
            <div class="judul mx-auto mb-5">
                PROFILE
            </div>

            <form method="POST" action="{{ route('user_data.store') }}">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class=" mx-auto">
                            <div class="form mb-5">
                                <div class="mb-3">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="nama lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="tempat lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="tanggal lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="provinsi_ktp">Povinsi KTP</label>
                                    <input type="text" name="provinsi_ktp" class="form-control" id="provinsi_ktp" placeholder="provinsi di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="kabupaten_kota_ktp">Kabupate/Kota KTP</label>
                                    <input type="text" name="kabupaten_kota_ktp" class="form-control" id="kabupaten_kota_ktp" placeholder="kabupaten/kota di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="kecamatan_ktp">Kecamatan KTP</label>
                                    <input type="text" name="kecamatan_ktp" class="form-control" id="kecamatan_ktp" placeholder="kecamatan di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="kelurahan_ktp">Kelurahan KTP</label>
                                    <input type="text" name="kelurahan_ktp" class="form-control" id="kelurahan_ktp" placeholder="kelurahan di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="rt_ktp">RT KTP</label>
                                    <input type="text" name="rt_ktp" class="form-control" id="rt_ktp" placeholder="rt di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="rw_ktp">RW KTP</label>
                                    <input type="text" name="rw_ktp" class="form-control" id="rw_ktp" placeholder="rw di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="kode_pos_ktp'">Kode Pos KTP</label>
                                    <input type="text" name="kode_pos_ktp'" class="form-control" id="kode_pos_ktp'" placeholder="kode pos di ktp">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_domisili">Alamat Domisili</label>
                                    <input type="text" name="alamat_domisili" class="form-control" id="alamat_domisili" placeholder="alamat domisili">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </body>
</html>
