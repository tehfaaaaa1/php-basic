<?php
$nilai = 80;
if ($nilai > 90) {
    $grade = "A+ Predikat Terpuji";
} else if ($nilai > 80) {
    $grade = "A";
} else if ($nilai > 70) {
    $grade = "B";
} else if ($nilai > 60) {
    $grade = "C";
} else {
    $grade = "D";
}
echo "Nilai Anda : $nilai <br>";
echo "Predikat Anda : $grade <br>";