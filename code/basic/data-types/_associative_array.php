<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Assciative Arrays</h1>
    <?php
        $grade = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
        $grade['Jim'] = 'F';

        echo $grade['Jim'], '<br>';
    ?>
</body>
</html>