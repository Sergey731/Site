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
catch (PDOexeption $e) {
    echo "Невозможно установить соединение с базой данных";
}


$query = "INSERT INTO emales VALUES ('$e_mail')";
$data = $pdo->query($query);
echo "Спасибо. Теперь вы ничего не пропустите.";


?>
<?php include ("menu.php"); ?> 
</body>
</html>


	