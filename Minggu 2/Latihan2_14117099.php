<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <?php
    $nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    sort ($nama);

    $empty = "0";
    while ($empty <= "6"){
        
        echo"<h1>";
        echo$nama[$empty];
        echo "</h1>";
        $empty = $empty+1;

    }
    ?>
</body>
</html>