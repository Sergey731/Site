<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$e_mail=$_POST["email"];

try {
$pdo = new PDO('mysql:host=localhost;dbname=base', 'root', 'carlsen');
}
catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
}

$query = "SELECT * FROM emales";
$data = $pdo->query($query);
$counter = 0;

    while ($emales=$data->fetch()) {        
        if ($emales['emale'] == $e_mail) {
            $counter+=1;                                       
        } 
        if ($counter==1) {
            break;
        }
    }
    
    if ($counter>=1) {
        echo "Спасибо. Вы уже зарегистрированы.";        
    } else {
        $query = "INSERT INTO emales VALUES ('$e_mail')";
        $data = $pdo->query($query);
        echo "Спасибо. Теперь вы ничего не пропустите.";
        }   
?>
<?php include ("menu.php"); ?> 
</body>
</html>


    