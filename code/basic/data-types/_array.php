<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        $friends = array('Kevin', 'Karen', 'Oscar', 'Jim');
        $friends[4] = 'Angela';

        echo $friends[0], '<br>';

        echo 'length of array: ', count($friends), '<br>';

    ?>
</body>
</html>