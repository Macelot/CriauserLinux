<?php
#definir as credenciais do banco de dados
define('HOST', 'localhost');
define('USER', 'seconduser');
define('PASS', '123456abcdefgh');
define('BASE', 'test');
define('PORT', '3306');


$mysqli=new mysqli(HOST,USER,PASS,BASE,PORT);

echo "1 ............................Cria usuarios MySQL..................................". PHP_EOL;
$arq="./alunos.txt";
$pont=fopen($arq,"r");
$linha=fgets($pont);
$l_=preg_replace( "/\r|\n/", "", $linha );
while($l_){
    //var_dump($l_);
	$comando="CREATE USER '".$l_."'@'%' IDENTIFIED BY '123'";
	echo $comando. PHP_EOL;
    $mysqli->query($comando);
    $comando="grant ALL privileges on ".$l_.".* to '".$l_."'@'%' IDENTIFIED by '123'";
    if($mysqli->query($comando)){
	    //echo "Deu certo a inserção". PHP_EOL;
	}else{
	    echo "Erro na inserção".$mysqli->error. PHP_EOL;
	}
    echo $comando. PHP_EOL;
    $comando="flush privileges;";
    $mysqli->query($comando);
	$l_=preg_replace( "/\r|\n/", "",fgets($pont));
}
?>
