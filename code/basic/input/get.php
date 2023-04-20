<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET</h1>


    

    <form action="get.php", method='get'>
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name='age'>
        <input type="submit">
    </form>
    <br>
    <?php
    // NOTE: values from the URL params are stored in the $_GET superglobal
        echo 'Your name is ' . $_GET['name'];
        echo '<br>';
        echo 'Your age is ' . $_GET['age'];
    ?>
</body>
</html>