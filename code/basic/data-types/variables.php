<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // NOTE: using
        define('CONSTANT', 'Hello World');

        $name = 'John';
        $age = 30;
        $isMale = true;
        $height = 1.85;
        $salary = null;
        $colors = array('red', 'green', 'blue');

        echo CONSTANT, '<br>';

        echo 'name:', $name, '<br>';
        echo 'age:', $age, '<br>';
        echo 'isMale:', $isMale, '<br>';
        echo 'height:', $height, '<br>';
        echo 'salary:', $salary, '<br>';
        echo 'My favorite color is ', $colors[1], '<br>';

        // using . to concatenate strings
        echo 'This' . 'is' . 'a' . 'string' . '<br>';
    ?>
</body>
</html>