<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <h1> HASIL KALKULATOR </h1>
    <br>
    <?php    
    $nomor1 = $_GET ['nilai1'];
    $nomor2 = $_GET ['nilai2'];
    $penjumlahan = $nomor1 + $nomor2;
    $pengurangan = $nomor1 - $nomor2;
    $perkalian = $nomor1 * $nomor2;
    $pembagian = $nomor1 / $nomor2;

    echo $nomor1," + ",$nomor2, " = ",$penjumlahan;
    echo "<br>";
    echo $nomor1," - ",$nomor2, " = ",$pengurangan;
    echo "<br>";
    echo $nomor1," * ",$nomor2, " = ",$perkalian;
    echo "<br>";
    echo $nomor1," : ",$nomor2, " = ",$pembagian;
    echo "<br>";
    ?>
</body>
</html>