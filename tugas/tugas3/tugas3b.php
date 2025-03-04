<?php
function urutanAngka($amount)
{
    $number = 1;
    for ($i = 1; $i <= $amount; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}
urutanAngka(5)
