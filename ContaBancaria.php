<?php
	
declare(strict_types=1);

	class contaBancaria{
		// public - private - protected
		/**
		 * @var string
		 */
		private string $banco;
		/**
		 * @var string
		 */
		private string $nomeTitular;
		/**
		 * @var string
		 */
		private string $numeroAgencia;
		/**
		 * @var string
		 */
		private string $numeroConta;
		/**
		 * @var float
		 */
		private float $saldo;

		public function __construct(
			string $banco, 
			string $nomeTitular, 
			string $numeroAgencia, 
			string $numeroConta, 
			float $saldo
			) { // igual a funçao def __init__():
			$this->banco = $banco; // Igual o self.banco em python
			$this->nomeTitular = $nomeTitular;
			$this->numeroAgencia = $numeroAgencia;
			$this->numeroConta = $numeroConta;
			$this->saldo = $saldo;
		}

		public function obterSaldo() : string{
			return 'Seu saldo atual é: R$ '.$this->saldo;
		}

		public function depositar(float $valor) : string{
			$this->saldo += $valor;
			return "Depositado de R$ ".$valor." realizado!";

		}

		public function sacar(float $valor) : string{
			$this->saldo -= $valor;
			return "Saque de: R$ ".$valor." realizado!";
		}
	}

$conta1 = new contaBancaria(
	'Banco Inter', //banco
	'Leonardo Neville', //nomeTitular
	'8244', //numeroAgencia
	'57354-10', //numeroConta
	 0 //saldo
);

var_dump($conta1);

$conta2 = new contaBancaria(
	'Banco Santander', //banco
	'Laís Costa', //nomeTitular
	'8365', //numeroAgencia
	'25407-10', //numeroConta
	 0 //saldo
);

var_dump($conta2);

// echo $conta1->obterSaldo(); // 0

// echo "<br>";

// echo $conta1->depositar(300.00);

// echo "<br>";

// echo $conta1->obterSaldo();

// echo "<br>";

// echo $conta1->sacar(150.00);

// echo "<br>";

// echo $conta1->obterSaldo();




?>