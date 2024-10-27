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
<input type="text" id="search-input">
    <div class="row-cont">
        <?php
        include('bazadanych.php');

            $sql = "SELECT * FROM slowka ";
            $result = $conn->query($sql);

            if (!$result) {
                die("Błąd zapytania SQL: " . $conn->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<div class='row'>
                <ul> 
                <li>" . $row["id"] . "</li>
                <li>" . $row["slowo"] . "</li>
                <li >" . $row["znaczenie"] . "</li>
                </ul> 
                </div>";
            }
        
        $conn->close();
        ?>
  
    </div>
    </div>
    </div>


</body>
<script src="javascriptens.js"></script>
</html>
