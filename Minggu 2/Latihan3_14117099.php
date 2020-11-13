<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <?php
        $empty = "0";

        while ($empty <="50"){

            if ($empty == "2"){
                echo $empty;
            }
            else if ($empty % 2 == "1" && $empty != 1){
                echo $empty;
            }
            
            echo "<br>";
            $empty = $empty +1;
        }



    ?>
</body>
</html>