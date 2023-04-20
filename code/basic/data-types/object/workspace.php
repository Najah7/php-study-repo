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
    include "definition.php";

    $book1 = new Book("Harry Potter", "JK Rowling", 400);

    echo "<p>", $book1->getTitle(), "</p>";

    $student1 = new Student("John", "Business", 3.5);
    echo "<p>", $student1->hasHonors(), "</p>";

    $avengers = new Movie("Avengers", "PG-13");
    echo "<p>", $avengers->getRating(), "</p>";
    $avengers->setRating("R");
    echo "<p>", $avengers->getRating(), "</p>";

    ?>
</body>
</html>