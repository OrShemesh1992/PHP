<?php


class Book
{
    var $title;
    var $author;
    var $pages;

    function __construct($name="or"){
        $this->author=$name;
        echo "New Book Create $name<br>";
    }

}

$book1 = new Book();

$book1 -> title = "Harry Potter";
$book1 -> author = "JK";
$book1 -> pages = 400;


echo $book1 -> pages ;
echo "<br>";

$book2 = new Book("Tom");

$book2 -> title = "Loard";
$book2 -> author = "Tolkin";
$book2 -> pages = 700;


echo $book2 -> pages;

?>