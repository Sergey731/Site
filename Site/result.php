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

/*$query = "SELECT * FROM emales";
$data = $pdo->query($query);

while ($emales=$data->fetch()) {
    echo $emales['emale'] . "<br />";    
}*/




$query = "INSERT INTO emales VALUES ('$e_mail')";
$data = $pdo->query($query);
echo "Спасибо. Теперь вы ничего не пропустите.";

/*$file="../Bases/base.txt";
$text=file($file, FILE_IGNORE_NEW_LINES); 
$e_mail=$_POST["email"];

if (in_array($e_mail, $text)) {	
	echo "Спасибо. Вы уже зарегистрированы.";
} else{
	$f=fopen($file,"a+t");
	fputs($f,$e_mail . "\n");
	fclose($f);
	echo "Спасибо. Теперь вы ничего не пропустите.";
}*/
?>
<?php include ("menu.php"); ?> 
</body>
</html>


	