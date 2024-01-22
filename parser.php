<?php
// This script parses the 'sample.xml' file and displays the details of each book.

// Load the XML file
$xml = simplexml_load_file("sample.xml") or die("Error: Cannot create object");

// Iterate through each 'book' node in the XML
foreach ($xml->book as $book) {
    // Display the title, author, and publication year of the book
    echo "Title: " . $book->title . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Year: " . $book->year . "<br>";
    echo "<hr>"; // Separator for each book entry
}
?>
