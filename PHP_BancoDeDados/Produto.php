<?php

declare(strict_types=1);

class Produto
{
	/**
	* @var PDO
	*/
	private $conexao;

	public function __construct()
	{
		try{
			$this->conexao = new PDO('mysql:host=localhost;dbname=loja', 'root', 'Your_Password');
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
		
	}

	public function list() : array
	{
		$sql = 'SELECT * FROM produtos ORDER BY id';

		$produtos = [];

		foreach ($this->conexao->query($sql) as $key => $value){
			array_push($produtos, $value); // cada valor vai ser adicionado a variavel(array) produtos atraves do array_push.
		}

		return $produtos;
	}

	public function insert(string $descricao) : int
	{
		$sql = 'INSERT INTO produtos(descricao) VALUES(?)';

		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $descricao);
		$prepare->execute();

		return $prepare->rowCount();
	}

	public function update(string $descricao, int $id) : int
	{
		$sql = 'UPDATE produtos SET descricao = ? WHERE id = ?';

		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $descricao);
		$prepare->bindParam(2, $id);

		$prepare->execute();

		return $prepare->rowCount();
	}

	public function delete(int $id) : int
	{
		$sql = 'DELETE FROM produtos WHERE id = ?';

		$prepare = $this->conexao->prepare($sql);

		$prepare->bindParam(1, $id);
		$prepare->execute();

		return $prepare->rowCount();
	}
}