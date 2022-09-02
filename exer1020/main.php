<?php
echo "Décimo Exercício- Construa um algoritmo que, dados os comprimentos dos três lados (A, B e C) de um triângulo, verifique o tipo de triângulo formado. Apresentar qual é o tipo. Sabe-se que: ∙ Triângulo do tipo Eqüilátero – possui os três lados iguais ∙ Triangulo do tipo Isósceles – possui dois lados iguais ∙ Triângulo do tipo Escaleno – possui os três lados diferentes\n";

   $ANGULO = 0;

   echo "Digite o ângulo do triângulo:";
   $ANGULO = (double)readLine();
   if ($ANGULO == 90)
   {
   echo "Triângulo Eqüilátero";
   }
   else if ($ANGULO<90) 
   {
   echo "Triângulo Isósceles";
   }
   else if ($ANGULO>90) 
   {
   echo "Triângulo Escaleno";
  } 
  ?>