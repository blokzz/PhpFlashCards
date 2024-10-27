<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "flashcards";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Blad połączenia z baza danych: " . $conn->connect_error);
}
?>