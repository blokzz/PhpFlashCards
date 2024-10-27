<?php
include('bazadanych.php');




?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiszki</title>
    <link rel="stylesheet" href="csgo.css"/>
</head>

<body>
    <div class="MainMenu">
    <div class="top-cont">
        <a href="./index.php"><button id="back-btn">Powrót</button></a>
        <div id="Theme"><i class="gg-moon"></i></div>
</div>
<div class="search-cont">
    <h1 class="Title">Dodaj fiszkę</h1>

   

    <form action='' method='POST' class="addForm">
    <div  class="int">
    <span>słówko:</span>
    <input type="text" name='slowko' autocomplete="off"/>
    </div>
    <div class="int">
    <span>tłumaczenie:</span>
    <input type="text" name='znaczenie' autocomplete="off">
    </div>
        <input type='submit' name='submit' value="dodaj" style="max-width:150px"/>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $slowko = $_POST["slowko"];
    $znaczenie = $_POST["znaczenie"];


    include('bazadanych.php');

    if ($conn->connect_error) {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }
    if(trim($slowko)!=='' or trim($znaczenie)!==''){
    $sql = "INSERT INTO slowka (slowo,  znaczenie) VALUES ('$slowko', '$znaczenie')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<span class='notif'>"."Nowy wiersz został dodany pomyślnie"."</span>";
    } else {
        echo "Błąd podczas dodawania wiersza: " . $conn->error;
    }
   }
   else{
    echo "<span class='notif' style='color:red'>"."Pola niemogą być puste!"."</span>";
   }
    $conn->close();
}
?> 
    
    </div>

    </div>

<script src="javascriptens.js"></script>
</body>
</html>
