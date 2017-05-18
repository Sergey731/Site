<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Докладчики</title>
</head>
<body>
<h1>Докладчики, тема доклада:</h1>
<ul>
<?php             
    $f = "../Bases/speakers.txt";
    $speakers = file($f);
    $number_of_speakers = count($speakers);
    for ($i = 0; $i < $number_of_speakers; $i++) {
        echo "<li>$speakers[$i]</li>";      
    }
?> 
</ul> 
<?php include ("menu.php"); ?>    
</body>
</html>
       