<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "sample_html/header.html" ?>

    <?php
        $title = "My First include";

        include "sample_php/title.php"
    
    ?>

    <p>Contents</p>

    

    <?php include "sample_html/footer.html" ?>
</body>
</html>