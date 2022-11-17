<?php
    $file = fopen("data/survey.txt", "r");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Results</title>
</head>
<body>
<table>
    <caption>Survey Results</caption>
    <thead>
        <tr>
            <th>Program</th>
            <th>Duration</th>
            <th>Favourites</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if ($file) {
            while (($line = fgets($file, 4096)) !== false) {
                list($program, $plength, $favs) = explode(",", $line);
    ?>
        <tr>
            <td><?php echo $program ?></td>
            <td><?php echo $plength ?></td>
            <td><?php echo $favs ?></td>
        </tr>
    <?php
            }
            fclose($file);
        }
    ?>
    </tbody>
</table>
</body>
</html>

