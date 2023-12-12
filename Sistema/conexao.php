<?php 

$banco = 'barbe';
$usuario = 'root';
$senha = '';
$servidor = 'localhost';

date_default_timezone_set('África/Luanda')

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "senha")
} catch (Exception $e) {
	echo 'Não conectado ao Banco de Dados! <br><br>' $e;
	
}

 ?>