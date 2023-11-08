<?php

?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Request Parts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <h2>Form Request Parts</h2>
                <div class="form-group">
                    <label for="nama_parts">Nama Parts :</label>
                    <input type="text" class="form-control" id="nama_parts" name="nama_parts" placeholder="Masukkan nama parts">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="package_parts">Package :</label>
                    <input type="text" class="form-control" id="package_parts" name="package_parts" placeholder="Masukkan package parts">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipe_parts">Tipe :</label>
                    <select class="form-control" id="tipe_parts" name="tipe_parts">
                        <option value="tipe ">Merah</option>
                        <option value="green">Hijau</option>
                        <option value="blue">Biru</option>
                        <option value="yellow">Kuning</option>
                        <option value="orange">Oranye</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="merek_parts">Merek :</label>
                    <input type="text" class="form-control" id="merek_parts" name="merek_parts" placeholder="Masukkan merek parts">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_parts">Jenis :</label>
                    <select class="form-control" id="jenis_parts" name="jenis_parts">
                        <option value="red">Merah</option>
                        <option value="green">Hijau</option>
                        <option value="blue">Biru</option>
                        <option value="yellow">Kuning</option>
                        <option value="orange">Oranye</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="spesifikasi_parts"> Spesifikasi:</label>
                    <select class="form-control" id="spesifikasi_parts" name="spesifikasi_parts">
                        <option value="Spesifikasi 1">Spesifikasi 1</option>
                        <option value="Spesifikasi 2">Spesifikasi 2</option>
                        <option value="Spesifikasi 3">Spesifikasi 3</option>
                        <option value="Spesifikasi 4">Spesifikasi 4</option>
                        <option value="Spesifikasi 5">Spesifikasi 5</option>
                    </select>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="ket_spesifikasi_parts">Keterangan Spesifikasi :</label>
                    <input type="text" class="form-control" id="ket_spesifikasi_parts" name="ket_spesifikasi_parts" placeholder="Masukkan Spesifikasi parts">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="harga_jual_parts">Harga Jual :</label>
                    <input type="text" class="form-control" id="harga_jual_parts"  name="harga_jual_parts" placeholder="Masukkan merek parts">
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto_parts">Foto :</label>
                    <input type="file" class="form-control" id="foto_parts" name="foto_parts">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="catatan_parts">Catatan:</label>
                    <textarea class="form-control" id="catatan_parts" name="catatan_parts" rows="5" ></textarea>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="stock_parts">Stock :</label>
                    <input type="text" class="form-control" id="stock_parts" name="stock_parts">
                </div>
            </div>

            <div class="col-md-6">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>