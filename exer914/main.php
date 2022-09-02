<?php
 echo "Nono Exercício- Construa um algoritmo que leia as informações de: horas trabalhadas (HT), valor da hora trabalhada (VH). Calcule e apresente o salário líquido do empregado, baseado nas tabelas abaixo. OBS: Salário Líquido = Salário Bruto – INSS – Imposto de Renda a) Salário Bruto = Horas trabalhadas * Valor da hora trabalhada b) INSS = 11% do salário líquido c) Imposto de Renda  após descontar o INSS usar esse valor e ler a alíquota do imposto de renda e parcela a deduzir na tabela abaixo\n";

    $HT = 0; 
    $VH = 0; 
    $SALQINSS = 0; 
    $SB = 0; 
    $INSS = 0; 
    $vald = 0; 
    $SALLIQ = 0; 
    $IR = 0;

    echo "Horas trabalhadas: ";
    $HT = (double)readLine();
    echo "Valor por hora: ";
    $VH = (double)readLine();
    $SB= $HT * $VH;
    $INSS = $SB * 0.11;
   $SALQINSS = $SB- $INSS;
    if ($SALQINSS<= 1257.12)
   {
     echo "Salário Líquido: " . $SALQINSS . " reias";
   }
    else if ($SALQINSS> 1257.13 && $SALQINSS<= 2512.08)
   {
     $IR  = ($SALQINSS * 0.15) * $SALQINSS - 188.57;
     $SALLIQ = $SALQINSS - $IR;
     echo "Salário Líquido: " . $SALLIQ . " reias";
   }
    else
   {
     $IR = ($SALQINSS * 0.275) * $SALQINSS - 502.58;
     $SALLIQ = $SALQINSS - $IR;
     echo "Salário Líquido: " . $SALLIQ . " reias";
   }
   ?>