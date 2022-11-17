<?php
    $program = $_POST['program'];
    $plength = $_POST['plength'];
    $fav1 = isset($_POST['fav1']) ? " fav1" : null;
    $fav2 = isset($_POST['fav2']) ? " fav2" : null;
    $fav3 = isset($_POST['fav3']) ? " fav3" : null;

    $result = "{$program}, {$plength},{$fav1}{$fav2}{$fav3}";

    $file = fopen("data/survey.txt", "a");
    $result = fwrite($file, "{$result}\n");

    echo "Data saved successfully";
    fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Survey</title>
    <link rel="stylesheet" type="text/css" href="./styles/save.css" media="all">
</head>
<body>
<h1 id="message" class="<?php echo $result ? 'pass' : 'fail' ?>">
    <?php
        echo $result ? "Data saved successfully" : "Error while saving your data"
    ?>
</h1>
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
<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fwww.cs.drexel.edu%2F%7Edw967%2Fsave.php">W3C Validator checked!</a>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fwww.cs.drexel.edu%2F%7Edw967%2Fsave.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">
    <img style="border:0;width:88px;height:31px"
         src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
         alt="Valid CSS!">
</a>
</body>
</html>

