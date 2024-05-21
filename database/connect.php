<?php
// Connect to DB
$hostname = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_guru';

$connect = new mysqli($hostname, $user, $pass, $db) or die('Koneksi Database Gagal');

// SQL Shenanigan
// $sql2 = 'SELECT * FROM `db_guru`.`guru` LIMIT 1000;';
// $query = $connect->query($sql2);
// if ($query->num_rows != 0) {
//     while ($row = $query->fetch_assoc()) {
//         echo $row['nama'] . '<br>';
//     }
// }