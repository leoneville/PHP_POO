<?php

function validarUsuario(array $usuario){
	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
		throw new Exception("Campos obrigatórios não foram preenchidos!");
	}

	return true;
}

$usuario = array(
	'codigo' => 1,
	'nome' => 'Leonardo Neville',
	'idade' => 57,
);

$status = false;

try {
	$status = validarUsuario($usuario);
	echo "Login efetuado com sucesso !!";
} catch (Exception $e){
	echo $e->getMessage();
} finally {
	echo "Status da Operação: " . (int)$status; // cast
	die();
}

echo "\n ... executando ... \n";