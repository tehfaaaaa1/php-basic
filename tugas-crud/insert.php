<?php
require_once 'connect.php';
// if ($connect->connect_error) {
//     die('Connection failed: ' . $connect->connect_error);
// }

$sql = 'INSERT INTO `db_negara` . `negara` (`nama`, `ibukota`, `benua`) VALUES 
("Argentina", "Buenos Aires", "Amerika"),
("Italia", "Roma", "Eropa"),
("Iran", "Tehran", "Asia"),
("Etiopia", "Adis Ababa", "Afrika"),
("Polandia", "Warsaw", "Eropa");';

if ($connect->query($sql) === TRUE) {
    echo '<script>alert("Data berhasil ditambah!"); location = "connect.php"</script>';
} else {
    echo 'Error : ' . $sql . '<br>' . $connect->error;
}