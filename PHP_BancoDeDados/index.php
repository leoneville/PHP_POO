<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {
	case 'list':
		//var_dump($produto->list());
		echo "<h3>Produtos: </h3>";

		foreach($produto->list() as $value){
			echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
		}
		break;
//----------------------------------------------------------//

	case 'insert':
		$status = $produto->insert('Xbox One');

		if (!$status) {
			echo "Não foi possivel executar a operação";
			return false;
		}

		echo "Registro inserido com sucesso!";
		break;
//---------------------------------------------------------//

	case 'update':
		$status = $produto->update('PC Gamer Pichau', 10);

		if (!$status) {
			echo "Não foi possivel executar a operação";
			return false;
		}

		echo "Registro atualizado com sucesso!";

		break;
//--------------------------------------------------------//

	case 'delete':
		$status = $produto->delete('5');

		if (!$status) {
			echo "Não foi possivel executar a operação";
			return false;
		}

		echo "Registro removido com sucesso!";

		break;
}