<?php
    require 'controller.php';

    if(isset($_POST["submit"])){

        if( tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambah');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambah');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #6E85B7;
        }
        h2{
            text-align: center;
        }
        .card{
            background-color: #B2C8DF;
            box-shadow: 2px 2px 2px rgba(0,0,00,8)
        }
    </style>
</head>
<body>
<div class="container">
        <div class="d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h2 class="card-title">Masukan Data Siswa</h2>
                    <form action ="" method="post">
                        <input type="hidden" name="id" id="" >
                    <div class="mb-3">
                        <label for="">Nama: </label>
                        <input type="text" name="nama" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Nis: </label>
                        <input type="text" name="nis" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Rombel: </label>
                        <input type="text" name="rombel" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Rayon: </label>
                        <input type="text" name="rayon" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Status: </label>
                        <input type="text" name="status" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Hobi: </label>
                        <input type="text" name="hobi" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat: </label>
                        <input type="text" name="alamat" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Merk Laptop: </label>
                        <input type="text" name="merk_laptop" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Cita-Cita: </label>
                        <input type="text" name="cita_cita" id="" >
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar: </label>
                        <input type="file" name="gambar" id="gambar"></td>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>