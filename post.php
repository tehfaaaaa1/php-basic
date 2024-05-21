<?php
if (isset($_POST['nama'])) {
    $nama_siswa = $_POST['nama'];
    echo 'Nama Siswa : ' . $nama_siswa;
}
?>
<form action="post.php" method="post">
    <input type="text" name="nama" id="" />
    <input type="submit" />
</form>
<a href="post.php">Reset</a>