<?php
function hitungLuasLingkaran($jari)
{
    return pi() * pow($jari, 2);
}

function hitungKelilingLingkaran($jari)
{
    return 2 * pi() * $jari;
}

$jari = 10;
echo "Menghitung Luas Lingkaran<br><br>
Jari-jari = $jari cm.<br>
Luas lingkaran = " . hitungLuasLingkaran($jari) . "\n cm².<hr>";

echo "Menghitung Keliling Lingkaran<br><br>
Jari-jari = $jari cm.<br>
Keliling lingkaran = " . hitungKelilingLingkaran($jari) . "\n cm.";
