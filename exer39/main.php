<?php
 echo "Terceiro Exercício- Construa um algoritmo que calcule o novo salário (SAL_NOVO) de um funcionário. Considere que o funcionário deverá receber um reajuste de 15% caso seu salário (SAL) seja menor que 500. Se o salário for maior ou igual a 500, mas menor ou igual a 1000, o reajuste deve ser de 10%. Caso o salário seja maior que 1000, o reajuste deve ser de 5%.\n";

   $SAL_NOVO = 0; 
   $SAL = 0;

   echo "Digite o salário atual do funcionário: ";
   $SAL = (double)readLine();
   if ($SAL< 500)
   {
     $SAL_NOVO = $SAL + ($SAL * 0.15);
   }
   if ($SAL>= 500 && $SAL< 1000)
   {
     $SAL_NOVO = $SAL + ($SAL * 0.10);
   }
   else
   {
     $SAL_NOVO = $SAL + ($SAL*0.05);  
     echo "O novo salário será: " . $SAL_NOVO . " reais\n";
   }
   ?>