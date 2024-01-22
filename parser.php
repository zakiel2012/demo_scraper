<?php
// Load the XML file
$xml = simplexml_load_file("sample.xml") or die("Error: Cannot create object");

// Display each book's details
foreach ($xml->book as $book) {
    echo "Title: " . $book->title . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Year: " . $book->year . "<br>";
    echo "<hr>";
}
?>
