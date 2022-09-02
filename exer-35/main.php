<?php
echo  "Terceiro (Quinto) Exercício-  A conversão de graus Fahrenheit para Celsius é obtida pela fórmula C=5/9(F-32). Construa um programa que calcule e apresente TODAS as temperaturas (em Celsius) correspondentes aquelas em Fahrenheit de 1 até 50, ou seja, para cada temperatura em Fahrenheit, variando de 1 até 50, calcular e apresentar uma temperatura em Celsius.";
   $C = 0; $F=0;

   for ($F=1; $F<=50; $F++) 
   {
   $C = ($F - 32) / 1.8;
   echo "\n" . $F . "Graus Fahrenheit = " . $C . " Graus Celsius";
   }
?>