<?php
#definir as credenciais do banco de dados
define('HOST', 'localhost');
define('USER', 'seconduser');
define('PASS', '123456abcdefgh');
define('BASE', 'test');
define('PORT', '3306');

$mysqli=new mysqli(HOST,USER,PASS,BASE,PORT);

echo "1 ............................destroi usuarios MySQL..................................". PHP_EOL;
$arq="./alunos.txt";
$pont=fopen($arq,"r");
$linha=fgets($pont);
$l_=preg_replace( "/\r|\n/", "", $linha );
while($l_){
    //var_dump($l_);
	$comando="DROP USER '".$l_."'@'%'";
	echo $comando. PHP_EOL;
    $mysqli->query($comando);
	$l_=preg_replace( "/\r|\n/", "",fgets($pont));
}
?>
