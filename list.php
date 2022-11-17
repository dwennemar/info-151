<?php
    $file = fopen("data/survey.txt", "r");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Results</title>
    <link rel="stylesheet" type="text/css" href="./styles/list.css" media="all">
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
<div class="honesty-statement">
    <span>I certify that: </span>
    <ul>
        <li>My work will be entirely my own work.</li>
        <li>I will not quote the words of any other person from a printed source or a website without indicating what has been quoted and providing an appropriate citation.</li>
        <li>I will not submit my work in this course to satisfy the requirements of any other course.</li>
    </ul>
    <p>Full Name: <em>Daniel Wennemar</em></p>
    <p>Date: 11/17/2022</p>
</div>
<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.cs.drexel.edu%2F%7Edw967%2Flist.php">W3C Validator checked!</a>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.cs.drexel.edu%2F%7Edw967%2Flist.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
    <img style="border:0;width:88px;height:31px"
         src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
         alt="Valid CSS!">
</a>
</body>
</html>

