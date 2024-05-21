<?php
require_once 'connect.php';

$sql = 'DELETE FROM guru WHERE id = 2';
if ($connect->query($sql) === TRUE) {
    echo '<script>alert("Data berhasil dihapus!"); location = "connect.php"</script>';
} else {
    echo 'Error : ' . $sql . '<br>' . $connect->error;
}