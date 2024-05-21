<?php
require_once ('connect.php');

$sql = 'UPDATE db_negara.negara SET nama="Malaysia", ibukota = "Kuala Lumpur", benua = "Asia" WHERE id=1;';

if ($connect->query($sql) === TRUE) {
    // echo 'New record created successfully!';
    echo '<script>alert("Data berhasil diedit!"); location = "connect.php"</script>';
} else {
    echo 'Error : ' . $sql . '<br>' . $connect->error;
}