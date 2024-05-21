<?php
// Connect to DB
$hostname = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_negara';

$connect = new mysqli($hostname, $user, $pass, $db) or die('Koneksi Database Gagal');

// SQL Shenanigan
$sql2 = 'SELECT * FROM `db_negara`.`negara` LIMIT 1000;';
$query = $connect->query($sql2);
$i = 1;
if ($query->num_rows != 0) {
    while ($row = $query->fetch_assoc()) {
        echo $i . '. ID : ' . $row['id'] . '<br>';
        echo 'Negara : ' . $row['nama'] . '<br>';
        echo 'Ibu Kota : ' . $row['ibukota'] . '<br>';
        echo 'Wilayah : ' . $row['benua'] . '<br>';
        echo '<br>';
        $i++;
    }
}
?>
<a href="insert.php">Insert</a>
<a href="update.php">Update</a>
<a href="delete.php">Delete</a>