<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numbers</h1>
    <?php
        $int_num = 10;
        $float_num = 20.5;

        // NOTE: operators  are the same as Python
        echo $int_num + $float_num, '<br>';
        echo 10 % 3, '<br>';
        echo $int_num += 10, '<br>';

        // Methods for numbers👇
        echo abs(-100), '<br>';
        echo pow(2, 4), '<br>';
        echo sqrt(144), '<br>';
        echo max(2, 10), '<br>';
        echo min(2, 10), '<br>';
        echo round(3.2), '<br>';
        echo ceil(3.2), '<br>';
        echo floor(3.2), '<br>';
    ?>
</body>
</html>