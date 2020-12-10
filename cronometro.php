<?php
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":", $hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];

//echo $hora;
?>
<HTML>
<HEAD>
 <TITLE>cronometro</TITLE>
 <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;

 function tempo(){
 if (segundo<59){
 segundo=segundo+1
 if (segundo==59){
 minuto=minuto+1;
 segundo=0;
 if (hora==24){
 hora=hora+1;
 minuto=0;
 segundo=0;
 }
  }
 }
  document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
 }
</script>

</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<div name="relogio" id="relogio"></div>
</HTML>