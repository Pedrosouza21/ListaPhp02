<?php
    echo "Primeiro (Sétimo) Exercício- Construa um programa que calcule N! (fatorial de N), sendo que o valor de N (inteiro) é fornecido pelo usuário. Sabe-se que: N! = 1 x 2 x 3 x 4 x .... x N";
    $NF = 0; $N = 0;

   echo "\nInsira um valor para calcular seu fatorial: ";
   $N = (int)readLine();

   for ($NF = 1; $N >= 1; $N = $N - 1)
   {
   $NF = $NF * $N;
   }
   echo "Fatorial calculado: " . $NF . "\n";
  ?>