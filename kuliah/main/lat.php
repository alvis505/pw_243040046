<?php

/**
 * Array adalah variable yang dapat menampung lebih dari satu nilai
 * Terdapat 2 cara membuat array
 * dalam 1 array bisa dibuat dengan berbagai tipe data
 * array merupakan pasanngan key dan juga value
 * keynya adalah index dimulai dari 0
 */

//Cara lama
$day = array("sunday", "monday", "tuesday");
// Cara baru
$month = ["january", "february", "march"];

//untuk mencetak
var_dump($day);
echo "<br>";
print_r($month);
echo "<br>";


// untuk menampilkan element yang ada di array
echo $day[1];
echo "<br>";

//menambahkan element baru pada array yang sudah ada
$day[] = "wednesday";
print_r($day);
