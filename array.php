<?php
$negara = [
    [
        "nama" => "Indonesia",
        "ibukota" => "Jakarta",
        "benua" => "Asia",
        "subbenua" => "Asia Tenggara",
        "image" => "img/indonesia.png"
    ],
    [
        "nama" => "Niger",
        "ibukota" => "Niamey",
        "benua" => "Afrika",
        "subbenua" => "Afrika Barat",
        "image" => "img/niger.png"
    ],
    [
        "nama" => "Cina",
        "ibukota" => "Beijing",
        "benua" => "Asia",
        "subbenua" => "Asia Timur",
        "image" => "img/china.jpg"
    ],
    [
        "nama" => "Jerman",
        "ibukota" => "Berlin",
        "benua" => "Eropa",
        "subbenua" => "Eropa Tengah",
        "image" => "img/jerman.png"
    ],
    [
        "nama" => "Brazil",
        "ibukota" => "Brasilia",
        "benua" => "Amerika",
        "subbenua" => "Amerika Selatan",
        "image" => "img/brazil.png"
    ]
];
$siswa = [
    [
        "nama" => "Galih",
        "kelas" => "11",
        "jurusan" => "RPL",
        "alamat" => "Bogor",
        "nilai" => [70, 80, 90],
        "image" => "img/Kratos_PS4.png"
    ],
    [
        "nama" => "Dadu",
        "kelas" => "1",
        "jurusan" => "Pertanian",
        "alamat" => "Bekasi",
        "nilai" => [70, 80, 90],
        "image" => "img/kururin-kuru-kuru.gif"
    ]
];
// var_dump($negara);
echo $siswa[1]["nilai"][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List Negara</h1>
    <ul style="list-style: none">
        <?php foreach ($negara as $x): ?>
            <li>Negara : <?= $x['nama'] ?></li>
            <li>Ibu Kota : <?= $x['ibukota'] ?></li>
            <li>Benua : <?= $x['benua'] ?></li>
            <li>Sub-Benua : <?= $x['subbenua'] ?></li>
            <li><img src="<?= $x['image'] ?>" alt="" width="200"></li>
            <br><br>
        <?php endforeach; ?>
    </ul>
    <br>
    <h1>List Siswa</h1>
    <!-- <b>Siswa </b> -->
    <ul style="list-style: none;">
        <?php foreach ($siswa as $x): ?>
            <li>Nama : <?= $x['nama'] ?></li>
            <li>Kelas : <?= $x['kelas'] ?></li>
            <li>Jurusan : <?= $x['jurusan'] ?></li>
            <li>Alamat : <?= $x['alamat'] ?></li>
            <li>Nilai : <?= $x['nilai'][2] ?></li>
            <li><img src="<?= $x['image'] ?>" alt="" width="200"></li>
            <br><br>
        <?php endforeach; ?>
    </ul>
</body>

</html>