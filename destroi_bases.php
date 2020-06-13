<?php
#definir as credenciais do banco de dados
define('HOST', 'localhost');
define('USER', 'seconduser');
define('PASS', '123456abcdefgh');
define('BASE', 'test');
define('PORT', '3306');

$mysqli=new mysqli(HOST,USER,PASS,BASE,PORT);

echo "1 ............................Destroi bases..................................". PHP_EOL;
$arq="./alunos.txt";
$pont=fopen($arq,"r");
$linha=fgets($pont);
while($linha){
	$comando="DROP DATABASE ".$linha;
	$mysqli->query($comando);
	$linha=fgets($pont);
}
?>
