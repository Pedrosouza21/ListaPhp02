$<?php
echo "Nono (Décimo Primeiro) Exercício- Construa um programa que leia vários números inteiros e positivos, calculando ao final da seqüência a soma e a média desses números. A seqüência termina quando o usuário entrar com um valor negativo (esse valor não deve fazer parte de nenhum dos cálculos).";
   $C = 0; $R = 0; $N1 = 0;
   
   while ($C <= 5)
   {
   echo "\nDigite um numero: ";
   $N1  = (int)readLine();
   if ($N1 == 0)
   {
   break;
   }
   $R += $N1;
   $C++;
   }
   echo "\nO resultado é: " . $R . " ";
   echo "\nEncerrando programa."; ?>