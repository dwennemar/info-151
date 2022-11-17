<?php
    $program = $_POST['program'];
    $plength = $_POST['plength'];
    $fav1 = isset($_POST['fav1']) ? " fav1" : null;
    $fav2 = isset($_POST['fav2']) ? " fav2" : null;
    $fav3 = isset($_POST['fav3']) ? " fav3" : null;

    $result = "{$program}, {$plength},{$fav1}{$fav2}{$fav3}";

    $file = fopen("data/survey.txt", "a");
    fwrite($file, "{$result}\n");

    echo "Data saved successfully";
    fclose($file);

