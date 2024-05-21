<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo 'Selamat anda telah login';
    echo '<br>';
    echo '<a href="logout.php">Klik untuk Logout</a>';
} else {
    echo 'Anda belum login';
}