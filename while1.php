<?php
    echo"<h2>Perulangan While Ke 1</h2>";

    $i =1;
    while ( $i<= 10) {
    echo "Angka ke-$i"."</br>";
    $i++;
    }
    echo "<br>";
    echo"<h2>Perulangan While Ke 2</h2>";
    $i =10;
    while ($i>=1) {
    echo "$i"."</br>";
    $i--;
    }
    echo "<br>";
    echo"<h2>Perulangan While Ke 3</h2>";

    $j =1;
    while($j <= 10){
        echo "<br>";
        $k = $j;
        while($k <=10){
            echo"$k ";
            $k++;
        }
        $j++;
    }




    ?>