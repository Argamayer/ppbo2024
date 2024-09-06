<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author("J.K. Rowling", "British author, best known for the Harry Potter series.");

$publisher = new Publisher("Bloomsbury", "50 Bedford Square, London");
$publisher->setPhone(1234567890);

$book = new Book(9780747532743, "Harry Potter and the Philosopher's Stone", "A young wizard's journey begins", "Fantasy", "English", 223, $author->show('name'), $publisher->name);

echo "Book Information:\n";
print_r($book->showAll());

echo "\nBook Detail by ISBN:\n";
print_r($book->detail(9780747532743));

echo "\nAuthor Information:\n";
echo "Name: " . $author->show('name') . "\n";
echo "Description: " . $author->show('description') . "\n";

echo "\nPublisher Information:\n";
echo "Name: " . $publisher->name . "\n";
echo "Address: " . $publisher->address . "\n";
echo "Phone: " . $publisher->getPhone() . "\n";

?>
