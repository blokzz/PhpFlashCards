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
    <div id="FlashCard">
        <?php
        include('bazadanych.php');
         
            $maxid = "SELECT id FROM `slowka` ORDER by id DESC LIMIT 1;";
            $resultid = $conn->query($maxid);
            while ($row = $resultid->fetch_assoc()) {
                $losowaLiczba = mt_rand(1,  $row["id"]);
            };
            $sql = "SELECT * FROM slowka WHERE id='$losowaLiczba'";
            $result = $conn->query($sql);

            if (!$result) {
                die("Błąd zapytania SQL: " . $conn->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<span>" . $row["slowo"] . "</span><br>
                <span id='meaning'>" . $row["znaczenie"] . "</span><br>";
            }
        
        $conn->close();
        ?>
    <div class="btn-container">
    <button id="show-btn">Pokaż</button>
    <div class="StartForm" id="next-btn">
    <form action='' method='POST'>
        <input type='submit' name='submit' value="Dalej" />
    </form>
    </div>
        </div>
    </div>

    </div>
</body>
<script src="javascriptens.js"></script>
</html>
