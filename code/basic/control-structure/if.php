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
        $isFriend = true;
        $isTall = true;
        // NOTE: using block statement
        if ($isFriend && $isTall) {
            echo 'You are my friend';
        } else if ($isFriend && !$isTall) {
            echo 'You are my short friend';
        } else if (!$isFriend && $isTall) {
            echo 'You are not my friend but you are tall';
        }else {
            echo 'You are not my friend and you are not tall';
        }

        function fizbuzz($num) {
            if ($num % 3 == 0 && $num % 5 == 0) {
                return 'FizzBuzz';
            } else if ($num % 3 == 0) {
                return 'Fizz';
            } else if ($num % 5 == 0) {
                return 'Buzz';
            } else {
                return $num;
            }
        }



        echo 'result of fizbuzz', fizbuzz(15), '<br>';
    ?>
</body>
</html>