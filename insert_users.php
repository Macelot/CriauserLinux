<?php
define('HOST', 'localhost');
define('USER', 'aluno1');
define('PASS', '123');
define('BASE', 'aluno1');
define('PORT', '3306');

$mysqli=new mysqli(HOST,USER,PASS,BASE,PORT);

echo " ..........................Cria users....................................". PHP_EOL;
//$comando="Truncate table users";
//$mysqli->query($comando);
$ns = array("Ercio","Marcos","Andrei","Caroline","Felipe","Franisco","Gabriel Vaz","Gabriel Ismael","Isis","Joao","Kelvin","Matheus","Nicolas","Rafael","Samuel","Thalis","William","Vinicius");
$pass = array("123","abc","789","senha");
echo "". PHP_EOL;
$tempo_inicia = microtime(true);
//echo "inicio ........................".$tempo_inicia;
$comando="INSERT INTO `users` (
	`name`,
	`email`,
	`username`,
	`password`,
	`created`,
	`modified`)
	VALUES ('Marcelo Telles','marcelot@server.com','marcelot', '123', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
	if($mysqli->query($comando)){
	    //echo "Deu certo a inserção". PHP_EOL;
	}else{
	    echo "Erro na inserção".$mysqli->error. PHP_EOL;
	}
for($i=1;$i<=17;$i++){
	$comando="INSERT INTO `users` (
	`name`,
	`email`,
	`username`,
	`password`,
	`created`,`modified`)
	VALUES ('".$ns[$i]."',
	'".$ns[$i]."@server.com',
	'".strtolower(substr($ns[$i],0,4))."',
	'".$pass[rand(0,3)]."',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
	if($mysqli->query($comando)){
	}else{
	    echo "Erro na inserção".$mysqli->error. PHP_EOL;
	}
}
$tempo_fim = microtime(true);
//echo "depois de um tempo ".$tempo_fim;
$tempo = $tempo_fim - $tempo_inicia;
echo "levou ". $tempo;
echo "..............................................................". PHP_EOL;

?>


