<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch Statement</h1>
    <from action='switch.php' method='POST'>
        What is your grade?
        <input type='text' name='grade'>
        <input type='submit'>
    </from>

    <?php
        $grade = $_POST['grade'];
        switch ($grade) {
            case 'A':
                echo 'You did amazing!';
                break;
            case 'B':
                echo 'You did pretty good!';
                break;
            case 'C':
                echo 'You did poorly!';
                break;
            case 'D':
                echo 'You did very bad!';
                break;
            case 'F':
                echo 'You failed!';
                break;
            default:
                echo 'Invalid grade';
        }
    ?>
</body>
</html>