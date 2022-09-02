<?php
echo "Sexto (Décimo) Segundo Exercício- Construa um programa que leia vários números inteiros e mostre qual foi o maior valor fornecido. O final da lista de produtos será indicado quando o usuário entrar com um valor negativo (esse valor não deve fazer parte da comparação de valores).";
   $ISP = 0; $ISN = 0; $IE = 0;

   echo "\nDigite a lista de números: ";
   while (true)
   {
   $IE = (int)readLine();
   if ($IE == 0)
   {
   break;
   }
   else if ($IE > 0)
   {
   $ISP += $IE;
   }
   else
   {
   $ISN += $IE;
   }
   }
   echo "Soma dos positivos: " . $ISP . "\nSoma dos negativos: " . $ISN . "\nSoma de ambos: " . ($ISP + $ISN) . "";?>