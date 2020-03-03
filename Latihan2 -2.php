<?php
    $x=8;
    $y=5;

    echo "<h3> Hasil Operasi Menggunakan Operator Perbandingan</h3>";
    echo "x = $x <br>";
    echo "y = $y <br>";
    if ($x == $y){
        echo "x sama dengan y"; 
    }
    else if ($x != $y) {
        echo "x tidak sama dengan y"; //jika percabangan if maka akan dimunculkan semua.
    }
    else if ($x >= $y) {
        echo "<br/>";
        echo "x lebih dari sama dengan y";
    }

    ?>