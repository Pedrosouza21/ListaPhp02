<?php
echo "Segundo Exercício- Construa um algoritmo que leia o valor de uma conta de luz (CL) e, caso o valor seja maior que R$ 50,00 apresente a mensagem: “Você está gastando muito”. Caso contrário exiba a mensagem: “Seu gasto foi normal”\n";

    $CL = 0;

    echo "Insira o valor da Conta: ";
    $CL = (double)readLine(); 
    if ($CL>50.00)
    {
     echo "Você está gastando muito.";
    }
    else
    {
     echo "Seu gasto foi normal";
    }
    ?>