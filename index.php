<?php
    require 'controller.php';
    $students = query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
            box-shadow: 4px 4px 4px rgba(0,0,0,0,16)
        }
        .table{
            background-color: #C4D7E0;
        }
        tr{
            text-align: center;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                <h1 class="card-title">Data Siswa</h1>
                    <a href="tambah.php">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nis</th>
                                <th>Rombel</th>
                                <th>Rayon</th>
                                <th>Status</th>
                                <th>Hobi</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($students as $student) { ?>
                            <tr>
                                <td><?= $i?></td>
                                <td><?= $student["nama"]?></td>
                                <td><?= $student["nis"]?></td>
                                <td><?= $student["rombel"]?></td>
                                <td><?= $student["rayon"]?></td>
                                <td><?= $student["status"]?></td>
                                <td><?= $student["hobi"]?></td>
                                <td><?= $student["alamat"]?></td>
                                <td>
                                    <a href="delete.php?id=<?= $student["id"] ?>" onclick="return confirm('Yakin data mau di hapus')">Hapus</a>
                                    <a href="ubah.php?id=<?= $student["id"] ?>">Ubah</a>
                                    <a href="lihat.php?id=<?= $student["id"] ?>">Lihat</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>