<?php
/*Loop WHILE (ENQUANTO)*/

//Exemplo 1: contagem de 1  até 10
//$i = 1; //variável de controle da iteração/repetição
//o "i" equivale ao contador

//while ($i <= 10) {
	//echo $i."\n";
	//$i = $i + 1;
	//$i++; //operador de incremento ++
//}

//echo "\n\n";

//Exemplo: obter/exibir nome e idade de 3 pessoas
$i = 1; 

while($i <= 3) {
    //Entradas	
	$nome = readline("informe seu nome: ");
    $idade = readline ("informe sua idade: ");
	
	//Saídas
    echo "nome : " .$nome."\n"; 
    echo "idade: " .$idade. " anos\n";
	
	$i++;
}








