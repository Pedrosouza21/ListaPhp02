<?php
echo "Quinto Exercício- Construa um algoritmo que determine quanto será gasto para encher o tanque de um carro (VG), sabendo-se que o preço da gasolina é de R$ 1,80 e o preço do álcool é de R$ 1,00. O usuário fornecerá os seguintes dados: Tipo de carro (TC) (G – gasolina ou A – álcool) e Capacidade do tanque (CT), em litros.\n";
 
    $TC = 0;
    $VG = 0; 
    $G = 0; 
    $A = 0; 
    $CT = 0;

    echo "Tipo do carro, a gasolina(G) ou a álcool(A): ";
    $TC = (string)readLine();
    echo "Capacidade do tanque (em litros): ";
    $CT = (double)readLine();
    
    if ($TC == "G")
    {
    $VG= 1.80 * $CT;
    echo "O valor a ser pago é " . $VG . " reais\n";
    }
    else 
    {
    $VG= 1.00 * $CT;
    echo "O valor a ser pago é " . $VG . " reais\n";
    }
    ?>