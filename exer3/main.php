<?php
echo "Usando-se o exercício anterior, elabore um programa que mostre a diagonal oposta da matriz.";

$total=0;
$matriz = [[3,4,5],[8,4,5],[8,6,9]];
echo"\nOs valores da diagonal oposta são: \n";

for($i=0 , $j=2; $i<=2 , $j>=0 ; $i++ , $j--)
{
  echo $matriz[$i][$j]."\n";
}
?>