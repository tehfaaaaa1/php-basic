<?php
if (isset($_GET['nama'])) {
    $nama_siswa = $_GET['nama'];
    echo 'Nama Siswa : ' . $nama_siswa;
}
?>
<form action="get.php" method="get">
    <input type="text" name="nama" id="" />
    <input type="submit" />
</form>
<a href="get.php">Reset</a>