<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POST</h1>


    

    <form action="post.php", method='post'>
        Name: <input type="text" name="name">
        PASSWORD: <input type="password" name="password">
        <br>
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        
        <input type="submit">
    </form>
    <br>
    <?php
    // NOTE: values from the http request body are stored in the $_POST superglobal

        $data = array(
            'name' =>  $_POST['name'],
            'password' => $_POST['password'],
            'fruits' => $_POST['fruits'][0]
        );
        echo 'Your name is ' . $data['name'];
        echo '<br>';
        echo  $data['fruits'];
        
    ?>
</body>
</html>