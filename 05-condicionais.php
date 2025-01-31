<?php
/* Condicionais: se, então, senão, fim-se */

/* Protótipo de Chatbot */

echo "\n*** Chatbot da empresa TOTVS SA ***\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamações\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

//teste de entrada
//echo "\n" .$opcao;

//Condicional Encadeada
if($opcao == 1){
    $acao = "\nFoi escolhido pedir informações...";   
}elseif($opcao == 2){
	$acao = "\nFoi escolhido reclamações... O que houve ?";
}elseif($opcao == 3) {
	$acao = "\nFoi escolhido elogios...";
}elseif($opcao == 4) {
	$acao = "\nFoi escolhido status...";
}else{
	$acao ="\nOpção inválida... Chamando atendente.";
}

echo "\n----------\n";
echo $acao;
echo"\n-----------\n";





