<?php

echo date('d/m/Y');

$data = new DateTime();
echo $data->format('d-m-Y H:i:s');

/*
-> P  representação de período: vem antes de dia, mês, ano e semana
Y  anos
M  meses
D  dias
W  semanas
-> T  representação de tempo: vem antes de hora, minuto e segundo
H  horas
M  minutos
S  segundos
*/

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); /// adiciona um periodo de 5 minutos
$data->add($intervalo); // soma o intervalo com a hora atual
$data->sub($intervalo); // subtrai o intervalo com a hora atual 

var_dump($data);

/* Exercicio
	Crie uma data com a classe DateTime com a data e hora atuais. Em seguida, subtraia 5 dias, 10 horas e 50 minutos dessa data e exiba o resultado no seguinte formato:

	dia/mes/ano - hora:minuto:segundo
	*/

date_default_timezone_set('America/Sao_Paulo');
$dataAtual = new DateTime();

$intervalo = new DateInterval('P5DT10H50M');
$dataAtual->sub($intervalo);
echo $dataAtual->format('d/m/Y - H:i:s');