<?php

/*Crie uma funçao chamada divisao() que deverá receber dois numeros. na funçao, verifique se algum dos numeros passado por parametro é igual a 0, caso positivo, lance uma exceção.
Em seguida, escreva um algoritmo responsavel por executar a funçao divisao() forçando-a lançar a exceção (passando 0 em algum parametro) e realize o tratamento e captura atraves do try catch*/

function divisao($numero1, $numero2){
	if ($numero1 == 0 || $numero2 == 0){
		throw new Exception("Não é possível efetuar uma divisão com 0.");
	}
	return $numero1 / $numero2;
}

$numero1 = 3;
$numero2 = 0;

try {
	$divisao = divisao($numero1, $numero2);
	echo $divisao;
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}