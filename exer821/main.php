<?php
  echo "Oitavo Exercício-  Construa um algoritmo que, dada a idade de um nadador (ID), classifique-o em uma das seguintes categorias e apresente a categoria:\n";

    $I = 0;

    echo "Digite sua idade: ";
    $I = (int)readLine();
    if ($I >= 5 && $I <=7)
    {
    echo "Categoria: Infantil A";           
    }
    else if ($I >= 8 && $I <= 10)
    {
    echo "Categoria: Infantil B";
    }
    else if ($I >= 11 && $I <= 13)
    {
    echo "Categoria: Juvenil A";
    }
    else if ($I >= 14 && $I <= 17)
    {
    echo "Categoria: Juvenil B";
    }
    else if ( $I>= 18) 
    {
    echo "Categoria: Adulto";
    }
    else
    {
    echo "Não Contém Categoria Para Essa Idade";
    }
    ?>