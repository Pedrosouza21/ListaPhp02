<?php
 echo "Sétimo Exercício- Construa um algoritmo que tendo como dados de entrada o preço de um produto (PR) e seu código de origem (CO), apresente o preço e a sua procedência, de acordo com a tabela abaixo:\n";

   $PR = 0;
   $CO = 0;

   echo "Preço do produto: ";
   $PR = (double)readLine();
   echo "Código de origem (1; 2; 3; 4 ou 5): ";
   $CO = (string)readLine();
   switch ($CO) 
   {
   case"1":
   echo "Valor: " . $PR . " reais Procedência: SUL\n";
   break;
   case"2":
   echo "Valor: " . $PR . " reais Procedência: SUDESTE\n";
   break;
   case"3":
   echo "Valor: " . $PR . " reais Procedência: CENTRO-OESTE\n";
   break;
   case"4":
   echo "Valor: " . $PR . " reais Procedência: NORTE\n";
   break;
   case"5":
   echo "Valor: " . $PR . " reais Procedência: NORDESTE\n";
   break;
   default:
   echo "CÓDIGO DE ORIGEM INCORRETO\n";
   break;
   }
   ?>