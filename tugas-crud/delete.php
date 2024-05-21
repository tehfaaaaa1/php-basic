<?php
require_once 'connect.php';

$sql = 'DELETE FROM db_negara.negara WHERE id = 1';
if ($connect->query($sql) === TRUE) {
    echo '<script>alert("Data berhasil dihapus!"); location = "connect.php"</script>';
} else {
    echo 'Error : ' . $sql . '<br>' . $connect->error;
}