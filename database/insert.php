<?php
require_once 'connect.php';
// if ($connect->connect_error) {
//     die('Connection failed: ' . $connect->connect_error);
// }

$sql = 'INSERT INTO `db_guru` . `guru` (`nama`, `alamat`, `umur`) VALUES 
("yogay", "jakarta", "18"),
("jaki", "ciomas", "24"),
("rizi", "depok", "19");';

if ($connect->query($sql) === TRUE) {
    echo 'New record created successfully!';
} else {
    echo 'Error : ' . $sql . '<br>' . $connect->error;
}