<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($b) {
        $b->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);



// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";


// Output must look like this:
// Available Copies of 'The Great Gatsby': 4
// Available Copies of 'To Kill a Mockingbird': 2 

// Problem Statement: Marks: 60
// 1.You are required to create a simple Library System in PHP using Object-Oriented Programming (OOP) principles. The system should have the following functionalities:
// 2.Create a Book class with private properties for title and availableCopies.
// Create a Member class with a private property for name.
// 3.Implement methods in the Book class to borrow and return books. This borrowBook method should decrease the available copies and returnBook method should increase the available copies.
// 4.Implement methods in the Member class to borrow and return books. Here the borrowBook method should take book as an argument and returnBook method should also take book as an argument.
// 5.Write a PHP program to demonstrate the usage of the library system, including adding books to the library, adding members, borrowing books, returning books, and displaying the available books.
// 6.You have to create  2 books and 2 members. Member One has to borrow  book 1 and Member Two has to borrow  book 2.
// 7.For your reference we have provided a template. 
?>
