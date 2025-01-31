<?php
// Entradas interatuva usando readline
$curso = readline("informe o curso: ");
$cargaHoraria = readline ("informe a carga horária: ");

// Processamento
$faltasPermitidas = $cargaHoraria * 0.25 ;

// Saída concatenada [O preço final é: valor]
echo "nome do curso: " .$curso."\n"; 
echo "carga horária: " .$cargaHoraria."h \n";
echo "Faltas permitidas: " .$faltasPermitidas."h \n"; 
// \n é usado para quebra de linha 