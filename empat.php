<?php
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        if ($type == 'name') {
            return $this->name;
        } elseif ($type == 'description') {
            return $this->description;
        }
        return [];
    }
}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Pages' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

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
