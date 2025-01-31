<?php
/* Loop DO/WHILE (semlhante ao REPITA) */

$contador = 1;

do {
	$numero = readline("Informe número: ");
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n";
	
	$contador++;
	
}while($contador <= 3);