<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Functions</h1>
    <?php
    // NOTE: name with camelCase
        function sayHi($name, $age=18) {
            echo "Hello $name, you are $age <br>";
        }

        sayHi('Mike', 40);
        sayHi('Steve');

        function cube($num) {
            return $num * $num * $num;
        }

        echo cube(4), '<br>';
    ?>
</body>
</html>