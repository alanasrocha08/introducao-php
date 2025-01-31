<?php

/* Condicionais: escolha/caso/outrocaso/interrompa 
(switch/case/default/break*/

/* Protótipo de Chatbot */

echo "\n*** Chatbot da empresa TOTVS SA ***\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

/*Condicional Encadeada com comandos PHP equivalentes a 
ESCOLHA/CASO*/

switch ($opcao){
   case 1:
    $acao = "\nFoi escolhido pedir informações...";   
      break;  
   case 2:
	$acao = "\nFoi escolhido reclamações... O que houve ?";
      break;
   case 3: 
	$acao = "\nFoi escolhido elogios...";
      break;
   case 4: 
	$acao = "\nFoi escolhido status...";
	  break;
   default:
	$acao ="\nOpção inválida... Chamando atendente.";
}

echo "\n----------\n";
echo $acao;
echo"\n-----------\n";