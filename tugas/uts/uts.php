<?php
function cetak_bintang($angka)
{
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>"; // Ganti baris
    }
}

// Contoh pemanggilan
cetak_bintang(10);
