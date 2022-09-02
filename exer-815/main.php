<?php
echo "Oitavo (Décimo Quinto) Exercício- Construa um programa que leia um número e indique se ele é par ou impar. O programa só deve levar em consideração valores positivos.";
   $N = 0;

   echo "\nDigite um numero inteiro: ";
   $N  = (int)readLine();
   if ($N % 2 == 0)
   {
   echo "\nEle é Par";
   }
   else
   {
   echo "\nEle é Ímpar";
   }?>