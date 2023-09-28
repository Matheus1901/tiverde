<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link:css></LINK:css>
    <title>Treino da aula do dia 15/09/2023</title>
</head>
<body>

<?php

$severName="localhost";
$userName="root";
$password="usbw";
$dbName="bd_jogo";

$con= new mysqli($severName, $userName, $password, $dbName); 
$con->set_charset ("utf8");

if($con->connect_error) { die("falha");} 

$sql="SELECT * FROM tbl_jogo;";

$res = $con->query($sql);

?>

<div>
<table>

<tr>
<th>ID</th>
<th>NOME</th>
</tr> 

<?php
foreach($res as $jogo) {
echo'
<tr>
<td>'.$jogo['id_jogo'].'</td>
<td>'.$jogo['nome_jogo'].'</td>
</tr>';

}


?>
</body>
</html>

