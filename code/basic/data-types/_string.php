<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strings</h1>
    <?php
        $phrase = "To be or not to be";

        echo $phrase[0], '<br>';

        echo strtoupper($phrase), '<br>';
        echo strtolower($phrase), '<br>';

        // NOTE: str_replace(search, replace, subject)
        echo str_replace('be', 'know', $phrase), '<br>';

        // NOTE: substr(start, length) 
        echo substr($phrase, 8, 3), '<br>';



    ?>
</body>
</html>

