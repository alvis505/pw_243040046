<?php
$students = [
    [
        "nama" => "Muhammad Nazriel Bintang",
        "nrp" => "243040026",
        "email" => "bintang@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Alisha Nur Salampessy",
        "nrp" => "243040055",
        "email" => "aliyyah@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nugraha Putra Juliansyah",
        "nrp" => "243040036",
        "email" => "nugraha@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rezky Rizqullah",
        "nrp" => "243040037",
        "email" => "rezky@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Derania Safa Zaina",
        "nrp" => "243040038",
        "email" => "safadera@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fauzan Muhammad Luthfi",
        "nrp" => "243040043",
        "email" => "luthfi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Lestari Vebrianti",
        "nrp" => "243040044",
        "email" => "lestari@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Alvis Rafiffawaz",
        "nrp" => "243040046",
        "email" => "alvis@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rizki Agustian Maulana",
        "nrp" => "243040048",
        "email" => "rizkiagus@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rizki Anugrah",
        "nrp" => "243040061",
        "email" => "rizki@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loopin array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($students as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>