<?php
function luasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function luasPersegi($sisi)
{
    $luas = $sisi * $sisi;
    return $luas;
}

function luasPerPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

echo "Luas Segitiga : " . luasSegitiga(5, 30) . "<br>";
echo "Luas Persegi : " . luasPersegi(5) . "<br>";
echo "Luas Persegi Panjang : " . luasPerPanjang(5, 30) . "<br>";