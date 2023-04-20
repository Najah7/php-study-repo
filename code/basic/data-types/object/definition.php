


<?php

/* オブジェクト指向のキーワード
- private：クラス内からのみアクセスできる
- protected：継承したクラスからもアクセスできる
- public：どこからでもアクセスできる
- var：古いバージョンのPHPでpublicとして使われていた


*/
    class Book {

        private $title = "default title";
        private $author = "default author";
        private $pages = 0;

        function __construct($aTitle, $aAuthor, $aPages) {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
        
        function getTitle() {
            return $this->title;
        }

        function getAuthor() {
            return $this->author;
        }

        function getPages() {
            return $this->pages;
        }
    }

    class Student {

        private $name;
        private $major;
        private $gpa;

        function __construct($name, $major, $gpa) {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors() {
            if ($this->gpa >= 3.5) {
                return "true";
            }
            return "false";
        }

        function getName() {
            return $this->name;
        }

        function getMajor() {
            return $this->major;
        }

        function getGpa() {
            return $this->gpa;
        }

        function setGpa($gpa) {
            $this->gpa = $gpa;
        }
    }

    class Movie {
            
            private $title;
            private $rating;
    
            function __construct($title, $rating) {
                $this->title = $title;
                $this->rating = $rating;
            }
    
            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                $this->rating = $rating;
            }
    }

    class Chef {
        function makeChicken() {
            echo "The chef makes chicken <br>";
        }

        function makeSalad() {
            echo "The chef makes salad <br>";
        }

        function makeSpecialDish() {
            echo "The chef makes bbq ribs <br>";
        }
    }

    class ItalianChef extends Chef {
        function makePasta() {
            echo "The chef makes pasta <br>";
        }

        function makeSpecialDish() {
            echo "The chef makes chicken parm <br>";
        }
    }

    
?>