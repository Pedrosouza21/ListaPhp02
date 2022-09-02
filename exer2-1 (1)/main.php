<?php
echo "Dada a matriz: [[3,4,5],[8,4,5],[8,6,9]], elabore um programa que mostre os elementos da diagonal principal da matriz.";

$total=0;
$matriz = [[3,4,5],[8,4,5],[8,6,9]];
echo"\nOs valores da diagonal principal são: \n";

for($i=0;$i<=2;$i++)
{
  echo $matriz[$i][$i]."\n";
}
?>