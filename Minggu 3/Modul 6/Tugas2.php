<?php
    function harga($name, $color = "Biru")
    {
        $length = strlen($name);

        if ($length <= 10) {
            $harga = $length * 300;
        } else if ($length <= 20) {
            $harga = $length * 500;
        } else {
            $harga = $length * 700;
        }
        echo "<br> Bet " . $color . " dengan nama " . $name . ", seharga " . $harga;
    }

    $name1 = "Yoga";
    $name2 = "Naufal";
    $name3 = "YOGA NAUFAL RAY PUTRO";
    echo harga($name1, "Abu-Abu");
    echo harga($name2, "Hijau Army");
    echo harga($name3, "Putih" );

    
    ?>