<?php

$author = trim(fgets(STDIN));
$title = trim(fgets(STDIN));
$price = trim(fgets(STDIN));

$type = trim(fgets(STDIN));


class Book
{
    private $title;
    private $author;
    private $price;
    private $bookType;


    public function getBookType()
    {
        return $this->bookType;
    }

    public function __toString()
    {
        return "OK" . "\n" . $this->getPrice();
    }

    public function setBookType($bookType)
    {
        if ($bookType != 'STANDARD' || $bookType != 'GOLD') {
            throw new Exception("Type is not valid!");
        }
        $this->bookType = $bookType;
    }


    public function __construct(string $author, string $title, float $price)
    {
        $this->setName($title);
        $this->setAuthor($author);
        $this->setPrice($price);

    }


    public function getName()
    {
        return $this->title;
    }


    public function setName($title)
    {
        if (strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }
        $this->name = $title;
    }

    public function getAuthor()
    {

        return $this->author;
    }


    public function setAuthor($author)
    {

        $authorArr = explode(" ", $author);
        $secondName = $authorArr[1];
        if (is_numeric($secondName[0])) {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        if ($price <= 0) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }
}

class GoldenEditionBook extends Book
{
    public function getPrice()
    {
        return parent::getPrice() * 1.3;
    }
}

try {
    switch ($type){
        case 'STANDARD':
            $book = new Book($author, $title, $price);
            echo $book;
            break;
        case 'GOLD':
            $book = new GoldenEditionBook($author, $title, $price);
            echo $book;
            break;
        default:
            echo "Type is not valid!";
            break;
    }

} catch (Exception $e) {
    echo $e->getMessage();
}