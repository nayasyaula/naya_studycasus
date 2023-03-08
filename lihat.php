<?php
    require 'controller.php';

    $id = $_GET["id"];
    $student = query("SELECT * FROM students  WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #6E85B7;
        }
        h1{
            text-align: center;
        }
        .card{
            background-color: #B2C8DF;
            box-shadow: 2px 2px 2px rgba(0,0,0,0,8)
        }
        img{
            width: 200px;
            border-radius: 200px;
            float: right;
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                <h1 class="card-title">Data Siswa</h1>
                <a href="index.php">Kembali</a>
                <img src="img/<?=$student['gambar']?>">
                    <ul>
                        <li>Nama: <?= $student["nama"]?></li>
                        <li>Nis: <?= $student["nis"]?></li>
                        <li>Rombel: <?= $student["rombel"]?></li>
                        <li>Rayon: <?= $student["rayon"]?></li>
                        <li>Status: <?= $student["status"]?></li>
                        <li>Hobi: <?= $student["hobi"]?></li>
                        <li>Alamat: <?= $student["alamat"]?></li>
                        <li>Merk Laptop: <?= $student["merk_laptop"]?></li>
                        <li>Cita-Cita: <?= $student["cita_cita"]?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>